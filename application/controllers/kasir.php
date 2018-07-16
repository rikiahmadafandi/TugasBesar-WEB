<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kasir extends CI_Controller {
	public function __construct() {
		parent::__construct();
		if (($this->session->userdata('username')=="") || ($this->session->userdata('akses')!="kasir") || ($this->session->userdata('id_kasir')!= $this->session->userdata('id_kasir'))) {
			redirect('login');
		}
	}
	//-----------------------------halaman detai penjualan
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

//---------------------------------------------
//	link tampilan dasar
//--------------------------------------------	
	public function index()
	{
		$id_kasir= $this->session->userdata('id_kasir');
		$user= $this->session->userdata('username');
		$this->load->view('kasir/menu/dashboard');
	}

	function total_harga() {
		$query2 = $this->Minput->tampil_proses();

		$data2['query2'] = $query2;
		$this->load->view('kasir/menu/harga_total',$data2,array(),true);
	}

	function input_penjualan()
	{	
		$keranjang = $this->Minput->getData_keranjang();
		$query= $this->Minput->tampil_keranjang();
		$query2 = $this->Minput->tampil_proses();
		$query3 = $this->Minput->query3();

	//	if($keranjang!=0) {
	//		$tampil = $this->total_harga();
	//	}
	//	else {
	//		$tampil = "";
	//	}

		$data = array(
					"query" => $query,
					//"tampil" => $tampil,
					"query3" =>$query3,
					"query2" => $query2,
					"keranjang" => $keranjang,
				);
		
		$this->load->view('kasir/menu/input_penjualan',$data);//,$data);
	}

	function data_penjualan()
	{
		$query = $this->Minput->getData_penjualan();
		$data = array(
					"query" => $query,
				);

		$this->load->view('kasir/menu/data_penjualan',$data);

	}

	function load_buku()
	{
		$query = $this->Minput->getData_buku();
		$data = array(
					"query" => $query,
				);
		$this->load->view('kasir/menu/load_buku',$data);
	}

	function input_barang($kode)
	{
		$keranjang = $this->Minput->getData_keranjang();
		$buku=$this->Minput->pilih_buku("where id_buku ='$kode'");
		$query= $this->Minput->tampil_keranjang();
		$query2 = $this->Minput->tampil_proses();
		$query3 = $this->Minput->query3();
		//$total = $this->Minput->jumlah_harga();

		

		/*if($keranjang!=0) {
			$tampil = $this->load->view('kasir/menu/harga_total',array(),true);
		}
		else {
			$tampil = "";
		}*/

		$data = array(
				"id_buku"		=> $buku[0]['id_buku'],
				"judul" 		=> $buku[0]['judul'],
				"stok"			=> $buku[0]['stok'],
				"harga_pokok"	=> $buku[0]['harga_pokok'],
				//"total"			=> $total,
				"query" 		=> $query,
				//"tampil" 		=> $tampil,
				"keranjang"		=> $keranjang,
				"query3" =>$query3,
				"query2" => $query2,
				);

		$this->load->view('kasir/menu/input_barang', $data);
	}

	function profil()
	{
		$id_kasir= $this->session->userdata('id_kasir');
		$query = $this->Mpegawai->getData_profil( "where id_kasir = '$id_kasir'");
		$data = array(
					"query" => $query,
				);
		$this->load->view('kasir/menu/profil',$data);
	}

	function edit_profil()
	{
		$id_kasir = $this->session->userdata('id_kasir');
		$query = $this->Mpegawai->edit_profil("where id_kasir = '$id_kasir'");

		$data = array (
					'query' => $query,
			);

		$this->load->view('kasir/menu/edit_profil',$data);
	}
}

?>