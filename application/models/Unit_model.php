<?php
class Unit_model extends CI_Model {
    private $_table="unit";
    public function __construct(){
        $this->load->database();
    }

    public function get_all_unit(){
        return $this->db->get_where($this->_table)->result_array();
    }
}
