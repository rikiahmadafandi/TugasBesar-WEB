<?php $this->load->view('admin/header');?>
<?php $this->load->view('admin/navigasi/navigasi_profil');?>
	<h3>Profin Anda</h3>
		<div class="col-md-6">
			<div class="panel panel-info">
				<div class="panel-heading">
					<h3>informasi tentang anda</h3>
				</div>
				<div class="panel-body">
					<table class="table" cellpadding="8"  cellspacing="8">
				
				<tr>
					<th>Nama</th><td>:</td><td><?php echo $query['nama']; ?></td>
				</tr>
				<tr>
					<th>Alamat</th><td>:</td><td><?php echo $query['alamat']; ?></td>
				</tr>
				<tr>
					<th>Telephon</th><td>:</td><td><?php echo $query['telephon']; ?></td>
				</tr>
				</table>
				<a class="btn btn-sm btn-primary" href="<?php echo site_url('admin/edit_profil');?>">Edit Data Saya</a>
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
				<form class="form" method="post" action="<?php echo site_url('pegawai/edit_userprofil');?>">
				
				<div class="input-group">
				  <span class="input-group-addon">User Saat Ini</span>
				  <input type="text" readonly class="form-control" value="<?php echo $query['username']; ?>">
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
				
				
				</fieldset>
				<hr>
				
				<fieldset>
				<legend>Edit Password</legend>
				<form class="form" method="post" action="<?php echo site_url('pegawai/edit_passprofil');?>">
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
				
					
				</fieldset>
				</div>
			</div>	
		</div>
	</div>
<?php $this->load->view('admin/footer');?>