<?php
class Analisis_risiko_model extends CI_Model {
    private $_table="risiko";
    public function __construct(){
        $this->load->database();
    }

    public function get_resiko_by_unit($id_unit){
      $this->db->select('*');
      $this->db->join('indikator_organisasi','indikator_organisasi.id_indikator_organisasi=risiko.id_indikator_organisasi','left');
      $this->db->join('kategori_risiko','kategori_risiko.id_kategori_risiko=risiko.id_kategori','left');
      $this->db->join('sasaran_organisasi','indikator_organisasi.id_sasaran_organisasi=sasaran_organisasi.id_sasaran_organisasi','left');
      $this->db->join('manajemen_risiko','manajemen_risiko.id_manajemen_risiko=sasaran_organisasi.id_manajemen_risiko','left');

      return $this->db->get_where($this->_table,array('manajemen_risiko.id_manajemen_risiko'=>$id_unit))->result();
    }

    
}
