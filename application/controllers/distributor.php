<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Distributor extends CI_Controller {

function tambah_distributor ()
	{
		$nama_distributor = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$telephon = $this->input->post('telephon');
		

		$input = array (
					'nama_distributor'		=> $nama_distributor,
					'alamat'				=> $alamat,
					'telephon'				=> $telephon
					
			);
		$this->Mdistributor->addDistributor($input);
		redirect('admin/data_distributor');
	}
	function addDistributor($input) {
		$this->db->insert('tb_distributor',$input);
	}
}