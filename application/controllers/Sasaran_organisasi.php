<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sasaran_organisasi extends CI_Controller {

    public function index($id){
        $sasaran_model = $this->sasaranorganisasi_model->get(array('id_manajemen_risiko'=>$id));
        $data =array(
            'content'=>'sasaran_organisasi.php',
            'sasaran_model'=>$sasaran_model,
            'id_manajemen_risiko'=>$id
        );
		$this->load->view('index',$data);
    }

    public function save(){
        // $user_id = $_SESSION ['ses_userId'];
        $user_id =1;
        foreach ($this->input->post('sasaran_organisasi') as $key => $value) {
            # code...
            if(!empty($value)){
                $this->sasaranorganisasi_model->create(array('sasaran_organisasi'=>$value,'user_id'=>$user_id,'id_manajemen_risiko'=>$this->input->post('id_manajemen_risiko')));
            }
        }
        
        return redirect(base_url()."index.php/sasaran_organisasi/index/".$this->input->post('id_manajemen_risiko'));
    }

    public function update($id){
        // $user_id = $_SESSION ['ses_userId'];
        $user_id =1;
        $sasaran = $this->sasaranorganisasi_model->get(array("id_sasaran_organisasi"=>$id));
        if(count($sasaran) > 0){
            // print_r($this->input->post());
            // exit;
            $this->sasaranorganisasi_model->update($id,array('sasaran_organisasi'=>$this->input->post('sasaran_organisasi')));
            return redirect(base_url()."index.php/sasaran_organisasi/index/".$sasaran[0]->id_manajemen_risiko);
        }else{
            print ("data tidak ditemukan");
        }
        
    }

}