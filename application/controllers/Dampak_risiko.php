<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dampak_risiko extends CI_Controller {

    public function index($id){
        $dampak = $this->dampak_model->get(array('id_risiko'=>$id));
        $data =array(
            'content'=>'dampak_risiko.php',
            'id_risiko'=>$id,
            'dampak'=>$dampak
        );
		$this->load->view('index',$data);
    }

    public function save(){
        // $user_id = $_SESSION ['ses_userId'];
        $user_id =1;
        foreach ($this->input->post("dampak") as $key => $value) {
          if(!empty($value)){
              $this->dampak_model->create(array('dampak'=>$value,'id_risiko'=>$this->input->post('id_risiko')));
          }
        }
        return redirect(base_url().'index.php/dampak_risiko/index/'.$this->input->post('id_risiko'));
    }
    public function update($id){
        $dampak = $this->dampak_model->get(array('id_dampak'=>$id));
        if (count($dampak) > 0){
            $this->dampak_model->update($id,array('dampak'=>$this->input->post("dampak")));
            return redirect(base_url().'index.php/dampak_risiko/index/'.$dampak[0]->id_risiko);
        }

    }

    public function delete($id){
        echo $id;
        $dampak = $this->dampak_model->get(array('id_dampak'=>$id));
        print_r($dampak);
        if (count($dampak) > 0){
            $d = $this->dampak_model->delete($id);
            return redirect(base_url().'index.php/dampak_risiko/index/'.$dampak[0]->id_risiko);
        }
    }
}
