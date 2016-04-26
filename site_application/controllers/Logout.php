<?php
defined('BASEPATH') OR exit('No direct script access allowed');

include_once(APPPATH.'core/Base_Controller.php');

class Logout extends Base_Controller {

	public function __construct() {
        parent::__construct();
        // Your own constructor code
        $this->load->library("Aauth");
    }

    public function index()
	{	

		$this->aauth->logout();
		redirect('/');
	}


}



?>