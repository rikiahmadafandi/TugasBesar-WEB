<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pegawai extends CI_Controller {
	function eksekusi_kasir()
	{
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$telephon = $this->input->post('telephon');
		$id_kasir = $this->session->userdata('id_kasir');

		$primary_key = array ( 
			'id_kasir' => $id_kasir,
			);
		$update = array (
					'nama' => $nama,
					'alamat' => $alamat,
					'telephon' => $telephon,
			);

		$this->Mpegawai->eksekusi_profil($update,$primary_key);
		redirect('kasir/profil');
	}
	function edit_passkasir()
	{
		$pass1 = $this->input->post('pass1');
		$pass2 = $this->input->post('pass2');
		$pass_awal = $this->input->post('pass_awal');

		$data = array (
					'pass' => md5($pass1),
					'id_kasir' => $this->session->userdata('id_kasir'),
			);

		if(($pass1 == $pass2) && (md5($pass_awal) == $this->session->userdata('password'))) {
			$this->Mpegawai->edit_passprofil($data);
			redirect('kasir/profil');
		}
		else{
			echo "<script>alert('Harap periksa ulang password baru dan password lama anda kembali!');history.go(-1);</script>";
		}
	}
	function edit_userkasir()
	{
		$id_kasir = $this->session->userdata('id_kasir');
		$userbaru = $this->input->post('userbaru');
		$pass = $this->input->post('pass');

		$data = array(
					'id_kasir' => $id_kasir,
					'userbaru' => $userbaru,
					);

		if(md5($pass)==$this->session->userdata('password')){
			$this->Mpegawai->edit_userprofil($data);
			redirect('kasir/profil');
		}
		else {
			echo "<script>alert('Gagal mengganti username, harap periksa password anda!');history.go(-1);</script>";
		}
	} //batas....
//---------------------PROFIL ADMIN
	function eksekusi_profil()
	{
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$telephon = $this->input->post('telephon');
		$id_kasir = $this->session->userdata('id_kasir');

		$primary_key = array ( 
			'id_kasir' => $id_kasir,
			);
		$update = array (
					'nama' => $nama,
					'alamat' => $alamat,
					'telephon' => $telephon,
			);

		$this->Mpegawai->eksekusi_profil($update,$primary_key);
		redirect('admin/profil');
	}

	function edit_passprofil()
	{
		$pass1 = $this->input->post('pass1');
		$pass2 = $this->input->post('pass2');
		$pass_awal = $this->input->post('pass_awal');

		$data = array (
					'pass' => md5($pass1),
					'id_kasir' => $this->session->userdata('id_kasir'),
			);

		if(($pass1 == $pass2) && (md5($pass_awal) == $this->session->userdata('password'))) {
			$this->Mpegawai->edit_passprofil($data);
			redirect('admin/profil');
		}
		else{
			echo "<script>alert('Harap periksa ulang password baru dan password lama anda kembali!');history.go(-1);</script>";
		}
	}
	function edit_userprofil()
	{
		$id_kasir = $this->session->userdata('id_kasir');
		$userbaru = $this->input->post('userbaru');
		$pass = $this->input->post('pass');

		$data = array(
					'id_kasir' => $id_kasir,
					'userbaru' => $userbaru,
					);

		if(md5($pass)==$this->session->userdata('password')){
			$this->Mpegawai->edit_userprofil($data);
			redirect('admin/profil');
		}
		else {
			echo "<script>alert('Gagal mengganti username, harap periksa password anda!');history.go(-1);</script>";
		}
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

	function hapus_pegawai($id_kasir)
	{
		$data['id_kasir']=$id_kasir;
		
		$this->Mpegawai->hapus_pegawai($data);
		redirect('admin/data_pegawai');
	}

}
?>