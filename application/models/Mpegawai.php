<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mpegawai extends CI_model {
	
	function getData_pegawai() {
		$query = $this->db->query("SELECT * FROM tb_kasir");
		return $query->result();
	}

	function addPegawai($input) {
		$this->db->insert('tb_kasir',$input);
	}

	function simpan_editPegawai($update,$primary_key) {
		$this->db->update('tb_kasir',$update,$primary_key);
	}

	function edit_pegawai($where = " ") {
		 $query = $this->db->query("SELECT * FROM tb_kasir ".$where);
		 return $query->result_array();
	}

	function hapus_pegawai($data) {
		$this->db->where('id_kasir',$data['id_kasir']);
		$this->db->delete('tb_kasir');
	}
}