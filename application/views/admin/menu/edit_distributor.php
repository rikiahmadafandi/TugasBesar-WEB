<?php $this->load->view('admin/header');?>
<?php $this->load->view('admin/navigasi/navigasi_buku');?>

<?php
	//$id =$_GET['id_distributor'];
	//$query =mysqli_query($koneksi,"SELECT * FROM tb_distributor WHERE id_distributor='$id'");
	//$data =mysqli_fetch_array($query);
?>
	<div class="row">
	<h3>Edit Data distributor</h3>
	<div class="col-md-8">
	<form method="post" action="<?php echo site_url('distributor/simpan_editdistributor');?>">
	  <div class="form-group">
		<label>Nama</label>
		<input name="nama" type="text" class="form-control" value="<?php  echo $nama;//$data['nama_distributor']; ?>">
	  </div>
	  <div class="form-group">
		<label>Alamat</label>
		<textarea name="alamat"name="nama"class="form-control"><?php  echo $alamat;//$data['alamat']; ?></textarea>
	  </div>
	  <div class="form-group">
		<label>Telephon</label>
		<input name="telephon" type="text" class="form-control" value="<?php  echo $telephon//$data['telephon']; ?>">
	  </div>
	  
		<input name="fsimpan" type="submit" class="btn btn-sm btn-success" value="Simpan">
		
		<a class="btn btn-sm btn-danger" href="<?php echo site_url('admin/data_distributor');?>">Kembali</a>
		<input style="height: 0; width: 0; border: 0;"  name="id_distributor" type="text" value="<?php  echo $id_distributor;//$data['nama_distributor']; ?>" readonly>
	  
  </form>
  <?php /*
	if(isset($_POST['fsimpan'])){
		$nama = $_POST['nama'];
		$alamat = $_POST['alamat'];
		$telephon = $_POST['telephon'];
		
	$q ="UPDATE tb_distributor SET nama_distributor='$nama', alamat='$alamat', telephon='$telephon' WHERE id_distributor='$id'";
	
	mysqli_query($koneksi,$q);
	?>
	<script type="text/javascript">
		alert('Berhasil coy |');
		document.location.href="?menu=data_distributor";
	</script>
	<?php
	} */
	?>
  </div>
	<div>
<?php $this->load->view('admin/footer');?>