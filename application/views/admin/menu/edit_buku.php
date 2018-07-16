<?php $this->load->view('admin/header');?>
<?php $this->load->view('admin/navigasi/navigasi_buku');?>

  	
	<div class="row">
	<h3>Edit Buku</h3>
	<div class="col-md-6">
	<form method="post" action="<?php echo site_url('buku/simpan_edit_buku');?>">
	  <div class="form-group">
		<label>Judul</label>
		<input name="judul" type="text" class="form-control" value="<?php echo $judul ;?>" required="required">
	  </div>
	  <div class="form-group">
		<label>NOISBN</label>
		<input name="noisbn" type="number" class="form-control" value="<?php echo $noisbn; ?>" required="required">
	  </div>
	  <div class="form-group">
		<label>Penulis</label>
		<input name="penulis" type="text" class="form-control" value="<?php echo $penulis; ?>" required="required">
	  </div>
	  <div class="form-group">
		<label>Penerbit</label>
		<input name="penerbit" type="text" class="form-control" value="<?php echo $penerbit; ?>" required="required">
	  </div>
	  <div class="form-group">
		<label>Tahun</label>
		<input name="tahun" type="number" min="1200" max="2099" class="form-control" value="<?php echo $tahun; ?>" required="required">
	  </div>
	  
	
  </div>
  
  <div class="col-md-6">
	 <div class="form-group">
		<label>Stok</label>
		<input name="stok" type="number" class="form-control" value="<?php echo $stok; ?>" required="required" readonly>
	  </div>
	  <div class="form-group">
		<label>Harga Pokok</label>
		<input name="harga_pokok" type="number" class="form-control" value="<?php echo $harga_pokok; ?>" required="required" readonly>
	  </div>
	  <div class="form-group">
		<label>Harga Jual</label>
		<input name="harga_jual" type="number" class="form-control" value="<?php echo $harga_jual; ?>"" required="required">
	  </div>
	  <div class="form-group">
		<label>PPn</label>
		<input name="ppn" type="number" class="form-control" value="<?php echo $ppn; ?>" required="required" readonly>
	  </div>
	  <div class="form-group">
		<label>Diskon</label>
		<input name="diskon" type="number" class="form-control" value="<?php echo $diskon; ?>" required="required">
	  </div>
	  
	  
	  </div>
	  <input name="fsimpan" type="submit" class="btn btn-sm btn-success" value="Simpan">
		
		<a class="btn btn-sm btn-danger" href="<?php echo site_url('admin/data_buku'); ?>">Kembali</a>
		<input style="height: 0; width: 0; border: 0;" type="number" name="id_buku" value="<?php echo $id_buku; ?>">
	  
		
  </form>
 
  <?php/*
	if(isset($_POST['fsimpan'])){
		$judul = $_POST['judul'];
		$noisbn = $_POST['noisbn'];
		$penulis = $_POST['penulis'];
		$penerbit = $_POST['penerbit'];
		$tahun = $_POST['tahun'];
		$stok = $_POST['stok'];
		$harga_jual = $_POST ['harga_jual'];
		$jml_ppn = 0.1;
	
		$ppn = $harga_jual * $jml_ppn;
		$diskon = $_POST['diskon'];
		$harga_pokok = $harga_jual + $ppn - $diskon;
		
		
	$q ="UPDATE tb_buku SET judul='$judul', noisbn='$noisbn', penulis='$penulis', penerbit='$penerbit', 
	tahun='$tahun', stok='$stok', harga_pokok='$harga_pokok', harga_jual='$harga_jual', ppn='$ppn', diskon='$diskon'
	WHERE id_buku='$idbuku'";
	mysqli_query($koneksi,$q);*/
	?>
	<!--<script type="text/javascript">
		alert('Berhasil coy |');
		document.location.href="?menu=data_buku";
	</script>-->
	<?php
	//}
	?>

  
	<div>
<?php $this->load->view('admin/footer');?>