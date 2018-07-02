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
}