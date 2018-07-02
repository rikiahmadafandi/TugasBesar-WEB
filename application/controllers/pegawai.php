<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pegawai extends CI_Controller {

function tambah_pegawai ()
	{
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$telephon = $this->input->post('telephon');
		$status = $this->input->post('status');
		$user = $this->input->post('user');
		$pass = $this->input->post('pass');
		$akses = "kasir";

		$input = array (
					'nama'		=> $nama,
					'alamat'	=> $alamat,
					'telephon'	=> $telephon,
					'status'	=> $status,
					'username'	=> $user,
					'password'	=> md5($pass),
					'akses'		=> $akses,
			);
		$this->Mpegawai->addPegawai($input);
		redirect('admin/data_pegawai');
	}
}