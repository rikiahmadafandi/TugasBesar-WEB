<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kasir extends CI_Controller {
	public function __construct() {
		parent::__construct();
		if ($this->session->userdata('username')=="" || ($this->session->userdata('akses')!="kasir") || ($this->session->userdata('id_kasir')!= $this->session->userdata('id_kasir'))) {
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
	function detail($kode) {
		//$query1 = $this->Minput->on_print();   //pemilihan id otomatis
		$id_jual = $kode; // variabel untuk menyingkat penulisan kode
		$query2 = $this->Minput->print1("where id_jual = '$id_jual'"); //pemanggilan 1
		$query3 = $this->Minput->print2("where id_jual = '$id_jual'"); // pemanggilan 2

		$data = array(
					'query2' => $query2,
					'query3' => $query3,
					);

		$this->load->view('kasir/menu/detail',$data);
	}
	function detail_print($kode) {
		$id_jual = $kode; // variabel untuk menyingkat penulisan kode
		$query2 = $this->Minput->print1("where id_jual = '$id_jual'"); //pemanggilan 1
		$query3 = $this->Minput->print2("where id_jual = '$id_jual'"); // pemanggilan 2

		$data = array(
					'query2' => $query2,
					'query3' => $query3,
					);

		$this->load->view('kasir/menu/print',$data);
	}
	
//-----------------perintah print-------------------
	function print_doc() {
		$query1 = $this->Minput->on_print();   //pemilihan id otomatis
		$id_jual = $query1->id_jual; // variabel untuk menyingkat penulisan kode
		$query2 = $this->Minput->print1("where id_jual = '$id_jual'"); //pemanggilan 1
		$query3 = $this->Minput->print2("where id_jual = '$id_jual'"); // pemanggilan 2

		$data = array(
					'query2' => $query2,
					'query3' => $query3,
					);

		$this->load->view('kasir/menu/print',$data);
	}


	function input_penjualan()
		{	
			$keranjang = $this->Minput->getData_keranjang();
			$query= $this->Minput->tampil_keranjang();
			$query2 = $this->Minput->tampil_proses();
			$query3 = $this->Minput->query3();
			$data = array(
						"query" => $query,
						//"tampil" => $tampil,
						"query3" =>$query3,
						"query2" => $query2,
						"keranjang" => $keranjang,
					);
			
			$this->load->view('kasir/menu/input_penjualan',$data);//,$data);
		}

}