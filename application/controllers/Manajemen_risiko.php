<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manajemen_risiko extends CI_Controller {
	public function index()
	{
        // $user_id = $_SESSION ['ses_userId'];
        $user_id =1;
        //$manajemen_risiko = $this->manajemenrisiko_model->get(array('user_id'=>$user_id));
				$manajemen_risiko = $this->manajemenrisiko_model->get();
				$units = $this->unit_model->get_all_unit();
        $data =array(
            'content'=>'manajemen_risiko.php',
						'units' => $units,
            'manajemen_risiko'=>$manajemen_risiko
        );
		$this->load->view('index',$data);
    }

    public function laporan($id_manajemen_risiko){
        $laporan = $this->laporan_model->get(array('id_manajemen_risiko'=>$id_manajemen_risiko));
        print_r($laporan);
        $data = array(
            'id_manajemen_risiko'=>$id_manajemen_risiko,
            'laporan'=>$laporan,
            'content'=>'laporan.php'
        );
        $this->load->view('index.php',$data);
        // $this->load->view('print_laporan.php');
    }

    public function printlaporan($id_manajemen_risiko){
        $laporan = $this->laporan_model->joinManajemenRisiko($id_manajemen_risiko);
        
        $data = array(
            'id_manajemen_risiko'=>$id_manajemen_risiko,
            'laporan'=>$laporan,
            'content'=>'laporan.php'
        );
        // $this->load->view('index.php',$data);
        $this->load->view('print_laporan.php',$data);
    }

    public function savelaporan(){
        print_r($this->input->post());
        // exit;
        $laporan = $this->laporan_model->get(array('id_manajemen_risiko'=>$this->input->post('id_manajemen_risiko')));
        if($laporan){
            $this->laporan_model->update($this->input->post('id_manajemen_risiko'),$this->input->post());    
        }else{
            $this->laporan_model->create($this->input->post());
        }
    }
    public function save(){
        // $user_id = $_SESSION ['ses_userId'];
        $user_id =1;
        // print_r($this->input->post());
        // exit;
        $this->manajemenrisiko_model->create(array("id_upr"=>$this->input->post("id_upr"),"tahun"=>$this->input->post("tahun"),"user_id"=>$user_id));
        return redirect(base_url()."index.php/manajemen_risiko");
    }

    public function update($id){
        // $user_id = $_SESSION ['ses_userId'];
        $user_id =1;
        $this->manajemenrisiko_model->update($id,array("id_upr"=>$this->input->post("id_upr"),"tahun"=>$this->input->post("tahun"),"user_id"=>$user_id));
        return redirect(base_url()."index.php/manajemen_risiko");
    }

    public function delete($id){
        // $user_id = $_SESSION ['ses_userId'];
        $user_id =1;
        $this->manajemenrisiko_model->delete($id);
        return redirect(base_url()."index.php/manajemen_risiko");
    }

    public function sasaran_organisasi(){
        $data =array(
            'content'=>'sasaran_organisasi.php'
        );
		$this->load->view('index',$data);
    }

    public function indikator_sasaran(){
        $data =array(
            'content'=>'indikator_organisasi.php'
        );
		$this->load->view('index',$data);
    }

    public function risiko_organisasi(){
        $data =array(
            'content'=>'risiko_organisasi.php'
        );
		$this->load->view('index',$data);
    }

    public function analisis_evaluasi(){
        $data =array(
            'content'=>'anev_risiko.php'
        );
		$this->load->view('index',$data);
    }

    public function rtp_risiko(){
        $data =array(
            'content'=>'rtp_risiko_2.php'
        );
		$this->load->view('index',$data);
    }

    public function info_risiko($id){
        $risiko = $this->risiko_model->get_rtp_resiko_by_unit($id);
        $data =array(
            'content'=>'info_risiko.php',
            'risikos'=>$risiko,
            'id_mr'=>$id
        );
		$this->load->view('index',$data);
    }

    public function getRisiko($id){

        $risiko = [];
        $sasaran = $this->sasaranorganisasi_model->get(array('id_manajemen_risiko'=>$id));
        $i=0;
        foreach ($sasaran as $key => $value) {
            # code...
            $kegiatan = $this->indikatororganisasi_model->get(array('id_sasaran_organisasi'=>$value->id_sasaran_organisasi));
            foreach ($kegiatan as $kkey => $kvalue) {
                # code...
                $resiko=$this->risiko_model->get(array("id_indikator_organisasi"=>$kvalue->id_indikator_organisasi));
                foreach ($resiko as $rkey => $rvalue) {
                    # code...
                    $risiko[$i]=$rvalue;
                    $i++;
                }
            }
        }
        echo (json_encode($risiko));
    }
}
