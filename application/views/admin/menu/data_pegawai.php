<?php $this->load->view('admin/header');?>
<?php $this->load->view('admin/navigasi/navigasi_pegawai');?>
 
</head>
<body>

<div class="jumbotron text-center">
  <h1>Riki Rhoma BOOK</h1> 
  <p>Lebih Baik kutu buku dari pada kutu beneran</p> 
  <form class="form-inline">
   </form>
</div>
<div class="row">
	<div class="col-xs-12 col-md-8">
		<h3>Tabel Pegawai</h3>
		
		<a class="btn btn-sm btn-success" href="<?php echo site_url('admin/tambah_pegawai'); ?>">Tambah Data</a>
		
		<a class="btn btn-sm btn-primary" href="?menu=data_pegawai">refresh / all tampil data</a>
	</div>
 
	<br>
	<table class="table table-bordered" id="tabel_data">
	<thead>
		<tr class="success">
			<th>No.</th>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Telephon</th>
			<th>Status</th>
			<th>Username</th>
			<th>Opsi</th>
		</tr>
			
	</thead>
	<tbody>
		<?php 
        $no=1;
        foreach ($query as $d) { ?>
		<tr class="warning">
			<td><?php echo $no++; ?></td>
			<td><?php echo $d->nama;//$data['nama']; ?></td>
			<td><?php echo $d->alamat;//$data['alamat']; ?></td>
			<td><?php echo $d->telephon;//$data['telephon']; ?></td>
			<td><?php echo $d->status;//$data['status']; ?></td>
			<td><?php echo $d->username;//$data['username']; ?></td>
			<td>
				<a onclick="return confirm('anda yakin ingin menghapusnya?')" title="Hapus" href="<?php echo site_url('pegawai/hapus_pegawai/'.$d->id_kasir); ?>"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
				|
				<a title="edit" href="<?php echo site_url('admin/edit_pegawai/'.$d->id_kasir); ?>"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
			</td>
			
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