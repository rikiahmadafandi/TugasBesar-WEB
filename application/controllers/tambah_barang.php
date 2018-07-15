<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tambah_barang extends CI_Controller {
	function hapus_dtkeranjang($kode) {
		$keranjang=$this->Minput->hapus_dtkeranjang("where id_keranjang ='$kode'");
		
		$primary_key = array (
					"id_buku" => $keranjang->id_buku,
					);

		$update = array (
					"stok" => $keranjang->stok + $keranjang->jumlah,
					);

		$data['id_keranjang'] = $kode;

		$this->Minput->update_dtstok($update,$primary_key);
		$this->Minput->data_hps($data);

		redirect('kasir/input_penjualan');
	}
	function hapus_keranjang(){
		$this->Minput->hapus_keranjang();
	redirect('kasir/input_penjualan');
	}
	function total_harga() {
		$uang = $this->input->post('uang');
		$uang_harga = $this->input->post('uang_harga');
		$kembali = $uang - $uang_harga;
		$kode_otomatis = date('ymdhis');				
		$tanggal = date('Y-m-d');

		$data=array (
					'id_jual' => $kode_otomatis,
					'total' => $uang_harga,
					'uang' => $uang,
					'kembali' => $kembali,
					'id_kasir' => $this->session->userdata('id_kasir'),
					'tanggal' => $tanggal,
			);
		$data2=array (
					'id_jual' => $kode_otomatis,
			);


	$this->Minput->proses1($data);
	$this->Minput->proses2($data2);
	redirect('kasir/input_penjualan');

	}
	function keranjang()
	{
		$id_kasir = $this->session->userdata('id_kasir');
		$jumlah = $this->input->post('jumlah');
		$id_buku = $this->input->post('id_buku');
		$jumlah_harga =$this->input->post('harga_pokok') * $jumlah;
		$updatestok = $this->input->post('stok') - $jumlah;

		$update = array(
					'stok' => $updatestok,
			);
		$primary_key  = array (
					'id_buku' => $id_buku,
			);
		$data = array (
					'id_buku' => $id_buku,
					'id_kasir' => $id_kasir,
					'jumlah' => $jumlah,
					'jumlah_harga' => $jumlah_harga,
			);
		$this->Minput->update_stok($update,$primary_key);
		$this->Minput->keranjang($data);
		redirect('kasir/input_penjualan');
	}

}
