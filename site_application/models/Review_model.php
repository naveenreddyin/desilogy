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

        public function update_review($rvid, $title, $body){
            $data = array(
               'title' => $title,
               'body' => $body,
               'updated' => time()
            );

            $this->db->where('rvid', $rvid);
            $this->db->update($this->review_table, $data);



        }

        public function get_reviews($rid, $limit){

            $query = $this->db->get_where($this->review_table,  array('rid' => $rid), $limit);

            return $query->result();
        }

        public function get_reviews_all_data($rid, $limit){

            $query = $this->db->select('*')->
                from('review')
            ->join('field_data_review_votes as votes','votes.rvid = review.rvid', 'left')
            ->where('review.rid', $rid, $limit)->order_by("votes.overall", "desc")->get();

            return $query->result();
        }

        public function get_review_detail($rid, $rvid, $uid){
            $query = $this->db->select('*')->
            from($this->review_table)
            ->join('field_data_review_votes as votes','votes.rvid = review.rvid', 'left')
            ->join('field_review_images as images', 'images.rvid = review.rvid', 'left')
            ->where(array('review.rid' => $rid, 'review.rvid' => $rvid, 'uid' => $uid))->get();
            // print_r($query->row());

            return $query->row();

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

        public function get_author_id($rvid){
            $query = $this->db->get_where($this->review_table,
                array('rvid' => $rvid));

            return $query->row();
        }

        public function check_for_user_vote($rid, $uid){

            $query = $this->db->get_where($this->review_table,
                array('rid' => $rid, 'uid' => $uid));

            return $query->row();

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

        public function update_review_date($rvid, $visit_date)
        {
            $date = $visit_date;
            $data = array(
                'date_visited' => $date
                );

            $this->db->where('rvid', $rvid);
            $this->db->update($this->review_date, $data);
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

        public function update_votes($rvid, $food, $ambience, $service){

            $overall_average = ($food + $ambience + $service)/3;

            $data = array(
                'food' => $food,
                'ambience' => $ambience,
                'service' => $service,
                'overall' => $overall_average
                );

            $this->db->where('rvid', $rvid);
            $this->db->update($this->review_votes, $data);

        }

        public function insert_review_images($rvid, $path, $filename){

            $data = array('rvid' =>  $rvid, 'path' => $path, 'filename' => $filename);

            $this->db->insert($this->review_images, $data);

        }

        public function update_review_images($rvid, $path, $filename){

            $data = array('path' => $path, 'filename' => $filename);

            $this->db->where('rvid', $rvid);
            $this->db->update($this->review_images, $data);

        }



	}

?>