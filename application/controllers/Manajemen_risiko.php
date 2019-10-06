<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manajemen_risiko extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
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

    public function info_risiko(){
        $data =array(
            'content'=>'info_risiko.php'
        );
		$this->load->view('index',$data);
    }
}
