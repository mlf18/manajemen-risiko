<?php
class Laporan_model extends CI_Model {
    private $_table="laporan";
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

    public function joinManajemenRisiko($id_manajemen_risiko){
        $this->db->select('*');
        $this->db->from('laporan');
        $this->db->join('manajemen_risiko','manajemen_risiko.id_manajemen_risiko = laporan.id_manajemen_risiko');
        $this->db->join('unit', 'manajemen_risiko.id_upr=unit.id_unit');
        $this->db->where(array('laporan.id_manajemen_risiko'=>$id_manajemen_risiko));
        $query = $this->db->get();
        if($query->num_rows() < 1){
            return false;
        }
        return $query->result();
    }
}
