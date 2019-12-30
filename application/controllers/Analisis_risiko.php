<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Analisis_risiko extends CI_Controller {
	public function index($id_mr=null)
	{
				$risiko = $this->analisis_risiko_model->get_resiko_by_unit($id_mr);
				// echo "<pre>";
				// print_r($risiko);
				// echo "</pre>";
        $data =array(
						'id_mr'=>$id_mr,
						'risikos'=>$risiko,
            'content'=>'analisis_risiko.php'
        );
		$this->load->view('index',$data);
	}
	
	public function print_analisis($id_mr=null)
	{
				$risiko = $this->analisis_risiko_model->get_resiko_by_unit($id_mr);
				// echo "<pre>";
				// print_r($risiko);
				// echo "</pre>";
        $data =array(
						'id_mr'=>$id_mr,
						'risikos'=>$risiko,
            'content'=>'analisis_risiko.php'
        );
		$this->load->view('print_analisis.php',$data);
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
		$data =[];
		$this->load->view('index',$data);
    }
}
