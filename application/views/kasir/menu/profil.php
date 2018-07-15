<?php $this->load->view('kasir/header');?>
<?php $this->load->view('kasir/navigasi/navigasi_profil');?>
	<h3>Profin Anda</h3>
		<div class="col-md-6">
			<div class="panel panel-info">
				<div class="panel-heading">
					<h3>informasi tentang anda</h3>
				</div>
				<div class="panel-body">
					<table class="table" cellpadding="8"  cellspacing="8">
				<tr>
					<th>Nama</th><td>:</td><td><?php echo $query->nama; ?></td>
				</tr>
				<tr>
					<th>Alamat</th><td>:</td><td><?php echo $query->alamat; ?></td>
				</tr>
				<tr>
					<th>Telephon</th><td>:</td><td><?php echo $query->telephon; ?></td>
				</tr>
				</table>
				<a class="btn btn-sm btn-primary" href="<?php echo site_url('kasir/edit_profil');?>">Edit Data Saya</a>
			</div>
		</div>
	</div>
	<div class="col-md-6">
			<div class="panel panel-info">
				<div class="panel-heading">
					<h3>Edit Username & Password</h3>
				</div>
				<div class="panel-body">
				<fieldset>
				<legend>Edit Username</legend>
				<form class="form" method="post" action="<?php echo site_url('pegawai/edit_userkasir');?>">
				
				<div class="input-group">
				  <span class="input-group-addon">User Saat Ini</span>
				  <input type="text" readonly class="form-control" value="<?php echo $query->username; ?>">
				</div>
				<br>
				<div class="input-group">
				  <span class="input-group-addon">User Baru</span>
				  <input type="text" name="userbaru" class="form-control" placeholder="Username Baru">
				</div>
				<br>
				<div class="input-group">
				  <span class="input-group-addon">Password</span>
				  <input type="password" name="pass" class="form-control" placeholder="Password Anda">
				</div>
				<br>
				  <input type="submit" name="edit_user" value="simpan" class="btn btn-sm btn-success">
	
				</form>
				
				
				<?php
				/*	if(isset($_POST['edit_user'])){
						$userbaru = $_POST['userbaru'];
						$pass = $_POST['pass'];
					    if(md5($pass)==$profil['password']){
						mysqli_query($koneksi,"UPDATE tb_kasir SET username='$userbaru' WHERE id_kasir='$profil[id_kasir]'");
						?>
						<script type="text/javascript">
							alert('username anda berhasil dirubah');
							document.location.href="../inc/logout.php";
							</script>
							
						<?php
						
						}
					else{
						echo "Password Anda Salah";
					}
					}
					*/
				?>
				</fieldset>
				<hr>
				
				<fieldset>
				<legend>Edit Password</legend>
				<form class="form" method="post" action="<?php echo site_url('pegawai/edit_passkasir');?>">
				<div class="form-group">
				<div class="input-group">
				  <span class="input-group-addon">Password Baru</span>
				  <input type="password" name="pass1" class="form-control" placeholder="Password baru">
				</div>
				<br>
				<div class="input-group">
				  <span class="input-group-addon">Ketik Ulang Password</span>
				  <input type="password" name="pass2" class="form-control" placeholder="krtik ulang">
				</div>
				<br>
				<div class="input-group">
				  <span class="input-group-addon">Password Anda Saat Ini</span>
				  <input type="password" name="pass_awal" class="form-control" placeholder="Password Anda Saat Ini">
				</div>
				<br>
				  <input type="submit" name="edit_password" value="simpan" class="btn btn-sm btn-success">
	
				</form>
				
					<?php
				/*	if(isset($_POST['edit_password'])){
						$pass1 = md5($_POST['pass1']);
						$pass2 = md5($_POST['pass2']);
						$pass = $_POST['pass_awal'];
						if($pass1 != $pass2){
							echo "password konfirmasi tidak cocok";
						}
						else {
						if(md5($pass)==$profil['password']){
						mysqli_query($koneksi,"UPDATE tb_kasir SET password='$pass1' WHERE id_kasir='$profil[id_kasir]'");
						?>
						<script type="text/javascript">
							alert('username anda berhasil dirubah');
							document.location.href="../inc/logout.php";
							</script>
							
						<?php
						
						}
					else {
						echo "Password Anda Salah |";
					}
					}
					}	*/
				?>
				</fieldset>
				</div>
			</div>	
		</div>
	</div>
<?php $this->load->view('kasir/footer');?>