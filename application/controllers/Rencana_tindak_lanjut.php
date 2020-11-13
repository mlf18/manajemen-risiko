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
	
	public function print_rtl($id_mr=null)
	{
				$risiko = $this->risiko_model->get_rtp_resiko_by_unit($id_mr);
				foreach ($risiko as $key => $value) {
					# code...
					$risiko[$key]->pengendalian = $this->pengendalian_model->get(array('id_risiko'=>$value->id_risiko));
					$risiko[$key]->dampak = $this->dampak_model->get(array('id_risiko'=>$value->id_risiko));
					$rtl = $this->rtl_model->get(array('id_risiko'=>$value->id_risiko));
					$risiko[$key]->rtl = count($rtl) > 0 ? $rtl[0] : [];
				}
				$data =array(
						'id_mr'=>$id_mr,
						'risikos'=>$risiko,
            'content'=>'rtp_risiko_2.php'
		);
		$this->load->view('print_rtp.php',$data);
	}
	
	public function download_rtl($id_mr=null)
	{
				$risiko = $this->risiko_model->get_rtp_resiko_by_unit($id_mr);
				foreach ($risiko as $key => $value) {
					# code...
					$risiko[$key]->pengendalian = $this->pengendalian_model->get(array('id_risiko'=>$value->id_risiko));
					$risiko[$key]->dampak = $this->dampak_model->get(array('id_risiko'=>$value->id_risiko));
					$rtl = $this->rtl_model->get(array('id_risiko'=>$value->id_risiko));
					$risiko[$key]->rtl = count($rtl) > 0 ? $rtl[0] : [];
				}
				$data =array(
						'id_mr'=>$id_mr,
						'risikos'=>$risiko,
            'content'=>'rtp_risiko_2.php'
		);
		$this->load->view('excel_rtp.php',$data);
    }

    public function save(){
        foreach ($this->input->post() as $key => $value) {
			// print_r($value);
			// print_r($key);
        	if($key != "id_mr"){
						// $text_result = explode("_",$key);
						// $risiko = $this->risiko_model->get(array('id_risiko' =>$value['id_risiko']));
						$rtl = $this->rtl_model->get(array('id_risiko'=>$value['id_risiko']));
						if(count($rtl) < 1){
							$this->rtl_model->create(array(
								'perbaikan_pengendalian'=>$value['perbaikanPengendalian'],
								'mulai'=>$value['dari']!=''?date("Y/m/d",strtotime($value['dari']."-01")):NULL,
								'selesai'=>$value['sampai']!=''?date("Y/m/d",strtotime($value['sampai']."-01")):NULL,
								'pembiayaan'=>$value['pembiayaan'],
								'ket'=>$value['keterangan'],
								'pemilik_risiko'=>$value['pemilik_risiko'],
								'id_risiko'=>$value['id_risiko']));
						}else{
							$this->rtl_model->update($rtl[0]->id_rtl,array(
								'perbaikan_pengendalian'=>$value['perbaikanPengendalian'],
								'mulai'=>$value['dari']!=''?date("Y/m/d",strtotime($value['dari']."-01")):NULL,
								'selesai'=>$value['sampai']!=''?date("Y/m/d",strtotime($value['sampai']."-01")):NULL,
								'pembiayaan'=>$value['pembiayaan'],
								'ket'=>$value['keterangan'],
								'pemilik_risiko'=>$value['pemilik_risiko'],
								'id_risiko'=>$value['id_risiko']));
						}
						// print_r($key);
						// print_r("<br>");
						// if ($text_result[0] == "konsekuensi"){
						// 	$besaran_risiko = $risiko[0]->level_kemungkinan * $value;
						// 	$this->risiko_model->update($text_result[1],array("level_dampak"=>$value,"besaran_risiko"=>$besaran_risiko));
						// }
						// if ($text_result[0] == "probabilitas"){
						// 	$besaran_risiko = $risiko[0]->level_dampak * $value;
						// 	$this->risiko_model->update($text_result[1],array("level_kemungkinan"=>$value,"besaran_risiko"=>$besaran_risiko));
						// }
					}
		}
		// print_r($this->input->post());
		// exit;
        return redirect(base_url()."index.php/rencana_tindak_lanjut/index/".$this->input->post("id_mr"));
    }

    public function analisis_evaluasi(){
		// $this->load->view('index',$data);
    }
}
