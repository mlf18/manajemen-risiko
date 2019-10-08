<?php
class Risiko_model extends CI_Model {
    private $_table="risiko";
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

    public function get_rtp_resiko_by_unit($id_unit){
      $this->db->select('*');
      $this->db->join('indikator_organisasi','indikator_organisasi.id_indikator_organisasi=risiko.id_indikator_organisasi','left');
      $this->db->join('kategori_risiko','kategori_risiko.id_kategori_risiko=risiko.id_kategori','left');
      $this->db->join('sasaran_organisasi','indikator_organisasi.id_sasaran_organisasi=sasaran_organisasi.id_sasaran_organisasi','left');
      $this->db->join('manajemen_risiko','manajemen_risiko.id_manajemen_risiko=sasaran_organisasi.id_manajemen_risiko','left');
      $this->db->order_by("besaran_risiko DESC");
      return $this->db->get_where($this->_table,array('manajemen_risiko.id_manajemen_risiko'=>$id_unit))->result();
    }


    public function delete($id){
        if($this->db->delete($this->_table, array('id_'.$this->_table => $id))){
            return true;
        }else{
            return false;
        }
    }
}
