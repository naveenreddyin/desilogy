<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Panel extends CI_Controller {

	public function __construct() {
        parent::__construct();
        // Your own constructor code
        $this->load->library("Aauth");
        $this->load->model('restaurant_model', 'restaurant');

    }

    public function restaurant()
	{	
		if($_SERVER['REQUEST_METHOD'] == 'GET'){

			$data['query'] = $this->restaurant->get_restaurant_by_bayesian_ranking();
			$data['city'] = $_GET['city'];
			
			$this->load->view('head');
			$this->load->view('panel/restaurant', $data);
		}
		else{
			echo "No restaurants found on this request.";
    	}	

	}

}

?>