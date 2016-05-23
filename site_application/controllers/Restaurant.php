<?php
defined('BASEPATH') OR exit('No direct script access allowed');

include_once(APPPATH.'core/Restaurant_Controller.php');

class Restaurant extends Restaurant_Controller {

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
	public function index()
	{

		$data['name_form_data'] = array(
			        'type'  => 'input',
			        'name'  => 'name',
			        'id'    => 'form-data-restaurant-name',
			        'value' => '',
			        'class' => 'form-control'
			);

		$data['body_form_data'] = array(
			        'type'  => 'input',
			        'name'  => 'body',
			        'id'    => 'form-data-restaurant-body',
			        'value' => '',
			        'class' => 'form-control'
			);
		// $this->load->view('head');
		// $this->load->view('restaurant_index', $data);
		$this->load->view('restaurant/admin/admin-head');
		$this->load->view('restaurant/admin/add-restaurant', $data);

	}

	public function create_restaurant(){

		$this->load->model('restaurant_model', 'restaurant');


		$data = array();

		$inserted_id = $this->restaurant->insert_entry();

		$this->restaurant->insert_name_entry($inserted_id);

		$this->restaurant->insert_address($inserted_id);

		$this->restaurant->insert_phone($inserted_id);

		$this->restaurant->insert_website($inserted_id);

		$upload_path = realpath(APPPATH . '../public/uploads');

		$config['upload_path'] = $upload_path;
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '500';
		$config['max_width']  = '1024';
		$config['max_height']  = '768';
		$config['overwrite'] = FALSE;

		$this->load->library('upload', $config);
		$this->upload->initialize($config);

		if(!empty($_FILES['restaurant_main_image']['name'])) {

			if (!$this->upload->do_upload('restaurant_main_image'))
			{
				$error = array('error' => $this->upload->display_errors());
				echo "error uploading file";

			}
			else
			{
				$data = $this->upload->data();

				$this->restaurant->insert_image($data, $inserted_id);
				// print_r($data);
				// redirect('restaurant/browse/'.$inserted_id, 'refresh');

			}
		}

		redirect('restaurant/browse/'.$inserted_id, 'refresh');
	}

	public function browse($rid){
		$this->load->model('restaurant_model', 'restaurant');
		$data['query'] = $this->restaurant->get_restaurant_details($rid);
		$data['rid'] = $rid;
		// if($data['query']->path)
		// 	print_r($data['query']);
		$this->load->view('head', $data);
		$this->load->view('/restaurant/google-map-head');
		$this->load->view('/restaurant/browse');

	}

	public function admin($uid){

		$this->load->view('restaurant/admin/admin-head');
		$this->load->view('restaurant/admin/admin-view');
	}
}
