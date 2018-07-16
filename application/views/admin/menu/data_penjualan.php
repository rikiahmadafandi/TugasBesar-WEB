<?php $this->load->view('admin/header');?>
<?php $this->load->view('admin/navigasi/navigasi_penjualan');?>


<div class="jumbotron text-center">
  <h1>Riki Rhoma BOOK</h1> 
  <p>Lebih Baik kutu buku dari pada kutu beneran</p> 
  <form class="form-inline">
   </form
<div class="row">
	<div class="col-xs-12 col-md-8">
		<h3>Tabel Penjualan</h3>
		
		<a class="btn btn-sm btn-primary" href="?menu=data_penjualan">refresh / all tampil data</a>
	</div>
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