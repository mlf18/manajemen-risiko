<?php
class Sasaranorganisasi_model extends CI_Model {
    private $_table="sasaran_organisasi";
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

    public function getSasaranByMRId($id_MR){
        $this->db->select('*');
        $this->db->join('manajemen_risiko', 'manajemen_risiko.id_manajemen_risiko = sasaran_organisasi.id_manajemen_risiko','left');
        $this->db->join('unit', 'unit.id_unit = manajemen_risiko.id_upr','left');
        return $this->db->get_where($this->_table,array("sasaran_organisasi.id_manajemen_risiko"=>$id_MR))->result();
    }

    public function delete($id){
        if($this->db->delete($this->_table, array('id_'.$this->_table => $id))){
            return true;
        }else{
            return false;
        }
    }
}
