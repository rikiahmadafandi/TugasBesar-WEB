<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mdistributor extends CI_model {
	
	function getData_distributor() {
		$query = $this->db->query("SELECT * FROM tb_distributor");
		return $query->result();
	}

	function addDistributor($input) {
		$this->db->insert('tb_distributor',$input);
	}
	
	function nama_distribusi() {

		$query = $this->db->query("SELECT tb_buku.*,tb_distributor.*,tb_pasok.* FROM tb_pasok 
			INNER JOIN tb_distributor ON tb_distributor.id_distributor=tb_pasok.id_distributor
			INNER JOIN tb_buku ON tb_buku.id_buku=tb_pasok.id_buku");

		return $query->result();
	}

	function tampil_pemasokan() {
		$query = $this->db->query("SELECT * FROM tb_pasok");
		return $query->result();
	}
}