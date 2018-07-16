<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Minput extends CI_model {
	//-----------------model function print--------------
	function on_print() {
		$query = $this->db->query("SELECT * FROM tb_jual order by id_jual desc");
		return $query->row();
	}
	function print1($where=" "){
		$query=$this->db->query("SELECT tb_jual.*,tb_kasir.* FROM tb_jual 
	INNER JOIN tb_kasir ON tb_kasir.id_kasir=tb_jual.id_kasir ".$where);
		return $query->row();
	}
	function print2($where=" "){
		$query=$this->db->query("SELECT tb_penjualan.*,tb_buku.* FROM tb_penjualan INNER JOIN tb_buku ON tb_buku.id_buku = tb_penjualan.id_buku ".$where);
		return $query->result();
	}
	function update_dtstok($update,$primary_key) {
		$this->db->update('tb_buku',$update,$primary_key);

	//-------------------HPS DATA DARI KERANJANG 1/1--------------------
	}
	function data_hps($data) {
		$this->db->where('id_keranjang',$data['id_keranjang']);
		$this->db->delete('tb_keranjang');
	}
	function hapus_dtkeranjang($where=" ") {
		$query = $this->db->query("SELECT tb_buku.*,tb_kasir.*,tb_keranjang.* FROM tb_keranjang
			INNER JOIN tb_buku ON tb_buku.id_buku=tb_keranjang.id_buku 
			INNER JOIN tb_kasir ON tb_kasir.id_kasir=tb_keranjang.id_kasir ".$where);
		return $query->row();

	}

//-------------MODEL UNTUK MENU INPUT PENJUALAN DAN INPUT BARANG----------
	function query3() {
		$query = $this->db->query("SELECT * FROM tb_jual");
		return $query->num_rows();
	}
	function hapus_keranjang (){
		$this->db->query('truncate table tb_keranjang');
	}
	function tampil_proses() {
		$query = $this->db->query("SELECT * FROM tb_jual order by id_jual desc");
		return $query->row();
	}
	function proses1 ($data) {
		$this->db->insert('tb_jual',$data);
	}

	function proses2 ($data2) {
		$this->db->query("INSERT INTO tb_penjualan(
						id_buku,jumlah,jumlah_harga,id_jual) SELECT id_buku,
						jumlah,jumlah_harga,'$data2[id_jual]' from tb_keranjang");
	}
	function getData_keranjang() {
		$query = $this->db->query("SELECT * FROM tb_keranjang");
		return $query->num_rows();
	}
	function keranjang($data) {
		$this->db->insert('tb_keranjang',$data);
	}
	function update_stok ($update,$primary_key) {
		$this->db->update('tb_buku',$update,$primary_key);

	}
	function pilih_buku($where = " ") {
		 $query = $this->db->query("SELECT * FROM tb_buku ".$where);
		 return $query->result_array();
	}
	function getData_buku() {
		$query = $this->db->query("SELECT * FROM tb_buku");
		return $query->result();
	}
	function getData_penjualan() {
		$query = $this->db->query("SELECT tb_jual.*,tb_kasir.* FROM tb_jual INNER JOIN tb_kasir ON tb_kasir.id_kasir=tb_jual.id_kasir ");
		return $query->result();
	}

	function tampil_keranjang() {
		$query = $this->db->query("SELECT tb_buku.*,tb_kasir.*,tb_keranjang.* FROM tb_keranjang
			INNER JOIN tb_buku ON tb_buku.id_buku=tb_keranjang.id_buku 
			INNER JOIN tb_kasir ON tb_kasir.id_kasir=tb_keranjang.id_kasir");
		return $query->result();
	}

}
?>