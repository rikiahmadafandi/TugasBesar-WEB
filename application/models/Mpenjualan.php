<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mpenjualan extends CI_model {
	function getData_penjualan() {
		$query = $this->db->query("SELECT tb_jual.*,tb_kasir.* FROM tb_jual INNER JOIN tb_kasir ON tb_kasir.id_kasir=tb_jual.id_kasir"); //tb_penjualan
		return $query->result();
	}

}