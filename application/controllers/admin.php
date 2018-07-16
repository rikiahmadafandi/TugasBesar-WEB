<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function __construct() {
		parent::__construct();
		if (($this->session->userdata('username')=="") || ($this->session->userdata('akses')!="admin") || ($this->session->userdata('id_kasir')!= $this->session->userdata('id_kasir'))) {
			redirect('login');
		}
	}

	//-----------HALAMAN EDIT PROFIL----------
	function edit_profil()
	{
		$id_kasir = $this->session->userdata('id_kasir');
		$query = $this->Mpegawai->edit_profil("where id_kasir = '$id_kasir'");

		$data = array (
					'query' => $query,
			);

		$this->load->view('admin/menu/edit_profil',$data);
	}
//---------------------------------------------
//	link menu distributor
//--
	public function edit_distributor($kode)
	{
		$buku=$this->Mdistributor->edit_distributor("where id_distributor ='$kode'");
		$data = array(
				"id_distributor"		=> $buku[0]['id_distributor'],
				"nama" 		=> $buku[0]['nama_distributor'],
				"alamat" 		=> $buku[0]['alamat'],
				"telephon" 		=> $buku[0]['telephon'],
				);

		$this->load->view('admin/menu/edit_distributor', $data);
	}

//---------------------------------------------
//	link menu pegawai
//--
	public function edit_pegawai($kode)
	{
		$buku=$this->Mpegawai->edit_pegawai("where id_kasir ='$kode'");
		$data = array(
				"id_kasir"		=> $buku[0]['id_kasir'],
				"nama" 		=> $buku[0]['nama'],
				"alamat" 		=> $buku[0]['alamat'],
				"telephon" 		=> $buku[0]['telephon'],
				"status" 		=> $buku[0]['status'],
				);

		$this->load->view('admin/menu/edit_pegawai', $data);
	}

	public function tambah_pegawai()
	{
		$this->load->view('admin/menu/tambah_pegawai');
	}

//---------------------------------------------
//	link menu buku
//--------------------------------------------	
	public function pasok_buku($kode)
	{
		$buku=$this->Mbuku->pasok_buku("where id_buku ='$kode'");
		$distributor=$this->Mbuku->pilih_distributor();
		$data = array(
				"id_buku"		=> $buku[0]['id_buku'],
				"judul" 		=> $buku[0]['judul'],
				"stok" 			=> $buku[0]['stok'],
				"distributor"	=> $distributor,
				);

		$this->load->view('admin/menu/input_pemasukan', $data);
	}

	public function edit_buku($kode)
	{
		$buku=$this->Mbuku->edit_buku("where id_buku ='$kode'");
		$data = array(
				"id_buku"		=> $buku[0]['id_buku'],
				"judul" 		=> $buku[0]['judul'],
				"noisbn" 		=> $buku[0]['noisbn'],
				"penulis" 		=> $buku[0]['penulis'],
				"penerbit" 		=> $buku[0]['penerbit'],
				"tahun" 		=> $buku[0]['tahun'],
				"stok" 			=> $buku[0]['stok'],
				"harga_pokok" 	=> $buku[0]['harga_pokok'],
				"harga_jual" 	=> $buku[0]['harga_jual'],
				"ppn" 			=> $buku[0]['ppn'],
				"diskon" 		=> $buku[0]['diskon'],
				);

		$this->load->view('admin/menu/edit_buku', $data);
	}

	public function tambah_buku()
	{
		$this->load->view('admin/menu/tambah_buku');
	}

//---------------------------------------------
//	link tampilan dasar
//--------------------------------------------	
	public function index()
	{
		$id_kasir= $this->session->userdata('id_kasir');
		$user= $this->session->userdata('username');
		$data_pegawai = $this->Mdashboard->Data_pegawai();
		$data_penjualan = $this->Mdashboard->Data_penjualan();
		$data_distributor = $this->Mdashboard->Data_distributor();
		$data_buku = $this->Mdashboard->Data_buku();
		$data_pemasukan = $this->Mdashboard->Data_pemasukan();
		$data = array(
					'user' => $user,
					"data_pegawai" => $data_pegawai,
					"data_penjualan" => $data_penjualan,
					"data_distributor" => $data_distributor,
					"data_buku" => $data_buku,
					"data_pemasukan" => $data_pemasukan,
				);
		$this->load->view('admin/menu/dashboard',$data);
	}

	function data_pegawai()
	{
		$query = $this->Mpegawai->getData_pegawai();
		$data = array(
					"query" => $query,
				);
		$this->load->view('admin/menu/data_pegawai',$data);
	}

	function data_buku()
	{
		$query = $this->Mbuku->getData_buku();
		$data = array(
					"query" => $query,
				);
		$this->load->view('admin/menu/data_buku',$data);
	}

	function data_distributor()
	{
		$query = $this->Mdistributor->getData_distributor();
		$data = array(
					"query" => $query,
				);
		$this->load->view('admin/menu/data_distributor',$data);
	}

	function data_pemasukan()
	{
		//$pasok = $this->Mdistributor->tampil_pemasokan();
		//$distribusi = $pasok[0]['id_distributor'];
		//$buku = $pasok[0]['id_buku'];
		$nama_distributor=$this->Mdistributor->nama_distribusi();//("where id_distribusi ='$distribusi'");
		//$nama_buku=$this->Mdistributor->nama_buku();//("where id_buku ='$buku'");


		$data=array(
					'nama_distributor'	=> $nama_distributor,//[0]['nama_distributor'],
					//'nama_buku'			=> $nama_buku,//[0]['nama_buku'],
					//'pasok'				=> $pasok,
			);

		$this->load->view('admin/menu/data_pemasukan', $data);
	}

	function data_penjualan()
	{
		$query = $this->Mpenjualan->getData_penjualan();
		$data = array(
					"query" => $query,
				);
		$this->load->view('admin/menu/data_penjualan',$data);
	}

	function profil()
	{
<<<<<<< HEAD
		$id_kasir= $this->session->userdata('username');
		$query = $this->db->where('username', $id_kasir)->get('tb_kasir')->row_array();
		// $query = $this->Mpegawai->getData_profil( "where id_kasir = '$id_kasir'");
=======
		$id_kasir= $this->session->userdata('id_kasir');
		$query = $this->Mpegawai->getData_profil( "where id_kasir = '$id_kasir'");
>>>>>>> b70e305707d6058e74d4a9b93a6419be6b5fa956
		$data = array(
					"query" => $query,
				);
		$this->load->view('admin/menu/profil',$data);
	}

}

