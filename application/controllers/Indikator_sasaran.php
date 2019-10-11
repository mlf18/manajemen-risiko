<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Indikator_sasaran extends CI_Controller {

    public function index($id){
        $indikator = $this->indikatororganisasi_model->get(array('id_sasaran_organisasi'=>$id));
        $sasaran = $this->sasaranorganisasi_model->get(array('id_sasaran_organisasi'=>$id));
        if (count($sasaran) < 1){
            $sasaran = [];
        }
        $data =array(
            'content'=>'indikator_organisasi.php',
            'id_sasaran_organisasi'=>$id,
            'indikator'=>$indikator,
            'sasaran'=>$sasaran
        );
		$this->load->view('index',$data);
    }

    public function save(){
        // $user_id = $_SESSION ['ses_userId'];
        $user_id =1;
        foreach ($this->input->post("indikator_organisasi") as $key => $value) {
            # code...
            if(!empty($value)){
                $this->indikatororganisasi_model->create(array('indikator_organisasi'=>$value,'id_sasaran_organisasi'=>$this->input->post('id_sasaran_organisasi'),'user_id'=>$user_id));
            }
        }
        return redirect(base_url().'index.php/sasaran_organisasi/index/'.$this->input->post('id_manajemen_risiko'));
    }
    public function update($id){
        $indikator = $this->indikatororganisasi_model->get(array('id_indikator_organisasi'=>$id));
        if (count($indikator) > 0){
            $this->indikatororganisasi_model->update($id,array('indikator_organisasi'=>$this->input->post("indikator_organisasi")));
            return redirect(base_url().'index.php/sasaran_organisasi/index/'.$this->input->post('id_manajemen_risiko'));
        }
        
    }

    public function delete($id){
        $indikator = $this->indikatororganisasi_model->get(array('id_indikator_organisasi'=>$id));
        if (count($indikator) > 0){
            $this->indikatororganisasi_model->delete($id);
            return redirect(base_url().'index.php/sasaran_organisasi/index/'.$this->input->post('id_manajemen_risiko'));
        }
    }
}