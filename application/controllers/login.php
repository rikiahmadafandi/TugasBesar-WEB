<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function index()
	{
		$this->load->view('index');
	}
	public function cek_login() {
		$data = array('username' => $this->input->post('username'),
						'password' => md5($this->input->post('password')),
			);
		$hasil = $this->Mlogin->cek_user($data);
		if ($hasil->num_rows() == 1) {
			 foreach ($hasil->result() as $sess) {
				$sess_data['username'] = $sess->username;
				$sess_data['akses'] = $sess->akses;
				$sess_data['id_kasir'] = $sess->id_kasir;
				$sess_data['password'] = $sess->password;
				$this->session->set_userdata($sess_data);
			}
			if ($this->session->userdata('akses')=='admin') {
				redirect('admin');
			}
			elseif ($this->session->userdata('akses')=='kasir') {
				redirect('kasir');
			}		
		}
		else {
			echo "<script>alert('Gagal login: Cek username, password!');history.go(-1);</script>";
		}
	}
}
