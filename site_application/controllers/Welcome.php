<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct() {
        parent::__construct();
        // Your own constructor code
        $this->load->library("Aauth");
        $this->load->model('restaurant_model', 'restaurant');

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
	public function index()
	{	 
		$data['query'] = $this->restaurant->get_last_five_entries();
		// echo $this->aauth->is_loggedin();
		
		$this->load->view('head', $data);
		$this->load->view('welcome_message');
	}

	public function login()
	{	
		if($_SERVER['REQUEST_METHOD'] == 'GET'){
			$this->load->view('head');
			$this->load->view('auth/login');
		}
		else{

			$email = $_POST['email'];
			$password = $_POST['password'];

			if($this->aauth->login($email, $password)){
				if($this->aauth->is_member(4))
					redirect('/');
				else if ($this->aauth->is_member(5))
					redirect('restaurant/admin/'.$this->aauth->get_user_id(), 'refresh');
				else
					redirect('/');

			}
				$this->aauth->print_errors();
    	}	

	}
		
	

	public function register()
	{
		if($_SERVER['REQUEST_METHOD'] == 'GET'){

			$this->load->view('head');
			$this->load->view('auth/login');
		}
		else{
			// print_r($_REQUEST);

			$email = $_POST['email'];
			$password = $_POST['password'];
			$role = $_POST['role'];

			$user_id = $this->aauth->create_user($email, $password);
			if($user_id){
				$this->aauth->add_member($user_id, $role);

				if($this->aauth->login($email, $password)){
					redirect('/');
				}

			}else{
				$this->session->set_flashdata('error_message', 'Email already exists, please choose a different email, or click on forgot password link.');
				redirect('welcome/register');
			}
			

				// print $this->aauth->is_loggedin();

		}

	}
}
