<html>
<head>
	<title></title></head>
<body>
	<div class="row">
	<h3>Tambah Distributor</h3>
	<div class="col-md-8">
	<form method="post">
	  <div class="form-group">
		<label>Nama</label>
		<input name="nama" type="text" class="form-control" placeholder="Nama Distributor" required="required">
	  </div>
	  <div class="form-group">
		<label>Alamat</label>
		<textarea name="alamat"name="nama"class="form-control" placeholder="Alamat" required="required"></textarea>
	  </div>
	  <div class="form-group">
		<label>Telephon</label>
		<input name="telephon" type="text" class="form-control" placeholder="Nomor Telephon" required="required">
	  </div>
	  
		<input name="fsimpan" type="submit" class="btn btn-sm btn-success" value="Simpan">
		
		<a class="btn btn-sm btn-danger" href="?menu=data_distributor">Kembali</a>
	  
  </form>
  <?php
	if(isset($_POST['fsimpan'])){
		$nama = $_POST['nama'];
		$alamat = $_POST['alamat'];
		$telephon = $_POST['telephon'];
		
	
	$q ="INSERT INTO tb_distributor(nama_distributor, alamat, telephon)VALUES('$nama',
	'$alamat','$telephon')";
	
	mysqli_query($koneksi,$q);
	?>
	<script type="text/javascript">
		alert('Berhasil coy |');
		document.location.href="?menu=data_distributor";
	</script>
	<?php
	}
	?>
  </div>
	<div>
</body>
</html>