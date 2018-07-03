<?php $this->load->view('admin/header');?>
<?php $this->load->view('admin/navigasi/navigasi_Distributor');?>
	<div class="row">
	<h3>Tambah Pegawai</h3>
	<div class="col-md-8">
	<form method="post" action="<?php echo site_url('distributor/tambah_distributor');?>">
	  <div class="form-group">
		<label>Nama</label>
		<input name="nama_distributor" type="text" class="form-control" placeholder="Nama" required="required">
	  </div>
	  <div class="form-group">
		<label>Alamat</label>
		<textarea name="alamat"name="nama"class="form-control" placeholder="Alamat Pegawai" required="required"></textarea>
	  </div>
	  <div class="form-group">
		<label>Telephon</label>
		<input name="telephon" type="text" class="form-control" placeholder="Nomor Telephon" required="required">
	  </div>
	  <input name="fsimpan" type="submit" class="btn btn-sm btn-success" value="Simpan">
		
		<a class="btn btn-sm btn-danger" href="<?php echo site_url('admin/data_distributor');?>">Kembali</a>
	  
	  
  </form>
 </div>
<div>
<?php $this->load->view('admin/footer');?>