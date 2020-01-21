<?php
class Benturan_kepentingan_model extends CI_Model {
    private $_table="benturan_kepentingan";
    public function __construct(){
        $this->load->database();
    }

    public function create($data){
        print_r($data);
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

    public function joinUnit(){
        $this->db->select('*');
        $this->db->from('benturan_kepentingan');
        $this->db->join('unit', 'benturan_kepentingan.id_unit = unit.id_unit');
        $this->db->order_by('benturan_kepentingan.id_unit', 'asc');
        return $this->db->get()->result();
    }
}