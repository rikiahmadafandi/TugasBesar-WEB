<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logout_kasir extends CI_Controller {
	public function logout() {
		$id_kasir = $this->session->userdata('id_kasir');
		$this->session->unset_userdata($id_kasir);
		session_destroy();
		redirect('login');
	}
}

