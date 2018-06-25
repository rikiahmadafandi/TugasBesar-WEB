<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mlogin extends CI_Model {
	public function index()
	{
		
	}
	function cek_user($data) {
		$query = $this->db->get_where('tb_kasir', $data);
		return $query;
	}
}
