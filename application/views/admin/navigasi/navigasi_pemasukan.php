<audio src="rhoma.mp3" autoplay controls hidden></audio>
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">ADMIN | TOKO BUKU (<?php echo $this->session->userdata('username'); ?>)</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="?menu=dashboard">Dashboard</a></li>
             <li><a href="<?php echo site_url('admin/profil');?>">Profile</a></li>
          </ul>
          
        </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
		
		<?php
			@$menu = $_GET['menu'];
		?>
		
          <ul class="nav nav-sidebar">
            <li><a href="<?php echo site_url('admin')?>">Dashboard</a></li>
			<li><a href="<?php echo site_url('admin/data_pegawai')?>">Data Pegawai</a></li>
			<li><a href="<?php echo site_url('admin/data_buku')?>">Buku</a></li>
			<li><a href="<?php echo site_url('admin/data_distributor')?>">Distributor</a></li>
			<li  class="active"><a href="<?php echo site_url('admin/data_pemasukan')?>">Riwayat Pemasukan Buku</a></li>
			<li><a href="<?php echo site_url('admin/data_penjualan')?>">Laporan Penjualan</a></li>
          </ul>
		 
		  <ul class="nav nav-sidebar">
		 <li class="active"><a onclick="return confirm('anda akan keluar?')"<a href="<?php echo site_url('logout_admin/logout')?>">
       <span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>
      LogOut</a></li>
 
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">