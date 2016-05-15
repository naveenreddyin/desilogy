<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Review extends CI_Controller {

	public function __construct() {
        parent::__construct();
        // Your own constructor code
        $this->load->library("Aauth");
        $this->load->model('review_model', 'review');
    }

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function create_review($rid, $rvid=FALSE)
	{

		if ($this->aauth->is_loggedin())
		{	

			if (!$this->aauth->is_member(4)){

				$this->session->set_flashdata('error', 'You are not authorized to review this restaurant.');
				redirect('restaurant/browse/'.$rid, 'refresh');	
			}

			if ($this->review->check_for_user_vote($rid, $this->aauth->get_user_id()))
			{
				$this->session->set_flashdata('warning', 'You already have reviewed this restaurant.');
				redirect('review/update_review/'.$rid.'/'.$rvid, 'refresh');
			}	

		}else{

			// user not logged in so redirect to login page.

			$this->session->set_flashdata('error', 'Please login or register to review. ');
			redirect('welcome/login/', 'refresh');
		}
			
		if($_SERVER['REQUEST_METHOD'] == 'GET'){
			$data['rid'] = $rid;
		
			$this->load->model('restaurant_model', 'restaurant');
			$data['query'] = $this->restaurant->get_restaurant_details($rid);

			$this->load->view('head');
			$this->load->view('review/create-review', $data);
		}else if($_SERVER['REQUEST_METHOD'] == 'POST'){

			// print_r($_REQUEST);

			$inserted_id = $this->review->insert_review();
			$this->review->insert_review_date($inserted_id);
			$this->review->insert_votes($inserted_id);
			$this->review->update_vote_count();

			// start for uploading if any files are uploaded.

			$upload_path = realpath(APPPATH . '../public/uploads');

			$config['upload_path'] = $upload_path;
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size']	= '500';
			$config['max_width']  = '1024';
			$config['max_height']  = '768';
			$config['overwrite'] = FALSE;

			$this->load->library('upload', $config);
			
			$files = $_FILES;

			$count = count($_FILES['images']['name']);
			$path = "";
			$file_name = "";

			foreach($_POST as $post => $value){
				if (strpos($post, "uploaded_") === 0) {
					// echo '<br/>'.$post . ' '.$value.'<br/>';
					$file_name .= $value.';';
				}
			}

			for($i = 0; $i < $count; $i++){
				if($files['images']['name'][$i])
				{
					$_FILES['images']['name']= $files['images']['name'][$i];
					// echo $_FILES['images']['name'].'</br>';
			        $_FILES['images']['type']= $files['images']['type'][$i];
			        $_FILES['images']['tmp_name']= $files['images']['tmp_name'][$i];
			        $_FILES['images']['error']= $files['images']['error'][$i];
			        $_FILES['images']['size']= $files['images']['size'][$i];

			        $this->upload->initialize($config);

			        $this->upload->do_upload('images');

			        // echo $this->upload->display_errors();
			        $data = $this->upload->data();
			        $path .= $data['full_path'].";";
			        $file_name .= $data['file_name'].";";
			        // print_r($data);
			        // print_r($data['full_path']);
				}
			}
			$this->review->insert_review_images($inserted_id, $path, $file_name);

			redirect('restaurant/browse/'.$_POST['review_ref'], 'refresh');
		}
	}

	public function create_review_test(){
		$upload_path = realpath(APPPATH . '../public/uploads');

		$config['upload_path'] = $upload_path;
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '500';
		$config['max_width']  = '1024';
		$config['max_height']  = '768';
		$config['overwrite'] = FALSE;

		$this->load->library('upload', $config);
		
		$files = $_FILES;

		print_r($_REQUEST);
		$count = count($_FILES['images']['name']);
		// if ($_FILES)
		// 	print "count: ".$count;
		$data_arr = array();

		$path = "";
		$file_name = "";

		foreach($_POST as $post => $value){
			if (strpos($post, "uploaded_") === 0) {
				echo '<br/>'.$post . ' '.$value.'<br/>';
				$file_name .= $value.';';
			}
		}

		for($i = 0; $i < $count; $i++){
			if($files['images']['name'][$i])
			{
				$_FILES['images']['name']= $files['images']['name'][$i];
				// echo $_FILES['images']['name'].'</br>';
		        $_FILES['images']['type']= $files['images']['type'][$i];
		        $_FILES['images']['tmp_name']= $files['images']['tmp_name'][$i];
		        $_FILES['images']['error']= $files['images']['error'][$i];
		        $_FILES['images']['size']= $files['images']['size'][$i];

		        $this->upload->initialize($config);

		        $this->upload->do_upload('images');

		        echo $this->upload->display_errors();
		        $data = $this->upload->data();
		        $path .= 'public/uploads/'.$data['file_name'].";";
		        $file_name .= $data['file_name'].";";

		       // print_r($data);
		        // print_r($data['full_path']);
			}

			
			// else
			// 	echo 'no';
		}
		echo $path.'<br/>';
		echo $file_name;
		// print_r($data_arr);
	}

	public function update_review($rid, $rvid=FALSE){
		if (!$this->aauth->is_loggedin())
		{
			// user not logged in so redirect to login page.

			$this->session->set_flashdata('error', 'Please login or register to update review. ');
			redirect('welcome/login/', 'refresh');

		}

		if (!$this->aauth->is_member(4)){

				$this->session->set_flashdata('error', 'You are not authorized to review this restaurant.');
				redirect('restaurant/browse/'.$rid, 'refresh');	
		}

		if($this->review->get_author_id($rvid) != $this->aauth->get_user_id()){
			
				$this->session->set_flashdata('error', 'You are not authorized to update this restaurant.');
				redirect('restaurant/browse/'.$rid, 'refresh');	
		}

		if($_SERVER['REQUEST_METHOD'] == 'GET'){

			$data['rid'] = $rid;
			$data['rvid'] = $rvid;

			$this->load->model('restaurant_model', 'restaurant');
			$data['query'] = $this->restaurant->get_restaurant_details($rid);
			$data['review'] = $this->review->get_review_detail($rid, $rvid, $this->aauth->get_user_id());

			$this->load->view('head');
			$this->load->view('review/update-review', $data);

		}else if($_SERVER['REQUEST_METHOD'] == 'POST'){

			// print_r($_REQUEST);
			// print_r($_FILES);

			$rvid = $_POST['rvid'];
			$food = $_POST['food'];
			$ambience = $_POST['ambience'];
			$service = $_POST['service'];
			$title = $_POST['title'];
			$body = $_POST['experience'];
			$visit_date = $_POST['visit_date'];


			$this->review->update_review($rvid, $title, $body);
			$this->review->update_review_date($rvid, $visit_date);
			$this->review->update_votes($rvid, $food, $ambience, $service);

			// // start for uploading if any files are uploaded.

			$upload_path = realpath(APPPATH . '../public/uploads');

			$config['upload_path'] = $upload_path;
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size']	= '500';
			$config['max_width']  = '1024';
			$config['max_height']  = '768';
			$config['overwrite'] = FALSE;

			$this->load->library('upload', $config);
			
			$files = $_FILES;

			$count = count($_FILES['images']['name']);
			$path = "";
			$file_name = "";

			foreach($_POST as $post => $value){
				if (strpos($post, "uploaded_") === 0) {
					// echo '<br/>'.$post . ' '.$value.'<br/>';
					$file_name .= $value.';';
				}
			}

			for($i = 0; $i < $count; $i++){
				if($files['images']['name'][$i])
				{
					$_FILES['images']['name']= $files['images']['name'][$i];
					// echo $_FILES['images']['name'].'</br>';
			        $_FILES['images']['type']= $files['images']['type'][$i];
			        $_FILES['images']['tmp_name']= $files['images']['tmp_name'][$i];
			        $_FILES['images']['error']= $files['images']['error'][$i];
			        $_FILES['images']['size']= $files['images']['size'][$i];

			        $this->upload->initialize($config);

			        $this->upload->do_upload('images');

			        // echo $this->upload->display_errors();
			        $data = $this->upload->data();

			        if($data['full_path'])
			        	$path .= $data['full_path'].";";
			        if($data['file_name'])
						$file_name .= $data['file_name'].";";
			        // print_r($data);
			        // print_r($data['full_path']);
				}
			}
			
			$this->review->update_review_images($rvid, $path, $file_name);

			redirect('restaurant/browse/'.$_POST['review_ref'], 'refresh');

		}

	}
}

?>
