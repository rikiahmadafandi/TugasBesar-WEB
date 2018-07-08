<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logout_admin extends CI_Controller {
	public function logout() {
		$id_kasir = $this->session->userdata('id_kasir');
		$this->session->unset_userdata($id_kasir==$id_kasir);
		//$this->session->unset_userdata('username');
		//$this->session->unset_userdata('akses');
		session_destroy();
		redirect('login');
	}

}