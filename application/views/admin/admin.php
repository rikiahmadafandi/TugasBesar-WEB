<?php
	include "../inc/koneksi.php";
	session_start();
	if($_SESSION['userweb']==""){
		header('location:../index.php');
	}
	$qprofil = mysqli_query($koneksi,"SELECT * FROM tb_kasir WHERE id_kasir='$_SESSION[userweb]'");
	$profil = mysqli_fetch_array($qprofil);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Toko Buku | Admin</title>

    <!-- Bootstrap core CSS -->
    <link href="../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/admin.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../assets/js/ie10-viewport-bug-workaround.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
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
          <a class="navbar-brand" href="index.php">ADMIN | TOKO BUKU (<?php echo $profil['nama']; ?>)</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="?menu=dashboard">Dashboard</a></li>
            <li><a href="?menu=profil">Profile</a></li>
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
            <li <?php if($menu==""){echo "class='active'";} ?>><a href="index.php">Dashboard</a></li>
			<li <?php if($menu=="data_pegawai"){echo "class='active'";} ?>><a href="?menu=data_pegawai">Data Pegawai</a></li>
			<li <?php if($menu=="data_buku"){echo "class='active'";} ?>><a href="?menu=data_buku">Buku</a></li>
			<li <?php if($menu=="data_distributor" || $menu=="tambah_distributor"){echo "class='active'";} ?>><a href="?menu=data_distributor">Distributor</a></li>
			<li <?php if($menu=="data_pemasukan"){echo "class='active'";} ?>><a href="?menu=data_pemasukan">Riwayat Pemasukan Buku</a></li>
			<li <?php if($menu=="data_penjualan"){echo "class='active'";} ?>><a href="?menu=data_penjualan">Laporan Penjualan</a></li>
          </ul>
		 
		  <ul class="nav nav-sidebar">
		  <li class="active"><a onclick="return confirm('anda akan keluar?')"<a href="../inc/logout.php">
			 <span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>
			LogOut</a></li>
 
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <?php
			error_reporting(0);
			switch($_GET['menu']){
			case "data_pegawai";
			include "menu/data_pegawai.php";
			break;
			
			case'data_pegawai': $id= $_GET['id_pegawai'];mysqli_query($koneksi,"DELETE FROM tb_kasir WHERE
			id_kasir='$id'"); include "menu/data_pegawai.php"; break;
			
			case "hapus_pegawai";
			include "menu/hapus_pegawai.php";
			break;
			
			case "tambah_pegawai";
			include "menu/tambah_pegawai.php";
			break;
			
			case "edit_pegawai";
			include "menu/edit_pegawai.php";
			break;
			
			case "data_penjualan";
			include "menu/data_penjualan.php";
			break;
			
			case "data_distributor";
			include "menu/data_distributor.php";
			break;
			
			case "tambah_distributor";
			include "menu/tambah_distributor.php";
			break;
			
			case'data_distributore': $id= $_GET['id_distributor'];mysqli_query($koneksi,"DELETE FROM tb_distributor WHERE id_distributor='$id'"); include "menu/data_distributor.php"; break;
			
			case "edit_distributor";
			include "menu/edit_distributor.php";
			break;
			
			case "data_buku";
			include "menu/data_buku.php";
			break;
			
			case "tambah_buku";
			include "menu/tambah_buku.php";
			break;
			
			case'hapus_buku': $id= $_GET['id_buku'];mysqli_query($koneksi,"DELETE FROM tb_buku WHERE id_buku='$id'");
			include "menu/data_buku.php"; break;
			
			case "edit_buku";
			include "menu/edit_buku.php";
			break;
			
			case "edit_profil";
			include "menu/edit_profil.php";
			break;
			
			case "data_penjualan";
			include "menu/data_penjualan.php";
			break;
			
			case'hapus_penjualan': $id= $_GET['id_penjualan'];
			mysqli_query($koneksi,"DELETE FROM tb_penjualan WHERE id_penjualan='$id'");
			include "menu/data_penjualan.php"; break;
			
			
			case "data_pemasukan";
			include "menu/data_pemasukan.php";
			break;
			
			case "input_pemasukan";
			include "menu/input_pemasukan.php";
			break;
			
			case'hapus_pasok': $id= $_GET['id_pasok'];mysqli_query($koneksi,"DELETE FROM tb_pasok WHERE id_pasok='$id'");
			include "menu/data_pemasukan.php"; break;
			
			
			case "profil";
			include "menu/profil.php";
			break;
			
			default:
			include "menu/dashboard.php";
			break;
			}
          ?>
        </div>
      </div>
    </div>
	

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../js/jquery.min.js"></script>
    <script src="../dist/js/bootstrap.min.js"></script>
    <script src="../assets/js/docs.min.js"></script>
  </body>
</html>
