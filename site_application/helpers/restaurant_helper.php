<?php

function check_user_vote($rid, $uid){

	$ci =& get_instance();
	$ci->load->library('Aauth');
	$ci->load->database();
	$ci->load->model('review_model', 'review');

	$details = $ci->review->check_for_user_vote($rid, $uid);

   	if ($details)
   		return $details;
   	else
   		return FALSE;
}

?>