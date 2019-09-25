<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Risiko_organisasi extends CI_Controller {

    public function index($id){
        $risiko = $this->risiko_model->get(array('id_indikator_organisasi'=>$id));
        $data =array(
            'content'=>'risiko_organisasi.php',
            'id_indikator_organisasi'=>$id,
            'risiko'=>$risiko
        );
		$this->load->view('index',$data);
    }

    public function save(){
        $this->risiko_model->create($this->input->post());
    }
    public function update($id){
        $this->risiko_model->update($id,$this->input->post());
    }
}