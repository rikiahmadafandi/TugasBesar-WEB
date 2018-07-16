<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mbuku extends CI_model {
	function stok_update($update_stok,$primary_key) {
		$this->db->update('tb_buku',$update_stok,$primary_key);
	}

	function simpan_pasokan($input_distributor) {
		$this->db->insert('tb_pasok',$input_distributor);
	}

	function pasok_buku($where = " ") {
		 $query = $this->db->query("SELECT * FROM tb_buku ".$where);
		 return $query->result_array();
	}

	function pilih_distributor() {
		$query = $this->db->query("SELECT * FROM tb_distributor");
		return $query->result();
	}

	function hapus_buku($data) {
		$this->db->where('id_buku',$data['id_buku']);
		$this->db->delete('tb_buku');
	}

	function edit_buku($where = " ") {
		 $query = $this->db->query("SELECT * FROM tb_buku ".$where);
		 return $query->result_array();
	}

	function getData_buku() {
		$query = $this->db->query("SELECT * FROM tb_buku");
		return $query->result();
	}

	function addBuku($input) {
		$this->db->insert('tb_buku',$input);
	}

	function simpan_editBuku($update,$primary_key) {
		$this->db->update('tb_buku',$update,$primary_key);
	}

}