<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kasir extends CI_Controller {
	public function __construct() {
		parent::__construct();
		if ($this->session->userdata('username')==""
			redirect('login');
	}
}
	function data_penjualan()
	{
		$query = $this->Minput->getData_penjualan();
		$data = array(
					"query" => $query,
				);
		$this->load->view('kasir/menu/data_penjualan',$data);
	}


	function input_barang($kode)
	{
		//$pasok = $this->Mdistributor->tampil_pemasokan();
		//$distribusi = $pasok[0]['id_distributor'];
		//$buku = $pasok[0]['id_buku'];
		$buku=$this->Minput->pilih_buku("where id_buku ='$kode'");
		$data = array(
				"id_buku"		=> $buku[0]['id_buku'],
				"judul" 		=> $buku[0]['judul'],
				"stok"			=> $buku[0]['stok'],
				);

		$this->load->view('kasir/menu/input_barang', $data);
	}
}

