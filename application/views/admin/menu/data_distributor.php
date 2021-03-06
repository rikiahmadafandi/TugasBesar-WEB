<?php $this->load->view('admin/header');?>
<?php $this->load->view('admin/navigasi/navigasi_distributor');?>

<div class="jumbotron text-center">
  <h1>Riki Rhoma BOOK</h1> 
  <p>Lebih Baik kutu buku dari pada kutu beneran</p> 
  <form class="form-inline">
   </form>
</div>
<div class="row">
	<div class="col-xs-12 col-md-8">
		<h3>Tabel Distributor</h3>
		
		
		
		<a class="btn btn-sm btn-success" href="<?php echo site_url('admin/tambah_distributor'); ?>">Tambah Data</a>
		
		<a class="btn btn-sm btn-primary" href="?menu=data_distributor">refresh / all tampil data</a>
	</div>
  
	<br>
	<table class="table table-bordered" id="tabel_data">
	<thead>

	
		<tr class="success">
			<th>No.</th>
			<th>Nama Distributor</th>
			<th>Alamat</th>
			<th>Telephon</th>
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
			<td><?php echo $d->nama_distributor; ?></td>
			<td><?php echo $d->alamat; ?></td>
			<td><?php echo $d->telephon; ?></td>
			<td>
				<a onclick="return confirm('anda yakin ingin menghapusnya?')" title="Hapus" href="<?php echo site_url('distributor/hapus_distributor/'.$d->id_distributor); ?>"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
				|
				<a title="edit" href="<?php echo site_url('admin/edit_distributor/'.$d->id_distributor); ?>"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
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