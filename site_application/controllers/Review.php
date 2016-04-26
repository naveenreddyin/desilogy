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

			$this->load->view('head');
			$this->load->view('review/create-review', $data);
		}else if($_SERVER['REQUEST_METHOD'] == 'POST'){

			// print_r($_REQUEST);

			$this->load->model('review_model', 'review');

			$inserted_id = $this->review->insert_review();
			$this->review->insert_review_date($inserted_id);
			$this->review->insert_votes($inserted_id);
			$this->review->update_vote_count();

			
		}
	}
}
