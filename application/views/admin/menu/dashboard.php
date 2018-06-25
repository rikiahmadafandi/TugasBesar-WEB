<?php $this->load->view('admin/header');?>
<?php $this->load->view('admin/navigasi/navigasi_dashboard');?>


<h4>Selamat Datang Admin <?php echo $user;?></h4>
<h2>Aplikasi Toko Buku</h2>
<div class="row">
	<div class="col-md-4">
		<div class="panel panel-info">
			<div class="panel-heading">Data Pegawai</div>
				<div class="panel-body">
				<center>
				<h3><span class="glyphicon glyphicon-user"></span>
				<?php echo $data_pegawai
				?>
				</h3>
				</center>
				</div>
			</div>
		</div>
	
	<div class="col-md-4">
		<div class="panel panel-info">
			<div class="panel-heading">Data Penjualan</div>
				<div class="panel-body">
				<center>
				<h3><span class="glyphicon glyphicon-export"></span>
				<?php echo $data_penjualan
				?>
				</h3>
				</center>
				</div>
			</div>
		</div>
	
	<div class="col-md-4">
		<div class="panel panel-info">
			<div class="panel-heading">Data Distributor</div>
				<div class="panel-body">
				<center>
				<h3><span class="glyphicon glyphicon-user"></span>
				<?php echo $data_distributor
				?>
				</h3>
				</center>
				</div>
			</div>
		</div>
	
	<div class="col-md-4">
		<div class="panel panel-info">
			<div class="panel-heading">Data Buku</div>
				<div class="panel-body">
				<center>
				<h3><span class="glyphicon glyphicon-book"></span>
				<?php echo $data_buku
				?>
				</h3>
				</center>
				</div>
			</div>
		</div>
	
	<div class="col-md-4">
		<div class="panel panel-info">
			<div class="panel-heading">Riwayat Pemasukan</div>
				<div class="panel-body">
				<center>
				<h3><span class="glyphicon glyphicon-import"></span>
				<?php echo $data_pemasukan
				?>
				</h3>
				</center>
				</div>
			</div>
		</div>
	</div>

<?php $this->load->view('admin/footer');?>