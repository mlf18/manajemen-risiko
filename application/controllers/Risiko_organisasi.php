<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Risiko_organisasi extends CI_Controller {

    public function index($id){
        $risiko = $this->risiko_model->get(array('id_indikator_organisasi'=>$id));
        $indi = $this->indikatororganisasi_model->get(array('id_indikator_organisasi'=>$id));
        if(count($indi) > 0){
            $sasaran = $this->sasaranorganisasi_model->get(array('id_sasaran_organisasi'=>$indi[0]->id_sasaran_organisasi));
        }
        $data =array(
            'content'=>'risiko_organisasi.php',
            'id_indikator_organisasi'=>$id,
            'sasaran'=>$sasaran,
            'risiko'=>$risiko
        );
		$this->load->view('index',$data);
    }

    public function save(){
        $this->risiko_model->create(exceptArr($this->input->post(),"id_manajemen_risiko"));
        $id_indikator = $this->input->post("id_indikator_organisasi");
        redirect(base_url()."index.php/sasaran_organisasi/index/".$this->input->post('id_manajemen_risiko'));
    }

    public function update($id){
        $risiko = $this->risiko_model->get(array('id_risiko'=>$id));
        if(count($risiko)){
            $this->risiko_model->update($id,exceptArr($this->input->post(),"id_manajemen_risiko"));
            redirect(base_url()."index.php/sasaran_organisasi/index/".$this->input->post('id_manajemen_risiko'));
        }
    }

    public function delete($id){
        $risiko = $this->risiko_model->get(array("id_risiko"=>$id));
        if(count($risiko) > 0){
            $this->risiko_model->delete($id);
            redirect(base_url()."index.php/sasaran_organisasi/index/".$this->input->post('id_manajemen_risiko'));
        }
    }
}
