<?php
class Dampak_model extends CI_Model {
    private $_table="dampak";
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
	public function getIdManajemenRisiko($id_risiko){
        $this->db->select('sasaran_organisasi.id_manajemen_risiko');
        $this->db->join('indikator_organisasi', 'indikator_organisasi.id_indikator_organisasi = risiko.id_indikator_organisasi','left');;
        $this->db->join('sasaran_organisasi', 'indikator_organisasi.id_sasaran_organisasi = sasaran_organisasi.id_sasaran_organisasi','left');
		$this->db->where($id_risiko);
        $query = $this->db->get('risiko');
        return $query->result();
    }
}
