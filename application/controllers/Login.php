<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function index()
	{
		$this->load->view('login');
	}

	public function do_login(){
		$ldap = $this->user_model->ldap_login();
		if($ldap){
			$query = $this->user_model->getUserEmail($this->input->post('username'));
			if(!$query){
				$this->session->set_flashdata('gagalLogin', 'Hubungi admin karena data anda belum diupdate di server kami');
				redirect(base_url('login'));
			}
			$data = $query->row_array();
			$this->session->set_userdata('login',TRUE);
			$this->session->set_userdata('akses',$data['role']);
			$this->session->set_userdata('ses_id',$data['nip']);
			$this->session->set_userdata('ses_nama',$data['nama']);
			$this->session->set_userdata('ses_unit',$data['nama_unit']);
			$this->session->set_userdata('ses_id_unit',$data['unit_id']);	
			$this->session->set_userdata('user_id',$data['user_id']);
			redirect(base_url('manajemen_risiko/'));
		}else{
			$this->session->set_flashdata('gagalLogin', 'Maaf Username/Password Anda Salah');
			redirect(base_url('login'));
		}
		/*else{
			$query = $this->user_model->getUser($this->input->post('username'),$this->input->post('passwd'));
			if($query->num_rows() > 0){
				$data = $query->row_array();
				$this->session->set_userdata('login',TRUE);
				$this->session->set_userdata('akses',$data['role']);
				$this->session->set_userdata('ses_id','');
				$this->session->set_userdata('ses_nama',$data['username']);
				$this->session->set_userdata('user_id',$data['id']);
				redirect('pengaduan');
			}
			$component = array(
				"content" => "content.php",
				"pesan" => "Periksa Kembali Username dan Password"

			);
			$this->load->view('index', $component);
		}*/
	}
	function logout(){
		$this->session->unset_userdata('login');
		$this->session->unset_userdata('user_id');
		$this->session->unset_userdata('akses');
		$this->session->unset_userdata('ses_id');
		$this->session->unset_userdata('ses_nama');
		redirect(base_url());
	}
}
?>
