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

function get_restaurant_reviews_count_by_uid($uid){

	$ci =& get_instance();
	$ci->load->database();
	$ci->load->model('review_model', 'review');

	$details = $ci->review->get_review_count_by_uid($uid);

   	if ($details)
   		return $details;
   	else
   		return FALSE;
}

?>