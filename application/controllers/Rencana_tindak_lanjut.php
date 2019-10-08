<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Rencana_tindak_lanjut extends CI_Controller {
	public function index($id_mr=null)
	{
				$risiko = $this->risiko_model->get_rtp_resiko_by_unit($id_mr);
				$data =array(
						'id_mr'=>$id_mr,
						'risikos'=>$risiko,
            'content'=>'rtp_risiko_2.php'
        );
		$this->load->view('index',$data);
    }

    public function save(){
				// print_r($this->input->post());
				// die();
        foreach ($this->input->post() as $key => $value) {
        	if($key != "id_mr"){
						$text_result = explode("_",$key);
						$risiko = $this->risiko_model->get(array('id_risiko' =>$text_result[1]));
						if ($text_result[0] == "konsekuensi"){
							$besaran_risiko = $risiko[0]->level_kemungkinan * $value;
							$this->risiko_model->update($text_result[1],array("level_dampak"=>$value,"besaran_risiko"=>$besaran_risiko));
						}
						if ($text_result[0] == "probabilitas"){
							$besaran_risiko = $risiko[0]->level_dampak * $value;
							$this->risiko_model->update($text_result[1],array("level_kemungkinan"=>$value,"besaran_risiko"=>$besaran_risiko));
						}
					}
        }
        return redirect(base_url()."index.php/analisis_risiko/index/".$this->input->post("id_mr"));
    }

    public function analisis_evaluasi(){
		$this->load->view('index',$data);
    }
}
