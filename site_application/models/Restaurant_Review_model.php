<?php

	class Restaurant_Review_model extends CI_Model {
		public $geo_table = 'geographical_vote_count';


		public function insert_or_update_geographical_vote_count(){
        	$rid = $_POST['review_ref'];

        	$query = $this->db->get_where($this->geo_table, array('rid' => $rid));

        	if($query->result()){
        		$count = $query->row()->count;

        		$this->db->where('rid', $rid);
				$this->db->update($this->geo_table, array('count' => $count+=1));
        		return 'FALSE';
        	}
        	else{
        		$this->db->insert($this->geo_table, array('rid'=> $rid, 'count' => 1));
        		
        		return $query->result();
        	}

        }
	}

?>