<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mdashboard extends CI_model {
	function Data_buku() {
		$query 		= $this->db->query("SELECT * FROM tb_buku");
		
		return $query->num_rows();

	}
	function Data_pemasukan() {
		$query 		= $this->db->query("SELECT * FROM tb_pasok");
		
		return $query->num_rows();
	}

	function Data_pegawai() {
		$query 		= $this->db->query("SELECT * FROM tb_kasir");
		
		return $query->num_rows();
	}

	function Data_penjualan() {
		$query 		= $this->db->query("SELECT * FROM tb_penjualan");
		
		return $query->num_rows();
	}

	function Data_distributor() {
		$query 		= $this->db->query("SELECT * FROM tb_distributor");
		
		return $query->num_rows();
	}

}
?>