<?php $this->load->view('admin/header');?>
<?php $this->load->view('admin/navigasi/navigasi_buku');?>


  	
	<div class="row">
	<h3>Tambah Buku</h3>
	<div class="col-md-6">
	<form action="<?php echo site_url('buku/tambah_buku'); ?>" method="post"><!--action="?menu=tambah_buku">-->
	  <div class="form-group">
		<label>Judul</label>
		<input name="judul" type="text" class="form-control" placeholder="Judul" required="required">
	  </div>
	  <div class="form-group">
		<label>NOISBN</label>
		<input name="noisbn" type="number" class="form-control" placeholder="NOISBN" required="required">
	  </div>
	  <div class="form-group">
		<label>Penulis</label>
		<input name="penulis" type="text" class="form-control" placeholder="Penulis" required="required">
	  </div>
	  <div class="form-group">
		<label>Penerbit</label>
		<input name="penerbit" type="text" class="form-control" placeholder="Penerbit" required="required">
	  </div>
	  <div class="form-group">
		<label>Tahun</label>
		<input name="tahun" type="number" min="1200" max="2099" class="form-control" placeholder="Tahun" required="required">
	  </div>
	  
	
  </div>
  
  <div class="col-md-6">
	 <div class="form-group">
		<label>Stok</label>
		<input name="stok" type="number" class="form-control" placeholder="Stok Buku" required="required">
	  </div>
	  <div class="form-group">
		<label>Harga Pokok</label>
		<input name="harga_pokok" type="number" class="form-control" placeholder="Harga Pokok" required="required" readonly>
	  </div>
	  <div class="form-group">
		<label>Harga Jual</label>
		<input name="harga_jual" type="number" class="form-control" placeholder="Harga Jual" required="required">
	  </div>
	  <div class="form-group">
		<label>PPn</label>
		<input name="ppn" type="number" class="form-control" placeholder="PPn dihitung Otomatis 10% dari Harga Jual" required="required" readonly>
	  </div>
	  <div class="form-group">
		<label>Diskon</label>
		<input name="diskon" type="number" class="form-control" placeholder="Diskon" required="required">
	  </div>
	  
	  
	  </div>
	  <button type="submit" name="simpan" class="btn btn-warning" required>Simpan</button>
	  <!--<input name="fsimpan" type="submit" class="btn btn-sm btn-success" value="Simpan">-->
		
		<a class="btn btn-sm btn-danger" href="?menu=data_buku">Kembali</a>
	  
		
  </form>
 
  
  
	<div>
<?php $this->load->view('admin/footer');?>