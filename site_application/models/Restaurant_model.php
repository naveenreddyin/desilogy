<?php

	class Restaurant_model extends CI_Model {

        public $name;
        public $body;
        public $created;
        public $updated;

        public $restaurant_table_name = 'restaurant';
        public $field_data_name = 'field_data_restaurant_name';
        public $field_data_address = 'field_data_restaurant_address';
        public $field_data_website = 'field_data_restaurant_website';
        public $field_data_phone = 'field_data_restaurant_phone';
        public $field_data_main_image = 'field_data_restaurant_main_image';

        public function __construct()
        {
                // Call the CI_Model constructor
                parent::__construct();
        }

        public function get_last_five_entries()
        {
                $query = $this->db->select('*')->
                from('restaurant')
                ->join('field_data_restaurant_address as address',
                        'address.rid = restaurant.rid', 'left')
                ->join('field_data_restaurant_name as name', 'name.rid = restaurant.rid', 'left')
                ->join('field_data_restaurant_phone as phone', 'phone.rid = restaurant.rid', 'left')
                ->join('field_data_restaurant_main_image as image', 'image.rid = restaurant.rid', 'left')
                ->join('field_data_restaurant_website as website', 'website.rid = restaurant.rid', 'left')
                ->limit(5)
                ->get();
                return $query->result();
        }

        public function get_restaurant_by_uid($uid){

            $sql = "SELECT rid, name
                FROM `restaurant`
                WHERE `uid` = " . $uid . ""; 
            $query = $this->db->query($sql);

            return $query->result();

        }

        public function get_restaurant_details_by_uid($uid){
                $query = $this->db->select('*')->
                from('restaurant')
                ->join('field_data_restaurant_address as address',
                        'address.rid = restaurant.rid', 'left')
                ->join('field_data_restaurant_name as name', 'name.rid = restaurant.rid', 'left')
                ->join('field_data_restaurant_phone as phone', 'phone.rid = restaurant.rid', 'left')
                ->join('field_data_restaurant_main_image as image', 'image.rid = restaurant.rid', 'left')
                ->join('field_data_restaurant_website as website', 'website.rid = restaurant.rid', 'left')->where('restaurant.uid', $uid)->get();

                return $query->row();

        }

        public function get_restaurant_details($rid){
                $query = $this->db->select('*')->
                from('restaurant')
                ->join('field_data_restaurant_address as address',
                        'address.rid = restaurant.rid', 'left')
                ->join('field_data_restaurant_name as name', 'name.rid = restaurant.rid', 'left')
                ->join('field_data_restaurant_phone as phone', 'phone.rid = restaurant.rid', 'left')
                ->join('field_data_restaurant_main_image as image', 'image.rid = restaurant.rid', 'left')
                ->join('field_data_restaurant_website as website', 'website.rid = restaurant.rid', 'left')->where('restaurant.rid', $rid)->get();

                return $query->row();

        }

        public function insert_entry($uid)
        {
                $data = array(
                    'name' => $_POST['name'],
                    'body' => $_POST['body'],
                    'uid' => $uid,
                    'created' => time()
                    );

                $this->db->insert($this->restaurant_table_name, $data);

                return $this->db->insert_id();
        }

        public function insert_name_entry($rid)
        {
                $firstname = $_POST['firstname'];
                $lastname = $_POST['lastname'];

                $data = array(
                        'rid' => $rid,
                        'firstname' => $firstname,
                        'lastname' => $lastname
                        );

                $this->db->insert($this->field_data_name, $data);

                return $this->db->insert_id();
        }

        public function insert_address($rid){
                $data = array(
                        'rid' => $rid,
                        'city' => $_POST['city'],
                        'country' => $_POST['country'],
                        'postal_code' => $_POST['postal_code'],
                        'street' => $_POST['street'],
                        'full_address' => $_POST['address'],
                        'lat' => $_POST['lat'],
                        'long' => $_POST['long']
                        );

                $this->db->insert($this->field_data_address, $data);

                 return $this->db->insert_id();
        }

        public function insert_phone($rid){
                $data = array(
                        'rid' => $rid,
                        'phone' => $_POST['phone'],
                        );

                $this->db->insert($this->field_data_phone, $data);
        }

        public function insert_website($rid){
                $data = array(
                        'rid' => $rid,
                        'website' => $_POST['website'],
                        );

                $this->db->insert($this->field_data_website, $data);
        }

        public function insert_image($data, $rid){
                $data = array(
                        'rid' => $rid,
                        'path' => $data['file_path'],
                        'filename' => $data['file_name']
                        );

                $this->db->insert($this->field_data_main_image, $data);
        }

        public function delete_restaurant($rid){
            $this->db->delete($this->restaurant_table_name, array('rid' => $rid));
            $this->db->delete($this->field_data_main_image, array('rid' => $rid));
            $this->db->delete($this->field_data_phone, array('rid' => $rid));
            $this->db->delete($this->field_data_address, array('rid' => $rid));
            $this->db->delete($this->field_data_name, array('rid' => $rid));

        }

        public function update_entry()
        {
                $this->name  = $_POST['name'];
                $this->body  = $_POST['content'];
                $this->updated  = time();

                $this->db->update($this->restaurant_table_name, $this, array('rid' => $_POST['id']));
        }

        public function get_restaurant_by_bayesian_ranking(){

            $city = $_GET['city'];
            $country = $_GET['country'];
            $this->db->query('SET SQL_BIG_SELECTS=1'); 
            
            $city = $this->db->escape($city);
            $sql_query = "select rid,number_of_restaurants,number_of_reviews,((avg_num_votes * avg_rating) + (this_num_votes * this_rating)) / (avg_num_votes + this_num_votes) as real_rating
from (select `field_data_review_votes`.`rid`
AS `rid`,
(select count(rvid) from desilogy.review where desilogy.review.rid = `field_data_review_votes`.`rid`) as number_of_reviews,
(select count(rid) FROM desilogy.field_data_restaurant_address where city = ".$city.") as number_of_restaurants,((select count(`field_data_review_votes`.`rid`) 
from `field_data_review_votes`) / (select count(distinct `field_data_review_votes`.`rid`) 
from `field_data_review_votes`)) AS `avg_num_votes`,
(select avg(`field_data_review_votes`.`overall`) from `field_data_review_votes`) 
AS `avg_rating`,count(`field_data_review_votes`.`rid`) AS 
`this_num_votes`,avg(`field_data_review_votes`.`overall`) AS 
`this_rating` from `field_data_review_votes` left join field_data_restaurant_address ON 
field_data_restaurant_address.rid = `field_data_review_votes`.`rid` where `field_data_restaurant_address`.`city` = ".$city."
group by `field_data_review_votes`.`rid`
) as subquery order by real_rating desc";

            $query = $this->db->query($sql_query);
            // print_r($query->result());
            return $query->result();
        }

}
?>