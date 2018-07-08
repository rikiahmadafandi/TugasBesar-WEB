<?php $this->load->view('admin/header');?>
<?php $this->load->view('admin/navigasi/navigasi_buku');?>


	<?php /*
	
		if($_GET['id_buku']==""){
			header('locaiton:?menu=data_buku');
		}
		
	
		$id_buku = $_GET['id_buku'];
		$qbuku = mysqli_query($koneksi, "SELECT * FROM tb_buku WHERE id_buku='$id_buku'");
		$data = mysqli_fetch_array($qbuku); */
	?>


	<div class="row">
	<h3>INput Pemasukan Buku</h3>
	<div class="col-md-8">
	<form method="post" action="<?php echo site_url('buku/simpan_pasok');?>">
	  <div class="form-group">
		<label>Judul</label>
		<input name="judul" type="text" class="form-control" value="<?php echo $judul; ?>" required="required" readonly>
	  </div>
	  <div class="form-group">
		<label>Pilih Distributor</label>
		<select name="id_distributor" class="form-control">
		<?php 
        foreach ($distributor as $d) { 
        ?>
		<option value="<?php echo $d->id_distributor; ?>">
		<?php echo $d->nama_distributor; ?>
		</option>
		<?php
		}
		?>
		</select>
		</div>
	  <div class="form-group">
		<label>Stok Awal Buku</label>
		<input name="stok" type="text" class="form-control" value="<?php echo $stok; ?>" required="required" readonly>
	  </div>
	  <div class="form-group">
		<label for="exampleinputEmail">Jumlah</label>
		<input name="jumlah" type="number" class="form-control" placeholder="Jumlah Pemasukan" required="required" >
	  </div>
	  <div class="form-group">
		<label>Tanggal</label>
		<input name="tanggal"type="text" class="form-control" value="<?php echo date('d-m-y'); ?>" required="required" readonly>
	  </div>
	  
		<input name="fsimpan" type="submit" class="btn btn-sm btn-success" value="Simpan">
		
		<a class="btn btn-sm btn-danger" href="<?php echo site_url('admin/data_buku');?>">Kembali</a>
		<input style="height: 0;width: 0;border: 0;" type="number" name="id_buku" value="<?php echo $id_buku ;?>" readonly>
	  
  </form>
  <?php/*
	if(isset($_POST['fsimpan'])){
		$id_distributor = $_POST['id_distributor'];
		$jumlah = $_POST['jumlah'];
		$tanggal = $_POST['tanggal'];
		$stokupdate = $jumlah + $data['stok'];
	
	$q ="INSERT INTO tb_pasok(id_distributor, id_buku, jumlah, tanggal)VALUES('$id_distributor',
	'$id_buku','$jumlah','$tanggal')";
	
	mysqli_query($koneksi,$q);
	mysqli_query($koneksi,"UPDATE tb_buku SET stok='$stokupdate' WHERE id_buku='$id_buku'");
	*/
	?>
	<!--<script type="text/javascript">
		alert('Berhasil coy |');
		document.location.href="?menu=data_buku";
	</script>-->
	<?php
	//}
	?>
  </div>
	<div>
<?php $this->load->view('admin/footer');?>