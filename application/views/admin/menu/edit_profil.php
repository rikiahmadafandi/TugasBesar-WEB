<?php $this->load->view('admin/header');?>
<?php $this->load->view('admin/navigasi/navigasi_profil');?>
	<div class="row">
	<h3>Rubah Informasi Tentang Anda</h3>
	<div class="col-md-8">
	<form method="post" action="<?php echo site_url('pegawai/eksekusi_profil');?>">
	  <div class="form-group">
		<label>Nama</label>
		<input name="nama" type="text" class="form-control" value="<?php echo $query['nama']; ?>">
	  </div>
	  <div class="form-group">
		<label>Alamat</label>
		<textarea name="alamat" class="form-control"><?php echo $query['alamat']; ?></textarea>
	  </div>
	  <div class="form-group">
		<label>Telephon</label>
		<input name="telephon" type="text" class="form-control" value="<?php echo $query['telephon']; ?>">
	  </div>
	  
		<input name="edit_profil" type="submit" class="btn btn-sm btn-success" value="Simpan">
		
		<a class="btn btn-sm btn-danger" href="<?php echo site_url('admin/profil');?>">Kembali</a>
	  
  
  <?php
	if(isset($_POST['edit_profil'])){
		$nama = $_POST['nama'];
		$alamat = $_POST['alamat'];
		$telephon = $_POST['telephon'];
	
	mysqli_query($koneksi,"UPDATE tb_kasir SET nama='$nama', alamat='$alamat', telephon='$telephon' WHERE id_kasir='$profil[id_kasir]'");
		?>
		 <script type="text/javascript">
		 alert('perubahan telah tersimpan !');
		 document.location.href="?menu=profil";
		 </script>
	<?php 
	}
	
		?>
		</form>
  </div>
	<div>
<?php $this->load->view('admin/footer');?>