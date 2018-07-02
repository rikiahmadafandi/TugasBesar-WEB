<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mbuku extends CI_model {
	
	function getData_buku() {
		$query = $this->db->query("SELECT * FROM tb_buku");
		return $query->result();
	}
	
	function addBuku($input) {
		$this->db->insert('tb_buku',$input);
	}
}