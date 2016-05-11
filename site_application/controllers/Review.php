<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Review extends CI_Controller {

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
	public function create_review($rid)
	{
		if($_SERVER['REQUEST_METHOD'] == 'GET'){
			$data['rid'] = $rid;
			
			$this->load->model('restaurant_model', 'restaurant');
			$data['query'] = $this->restaurant->get_restaurant_details($rid);

			$this->load->view('head');
			$this->load->view('review/create-review', $data);
		}else if($_SERVER['REQUEST_METHOD'] == 'POST'){

			// print_r($_REQUEST);

			$this->load->model('review_model', 'review');

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
			        $path .= $data['full_path'].";";
			        print_r($data);
			        // print_r($data['full_path']);
				}
			}
			$this->review->insert_review_images($inserted_id, $path);

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

		// print_r($_FILES);
		$count = count($_FILES['images']['name']);
		// if ($_FILES)
		// 	print "count: ".$count;
		$data_arr = array();

		$path = "";

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
		       $path .= $data['full_path'].";";
		       print_r($data);
		        // print_r($data['full_path']);
			}

			
			// else
			// 	echo 'no';
		}
		echo $path;
		// print_r($data_arr);
	}
}
