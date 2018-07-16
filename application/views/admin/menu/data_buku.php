<?php $this->load->view('admin/header');?>
<?php $this->load->view('admin/navigasi/navigasi_buku');?>


<div class="jumbotron text-center">
  <h1>Riki Rhoma BOOK</h1> 
  <p>Lebih Baik kutu buku dari pada kutu beneran</p> 
  <form class="form-inline">
   </form>
</div>
<div class="row">
	<div class="col-xs-12 col-md-8">
		<h3>Data Buku</h3>
		
		<?php
			//$qjumlah = mysqli_query($koneksi, "SELECT * FROM tb_buku");
			//$jumlah = mysqli_num_rows($qjumlah);
		?>
		
		<a class="btn btn-sm btn-success" href="<?php echo site_url('admin/tambah_buku'); ?>">Tambah Data</a>
		
		<a class="btn btn-sm btn-primary" href="?menu=data_buku">refresh / all tampil data</a>
	</div>
  
  <br>
	
	<table class="table table-bordered" cellpadding="5" id="tabel_data">
	<thead>
		<tr class="success">
			<th>No.</th>
			<th>Judul</th>
			<th>NoISBN</th>
			<th>Penulis</th>
			<th>Penerbit</th>
			<th>Tahun</th>
			<th>Stok</th>
			<th>Harga Pokok</th>
			<th>Harga Jual</th>
			<th>PPn</th>
			<th>Diskon</th>
			<th>Opsi</th>
		</tr>
			
	</thead>
	<tbody>

		<?php 
        $no=1;
        foreach ($query as $d) { 
        ?>
		<tr class="warning">
			<td><?php echo $no++; ?></td>
			<td><?php echo $d->judul; ?>  </td>
			<td><?php echo $d->noisbn; ?>  </td>
			<td><?php echo $d->penulis; ?>  </td>
			<td><?php echo $d->penerbit; ?>  </td>
			<td><?php echo $d->tahun; ?>  </td>
			<td><?php echo $d->stok; ?>  </td>
			<td>Rp.<?php echo $d->harga_pokok; ?>  </td>
			<td>Rp.<?php echo $d->harga_jual; ?>  </td>
			<td>Rp.<?php echo $d->ppn; ?>  </td>
			<td>Rp.<?php echo $d->diskon; ?>  </td>
			<td>
				<a onclick="return confirm('anda yakin ingin menghapusnya?')" title="Hapus" 
				href="<?php echo site_url('buku/hapus_buku/'.$d->id_buku); ?>">
				<span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
				|
				<a title="edit" href="<?php echo site_url('admin/edit_buku/'.$d->id_buku); ?>">
				<span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
				<br>
				<a class="btn btn-xs btn-info" title="Pasok Buku" href="<?php echo site_url('admin/pasok_buku/'.$d->id_buku); ?>">Pasok</a>
			
			</td>
			
		</tr>
		<?php
	}
	//}
		?>
	<table>
	
	<nav>
	<ul class="pagination">
	<?php?>
		<li <?php ?>><a href="?menu=data_buku&hal=<?php ?>"></a></li>
		<?php
	//}
	?>
	
<?php $this->load->view('admin/footer');?>

<script type="text/javascript">
$(document).ready(function(){
    $('#tabel_data').DataTable( {
        "scroolX"           : true,
       // "scrollY"           : "350px",
        "scrollCollapse"    : true,
        "paging"            : true,
    } );        
});
</script>