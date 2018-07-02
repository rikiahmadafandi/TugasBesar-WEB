<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buku extends CI_Controller {

function tambah_buku ()
	{
		$judul = $this->input->post('judul');
		$noisbn = $this->input->post('noisbn');
		$penulis = $this->input->post('penulis');
		$penerbit = $this->input->post('penerbit');
		$tahun = $this->input->post('tahun');
		$stok = $this->input->post('stok');
		$harga_jual = $this->input->post('harga_jual');
		$jml_ppn = 0.1;
	
		$ppn = $harga_jual * $jml_ppn;
		$diskon = $this->input->post('diskon');
		$harga_pokok = $harga_jual + $ppn - $diskon;
		$input=array(
					'judul'			=> $judul, 
					'noisbn'		=> $noisbn, 
					'penulis'		=> $penulis, 
					'penerbit'		=> $penerbit, 
					'tahun'			=> $tahun, 
					'stok'			=> $stok, 
					'harga_pokok'	=> $harga_pokok, 
					'harga_jual'	=> $harga_jual, 
					'ppn'			=> $ppn, 
					'diskon'		=> $diskon
					);

		$this->Mbuku->addBuku($input);
		redirect('admin/data_buku');

	}
}
