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

        public function get_last_ten_entries()
        {
                $query = $this->db->get($this->restaurant_table_name, 10);
                return $query->result();
        }

        public function get_restaurant_details($rid){
                $query = $this->db->select('*')->
                from('restaurant')
                ->join('field_data_restaurant_address as address',
                        'address.rid = restaurant.rid', 'left')
                ->join('field_data_restaurant_name as name', 'name.rid = restaurant.rid', 'left')
                ->join('field_data_restaurant_phone as phone', 'phone.rid = restaurant.rid', 'left')
                ->join('field_data_restaurant_main_image as image', 'image.rid = restaurant.rid', 'left')
                ->join('field_data_restaurant_website as website', 'website.rid = restaurant.rid', 'left')->get();

                return $query->result();

        }

        public function insert_entry()
        {
                $data = array('name' => $_POST['name'], 'body' => $_POST['body'], 'created' => time());

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

        public function update_entry()
        {
                $this->name  = $_POST['name'];
                $this->body  = $_POST['content'];
                $this->updated  = time();

                $this->db->update($this->restaurant_table_name, $this, array('rid' => $_POST['id']));
        }

}
?>