<?php $this->load->view('admin/header');?>
<?php $this->load->view('admin/navigasi/navigasi_pegawai');?>
 
</head>
<body>

<div class="bg-1">
  <div class="container text-center">
    <h3>Riki Rhoma BOOK</h3>
    <img src="cet.jpg"  webstripperwas="cet.jpg" class="img-circle" alt="cet" width="350" height="350">
    <h3>I'm is ferry GOOD</h3>
  </div>
</div>
<div class="row">
	<div class="col-xs-12 col-md-8">
		<h3>Tabel Pegawai</h3>
		
		<a class="btn btn-sm btn-success" href="<?php echo site_url('admin/tambah_pegawai'); ?>">Tambah Data</a>
		<button class="btn btn-sm btn-default">Jumlah Data <span class="badge"><?php //echo $jumlah; ?></span></button>
		<a class="btn btn-sm btn-primary" href="?menu=data_pegawai">refresh / all tampil data</a>
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