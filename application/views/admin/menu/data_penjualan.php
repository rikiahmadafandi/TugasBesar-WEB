<?php $this->load->view('admin/header');?>
<?php $this->load->view('admin/navigasi/navigasi_penjualan');?>


<div class="bg-1">
  <div class="container text-center">
    <h3>Riki Rhoma BOOK</h3>
    <img src="cet.jpg"  webstripperwas="cet.jpg" class="img-circle" alt="cet" width="350" height="350">
    <h3>I'm is ferry GOOD</h3>
  </div>
</div>
<div class="row">
	<div class="col-xs-12 col-md-8">
		<h3>Tabel Penjualan</h3>
		
		<button class="btn btn-sm btn-default">Jumlah Data <span class="badge"><?php //echo $jumlah; ?></span></button>
		<a class="btn btn-sm btn-primary" href="?menu=data_penjualan">refresh / all tampil data</a>
	</div>
  <div class="col-xs-6 col-md-4">
  <form method="post">
      <div class="input-group">
	<input name="inputan" type="text" class="form-control" placeholder="Cari Pegawai">
      <span class="input-group-btn">
        <input name="cari" class="btn btn-default" value="cari" type="submit">
      </span>
    </div>
	<form><!-- /input-group -->
  </div><!-- /.col-lg-6 -->
	<br>
	<table class="table table-bordered" id="tabel_data">
	<thead>
		<tr class="success">
			<th>No.</th>
			<th>Kasir</th>
			<th>Total</th>
			<th>Uang pembali</th>
			<th>Uang Kembali</th>
			<th>Tanggal</th>
			
		</tr>
			
	</thead>
	<tbody>
		<?php 
        $no=1;
        foreach ($query as $d) { 
        ?>
		<tr class="warning">
			<td><?php echo $no++; ?></td>
			<td><?php echo $d->nama; ?></td>
			<td><?php echo $d->total; ?></td>
			<td>Rp.<?php echo $d->uang; ?></td>
			<td><?php echo $d->kembali; ?></td>
			<td><?php echo $d->tanggal; ?></td>
			
			
		</tr>
		<?php
	}
	//}
		?>
	<table>
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