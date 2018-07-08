<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function __construct() {
		parent::__construct();
		if ($this->session->userdata('username')=="") {
			redirect('login');
		}
	}
	public function index()
	{
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

	public function tambah_pegawai()
	{
		$this->load->view('admin/menu/tambah_pegawai');
	}

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

//--function buku--//

	function data_buku()
	{
		$query = $this->Mbuku->getData_buku();
		$data = array(
					"query" => $query,
				);
		$this->load->view('admin/menu/data_buku',$data);
	}

	public function tambah_buku()
	{
		$this->load->view('admin/menu/tambah_buku');
	}

	function data_distributor()
	{
		$query = $this->Mdistributor->getData_distributor();
		$data = array(
					"query" => $query,
				);
		$this->load->view('admin/menu/data_distributor',$data);
	}

	public function tambah_distributor()
	{
		$this->load->view('admin/menu/tambah_distributor');
	}

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

	function data_pemasukan()
	{
		$query = $this->Mdistributor->nama_distribusi();
		$data = array(
					"query"	=> $query,
			);

		$this->load->view('admin/menu/data_pemasukan',$data);
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
		$id_kasir= $this->session->userdata('id_kasir');
		$query = $this->db->where('id_kasir', $id_kasir)->get('tb_kasir')->row_array();
		// $query = $this->Mpegawai->getData_profil( "where id_kasir = '$id_kasir'");
		$data = array(
					"query" => $query,
				);
		$this->load->view('admin/menu/profil',$data);
	}

	function edit_profil()
	{
		$id_kasir = $this->session->userdata('id_kasir');
		$query = $this->Mpegawai->edit_profil("where id_kasir = '$id_kasir'");

		$data = array (
					'query' => $query,
			);

		$this->load->view('admin/menu/edit_profil',$data);
	}
}

