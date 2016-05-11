<?php

	class Review_model extends CI_Model {
		public $review_table = 'review';
		public $review_date = 'field_data_review_date';
		public $review_votes = 'field_data_review_votes';
		public $votes_count = 'field_review_vote_count';
        public $review_images = 'field_review_images';


		public function insert_review()
        {
        	$review_rid = $_POST['review_ref'];
        	$experience = $_POST['experience'];
            $title = $_POST['title'];

            $data = array(
            	'rid' => $review_rid,
                'title' => $title,
            	'body' => $experience,
            	'created' => time()
            	);

            $this->db->insert($this->review_table, $data);

            return $this->db->insert_id();
        }

        public function get_reviews($rid, $limit){

            $query = $this->db->get_where($this->review_table,  array('rid' => $rid), $limit);

            return $query->result();
        }

        public function update_vote_count(){
        	$rid = $_POST['review_ref'];

        	$query = $this->db->get_where($this->votes_count, array('rid' => $rid));

        	if($query->result()){
        		$count = $query->row()->count;

        		$this->db->where('rid', $rid);
				$this->db->update($this->votes_count, array('count' => $count+=1));
        		return 'FALSE';
        	}
        	else{
        		$this->db->insert($this->votes_count, array('rid'=> $rid, 'count' => 1));
        		
        		return $query->result();
        	}

        }

        public function insert_review_date($rvid)
        {
        	$date = $_POST['visit_date'];
        	$data = array(
        		'rvid' => $rvid,
        		'date_visited' => $date
        		);

        	$this->db->insert($this->review_date, $data);
        }

        public function insert_votes($rvid){

        	$rid = $_POST['review_ref'];

        	$food = $_POST['food'];
			$ambience = $_POST['ambience'];
			$service = $_POST['service'];

			$overall_average = ($food + $ambience + $service)/3;

			$data = array(
				'rid' => $rid,
				'rvid' => $rvid,
				'food' => $food,
				'ambience' => $ambience,
				'service' => $service,
				'overall' => $overall_average
				);

			$this->db->insert($this->review_votes, $data);

        }

        public function insert_review_images($rvid, $path){

            $data = array('rvid' =>  $rvid, 'path' => $path );

            $this->db->insert($this->review_images, $data);

        }



	}

?>