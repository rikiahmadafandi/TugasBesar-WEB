<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Minput extends CI_model {

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
}