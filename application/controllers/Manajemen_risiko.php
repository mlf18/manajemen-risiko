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
        $data =array(
            'content'=>'manajemen_risiko.php'
        );
		$this->load->view('index',$data);
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
            'content'=>'rtp_risiko.php'
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
