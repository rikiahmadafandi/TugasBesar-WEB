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
}

