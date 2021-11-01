<?php
class Action_model extends CI_Model {

    public function __construct(){
        $this-> load->database();
    }

    public function getOffices(){
        $query = $this->db->get('offices');
        return $query -> result_array();
    }
}

