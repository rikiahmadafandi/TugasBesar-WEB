<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Distributor extends CI_Controller {
	function simpan_editdistributor() {
		$nama_distributor = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$telephon = $this->input->post('telephon');
		$id_distributor = $this->input->post('id_distributor');

		$primary_key = array (
					'id_distributor' => $id_distributor,
			);
		$update = array (
					'nama_distributor' => $nama_distributor,
					'alamat' => $alamat,
					'telephon' => $telephon,
			);
		$this->Mdistributor->simpan_editdistributor($update,$primary_key);
		redirect('admin/data_distributor');
	}

	function hapus_distributor($id_distributor)
	{
		$data['id_distributor']=$id_distributor;
		
		$this->Mdistributor->hapus_distributor($data);
		redirect('admin/data_distributor');
	}

}
?>