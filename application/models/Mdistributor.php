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
}