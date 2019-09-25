<?php
class Manajemenrisiko_model extends CI_Model {
    private $_table="manajemen_risiko";
    public function __construct(){
        $this->load->database();
    }

    public function create($data){
        if ($this->db->insert($this->_table,$data)){
            return true;
        }else{
            return false;
        }
    }

    public function update($id,$data){
        if($this->db->update($this->_table, $data, "id_".$this->_table." = ".$id)){
            return true;
        }else{
            return false;
        }
    }

    public function get($data=null){
        if(isset($data)){
            return $this->db->get_where($this->_table,$data)->result();
        }else{
            // 
            return $this->db->get($this->_table)->result();
        }
    }

    public function delete($id){
        if($this->db->delete($this->_table, array('id_'.$this->_table => $id))){
            return true;
        }else{
            return false;
        }
    }
}