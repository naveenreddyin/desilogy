<?php

function get_restaurant_detail($rid){

	$ci =& get_instance();
	$ci->load->database();
	$ci->load->model('restaurant_model', 'restaurant');

	$details = $ci->restaurant->get_restaurant_details($rid);
   return $details;
}

function get_restaurant_reviews($rid, $limit){
	$ci =& get_instance();
	$ci->load->model('review_model', 'review');

	$reviews = $ci->review->get_reviews($rid, $limit);

	return $reviews;
}

function get_restaurant_reviews_all_data($rid, $limit){
	$ci =& get_instance();
	$ci->load->model('review_model', 'review');

	$reviews = $ci->review->get_reviews_all_data($rid, $limit);

	return $reviews;
}

?>