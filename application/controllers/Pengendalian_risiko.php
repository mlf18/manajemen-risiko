<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Pengendalian_risiko extends CI_Controller {
    public function index($id){
        $pengendalian = $this->pengendalian_model->get(array('id_risiko'=>$id));
        $data =array(
            'content'=>'pengendalian_risiko.php',
            'id_risiko'=>$id,
            'pengendalian'=>$pengendalian
        );
		$this->load->view('index',$data);
    }

    public function save(){
        // $user_id = $_SESSION ['ses_userId'];
        $user_id =1;
        foreach ($this->input->post("pengendalian") as $key => $value) {
          if(!empty($value)){
              $this->pengendalian_model->create(array('pengendalian'=>$value,'id_risiko'=>$this->input->post('id_risiko')));
          }
        }
        return redirect(base_url().'index.php/pengendalian_risiko/index/'.$this->input->post('id_risiko'));
    }
    public function update($id){
        $pengendalian = $this->pengendalian_model->get(array('id_pengendalian'=>$id));
        if (count($pengendalian) > 0){
            $this->pengendalian_model->update($id,array('pengendalian'=>$this->input->post("pengendalian")));
            return redirect(base_url().'index.php/pengendalian_risiko/index/'.$pengendalian[0]->id_risiko);
        }

    }

    public function delete(){
        $pengendalian = $this->pengendalian_model->get(array('id_pengendalian'=>$id));
        if (count($pengendalian) > 0){
            $pengendalian = $this->pengendalian_model->delete($id);
            return redirect(base_url().'index.php/pengendalian_risiko/index/'.$pengendalian[0]->id_risiko);
        }
    }
}