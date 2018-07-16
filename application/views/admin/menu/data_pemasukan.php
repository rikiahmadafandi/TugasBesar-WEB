<?php $this->load->view('admin/header');?>
<?php $this->load->view('admin/navigasi/navigasi_pemasukan');?>


<div class="jumbotron text-center">
  <h1>Riki Rhoma BOOK</h1> 
  <p>Lebih Baik kutu buku dari pada kutu beneran</p> 
  <form class="form-inline">
   </form>
</div>
<div class="row">
	<div class="col-xs-12 col-md-8">
		<h3>Riwayat Pemasukan Buku</h3>
		
		
		<a class="btn btn-sm btn-primary" href="?menu=data_pemasukan">refresh / all tampil data</a>
		
	</div>
  
	<br>
	<table class="table table-bordered" id="tabel_data">
	<thead>
		<tr class="success">
			<th>No.</th>
			<th>Nama Distributor</th>
			<th>Judul</th>
			<th>Jumlah</th>
			<th>Tanggal</th>
			<th>Opsi</th>
		</tr>
			
	</thead>
	<tbody>
		<?php 
        $no=1;
        foreach ($nama_distributor as $d) { 
        ?>
		<tr class="warning">
			<td><?php echo $no++; ?></td>
			<td><?php echo $d->nama_distributor; ?></td>
			<td><?php echo $d->judul; ?></td>
			<td><?php echo $d->jumlah; ?></td>
			<td><?php echo $d->tanggal; ?> </td>
			<td>
				<a onclick="return confirm('anda yakin ingin menghapusnya?')" title="Hapus" href="?menu=hapus_pasok&id_pasok=<?php //echo $data['id_pasok']; ?>">
				<span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
				</td>
			
		</tr>
		<?php
	}
	
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