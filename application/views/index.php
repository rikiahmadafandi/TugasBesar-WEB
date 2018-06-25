<?php
	//include "inc/koneksi.php";
	//session_start();
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

    <title>Toko Buku Riki_Rhoma</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url();?>assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url();?>assets/css/signin.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="<?php echo base_url();?>assets/assets/js/ie-emulation-modes-warning.js"></script>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="<?php echo base_url();?>assets/assets/js/ie10-viewport-bug-workaround.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	</head>
	 

  <body  background="<?php echo base_url();?>assets/img/e.jpg" Style="width:100%;height:100%;">
 <div class="container">
  
	  <center>
		<div class="col-md-5 col-md-offset-4">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3><span class="glyphicon glyphicon-book" aria-hidden="true"></span> Toko Buku Riki_Rhoma</h3>
					<h4>Login System</h4>
					<p><span class="glyphicon glyphicon-road" aria-hidden="true"></span> Jl. K.H. MasMansur No:23 Bojonegoro</p>
					<p><span class="glyphicon glyphicon-phone-alt" aria-hidden="true"></span> 085855558772 </p>
				</div>
					<div class="panel-body">
					<br> 
					<div class="alert alert-success">
					<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
					 Masukkan Username & Password
					</div>
					 <div class="col-md-11">
					<form method="post" action="<?php echo base_url('login/cek_login'); ?>">
					 <div class="input-group">
					  <span class="input-group-addon">Username</span>
					  <input type="text" name="username" class="form-control" placeholder="Username" requiret="requiret">
					 </div>
					 <br>
					 <div class="input-group">
					  <span class="input-group-addon">Password</span>
					  <input type="password" name="password" class="form-control" placeholder="Password" requiret="requiret">
					 </div>
					 <br>
					 </div>
					 <input name="flogin" type="submit" class="btn btn-block btn-primary" value="Login">
					 </form>
					 
					 <?php ?>
					 
					
				</div>
			</div>
		</div>
		<marquee width="1000" direction="right"><img src="1.jpg" height="100"> <img src="2.jpg" height="100">
  <img src="4.png" height="100"></marquee> <div class="container">
  
      </center>
    </div> 
	</body>
</html>
