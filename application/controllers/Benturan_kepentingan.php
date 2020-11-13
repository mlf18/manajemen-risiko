<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Benturan_kepentingan extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model('benturan_kepentingan_model');
    }
    public function index(){
        $bk = $this->benturan_kepentingan_model->joinUnit();
        $data = array(
            'bks'=>$bk,
            'content'=>'benturan_kepentingan.php'
        );
        $this->load->view('index.php',$data);
    }
	
	public function download(){
        $bk = $this->benturan_kepentingan_model->joinUnit();
        $data = array(
            'bks'=>$bk,
            'content'=>'benturan_kepentingan.php'
        );
        $this->load->view('excel_bk.php',$data);
    }

    public function tambah(){
        $bk = null;
        $data = array(
            'content'=>'benturan_kepentingan_form.php',
            'aksi'=>'Tambah',
            'bk'=>$bk,
            'url'=>base_url().'benturan_kepentingan/save'
        );
        $this->load->view('index.php',$data);
    }

    public function save(){
        $data = $this->input->post();
        // $id_unit = $this->user_model->get(array('id_user'=>$this->session->userdata('id_user')));
        $id_unit =[];
        if(count($id_unit) > 0){
            $id_unit = $id_unit->id_unit;
        }else{
            $id_unit=$this->session->userdata('ses_id_unit');
        }
        $data['id_unit']=$id_unit;
        // return print_r($data);
        $this->benturan_kepentingan_model->create($data);
        return redirect(base_url().'index.php/benturan_kepentingan');
    }

    public function saveEdit(){
        $data = $this->input->post();
        $id_unit=$this->session->userdata('ses_id_unit');
        $data['id_unit']=$id_unit;
        $this->benturan_kepentingan_model->update($data['id_benturan_kepentingan'],$data);
        return redirect(base_url().'index.php/benturan_kepentingan');
    }

    public function edit($id){
        $bk = $this->benturan_kepentingan_model->get(array('id_benturan_kepentingan'=>$id));
        if(count($bk) > 0){
            $bk = $bk[0];
        }else{
            $bk=0;
        }
        $data = array(
            'content'=>'benturan_kepentingan_form.php',
            'aksi'=>'Tambah',
            'bk'=>$bk,
            'url'=>base_url().'benturan_kepentingan/saveEdit'
        );
        $this->load->view('index.php',$data);
    }

    public function delete($id){
        $this->benturan_kepentingan_model->delete($id);
        return redirect(base_url()."benturan_kepentingan");
    }

}
