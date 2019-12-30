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

    public function delete($id){
        if($this->db->delete($this->_table, array('id_'.$this->_table => $id))){
            return true;
        }else{
            return false;
        }
    }

    public function getSasaranIndikatorKegiatan($id_manajemen_risiko){
        $this->db->select('*');
        $this->db->from('sasaran_organisasi');
        $this->db->join('indikator_organisasi', 'sasaran_organisasi.id_sasaran_organisasi=indikator_organisasi.id_sasaran_organisasi');
        $this->db->join('risiko', 'indikator_organisasi.id_indikator_organisasi = risiko.id_indikator_organisasi');
        $this->db->join('dampak','dampak.id_risiko=risiko.id_risiko');
        $this->db->join('pengendalian','pengendalian.id_risiko=risiko.id_risiko');
        $this->db->where(array('sasaran_organisasi.id_manajemen_risiko'=>$id_manajemen_risiko));
        $query = $this->db->get();
        if($query->num_rows() > 0){
            return $query->result();
        }else{
            return [];
        }
    }
}