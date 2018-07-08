<?php $this->load->view('admin/header');?>
<?php $this->load->view('admin/navigasi/navigasi_buku');?>
<?php
	//$id =$_GET['id_pegawai'];
	//$query =mysqli_query($koneksi,"SELECT * FROM tb_kasir WHERE id_kasir='$id'");
	//$data =mysqli_fetch_array($query);
?>
	<div class="row">
	<h3>Edit Data Pegawai</h3>
	<div class="col-md-8">
	<form method="post" action="<?php echo site_url('pegawai/simpan_editpegawai');?>">
	  <div class="form-group">
		<label>Nama</label>
		<input name="nama" type="text" class="form-control" value="<?php  echo $nama;//$data['nama']; ?>">
	  </div>
	  <div class="form-group">
		<label>Alamat</label>
		<textarea name="alamat"name="nama"class="form-control"><?php  echo $alamat//$data['alamat']; ?></textarea>
	  </div>
	  <div class="form-group">
		<label>Telephon</label>
		<input name="telephon" type="text" class="form-control" value="<?php  echo $telephon //$data['telephon']; ?>">
	  </div>
	  <div class="form-group">
		<label>Status User</label>
		<select name="status"class="form-control">
		<option value="aktif" <?php if($status=="aktif"){echo "selected";} ?> class="from-control">Aktif</option>
		<option value="nonaktif" <?php if($status=="nonaktif"){echo "selected";} ?> class="from-control">NonAktif</option>
		</select>
		</div>
	  
		<input name="fsimpan" type="submit" class="btn btn-sm btn-success" value="Simpan">
		
		<a class="btn btn-sm btn-danger" href="<?php echo site_url('admin/data_pegawai');?>">Kembali</a>
		<input style="height: 0; width: 0; border: 0;" name="id_kasir" type="text" value="<?php  echo $id_kasir;//$data['nama']; ?>" readonly>
	  
  </form>
  <?php
	/*if(isset($_POST['fsimpan'])){
		$nama = $_POST['nama'];
		$alamat = $_POST['alamat'];
		$telephon = $_POST['telephon'];
		$status = $_POST['status'];
		
	$q ="UPDATE tb_kasir SET nama='$nama', alamat='$alamat', telephon='$telephon', status='$status'
	WHERE id_kasir='$id'";
	
	mysqli_query($koneksi,$q);*/
	?>
	<!--<script type="text/javascript">
		alert('Berhasil coy |');
		document.location.href="?menu=data_pegawai";
	</script>-->
	<?php
	//}
	?>
  </div>
	<div>
<?php $this->load->view('admin/footer');?>