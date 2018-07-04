<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kasir extends CI_Controller {
	public function __construct() {
		parent::__construct();
		if ($this->session->userdata('username')=="" || ($this->session->userdata('akses')!="kasir") || ($this->session->userdata('id_kasir')!= $this->session->userdata('id_kasir'))) {
			redirect('login');
	}

	function data_penjualan()
	{
		$query = $this->MPenjualan->getData_penjualan();
		$data = array(
					"query" => $query,
				);
		$this->load->view('kasir/menu/data_penjualan',$data);
	}


	function input_barang($kode)
	{
		$buku=$this->Minput->pilih_buku("where id_buku ='$kode'");
		$data = array(
				"id_buku"		=> $buku[0]['id_buku'],
				"judul" 		=> $buku[0]['judul'],
				"stok"			=> $buku[0]['stok'],
				);

		$this->load->view('kasir/menu/input_barang', $data);
	}
	public function index()
	{
		$id_kasir= $this->session->userdata('id_kasir');
		$user= $this->session->userdata('username');
		$this->load->view('kasir/menu/dashboard');
	}
}

