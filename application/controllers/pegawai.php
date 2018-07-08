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

	function simpan_editpegawai()
	{
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$telephon = $this->input->post('telephon');
		$status = $this->input->post('status');
		$id_kasir = $this->input->post('id_kasir');

		$primary_key = array (
					'id_kasir' => $id_kasir,
			);
		$update = array (
					'nama' => $nama,
					'alamat' => $alamat,
					'telephon' => $telephon,
					'status' => $status,
			);

		$this->Mpegawai->simpan_editPegawai($update,$primary_key);
		redirect('admin/data_pegawai');
	}

	function hapus_pegawai($id_kasir)
	{
		$data['id_kasir']=$id_kasir;
		
		$this->Mpegawai->hapus_pegawai($data);
		redirect('admin/data_pegawai');
	}
}