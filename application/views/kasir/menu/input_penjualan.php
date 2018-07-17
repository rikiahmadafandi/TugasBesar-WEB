
<?php $this->load->view('kasir/header');?>
<?php $this->load->view('kasir/navigasi/navigasi_input');?>
<h4>Input Penjualan</h4>
		
		<form action="" class="form-inline" method="post">
		<a href="<?php echo site_url('kasir/load_buku');?>" class="btn btn-info">load buku</a>
			<input type="text" placeholder="pilih buku" readonly="readonly" required="required" value="<?php //echo $judul; ?>" class="form-control">
		<input type="number" max="<?php //echo $stok; ?>" name="jumlah" placeholder="jumlah beli max <?php //echo $stok; ?>" class="form-control">
<input type="submit" name="tambah" value="tambah ke keranjang" class="btn btn-primary">
		</form>
		
		<hr>
		<h4> <span class="glyphicon glyphicon-shopping-cart"></span> Keranjang</h4>
		<table class="table table-bordered">
		<tr>
			<th>No.</th>
			<th>Buku</th>
			<th>PPn</th>
			<th>Diskon</th>
			<th>Harga</th>
			<th>Jumlah</th>
			<th>Jumlah Harga</th>
			<th>Aksi</th>
		</tr>
		<?php /*
			$no = 1;
			$qkera = mysqli_query($koneksi,"SELECT tb_buku.*,tb_kasir.*,tb_keranjang.* FROM tb_keranjang
			INNER JOIN tb_buku ON tb_buku.id_buku=tb_keranjang.id_buku 
			INNER JOIN tb_kasir ON tb_kasir.id_kasir=tb_keranjang.id_kasir");
			while ($data = mysqli_fetch_array($qkera)){ */
		?>
		<?php
		$no=1;
        foreach ($query as $d) { ?>
		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $d->judul; ?></td>
			<td><?php echo $d->ppn; ?></td>
			<td><?php echo $d->diskon; ?></td>
			<td>Rp.<?php echo $d->harga_pokok; ?></td>
			<td><?php echo $d->jumlah; ?></td>
			<td>Rp.<?php echo $d->jumlah_harga; ?></td>
			<td>
				<a onclick="return confirm('akan dihapus ?')" href='<?php echo site_url("tambah_barang/hapus_dtkeranjang/".$d->id_keranjang); ?>' class="btn btn-danger"><span class="glyphicon
				glyphicon-trash"></span></a>
		</tr>
		<?php
			}
		?>
		<tr>
			<th class="text-right" colspan="6">Total Harga</th>
			<td>
			Rp. 
				<?php/*
					$qtotal = mysqli_query($koneksi," SELECT SUM(jumlah_harga) AS total FROM
					tb_keranjang");
					$total = mysqli_fetch_array($qtotal);
					echo number_format($total['total'],2);*/
					//echo number_format($total['jumlah_harga'],2)
					?>
					<?php
					$sum = 0;
		            foreach($query as $row){
		             $sum += str_replace("","", $row->jumlah_harga);
		            }
		            $total = $sum;
		            echo number_format($total);
					?>
			</td>
		</tr>
		</table>
		<!-- BATAS KODE-->
		<?php //echo $tampil;  
		?>

		<?php if($keranjang<=0) {echo "";} else { ?>
		<div class="col-md-4">
			<h1><small>Harga Total</small><br>
				<?php echo "Rp.";
		            echo number_format ($total);
					?>
			</h1>
				<form action="<?php echo site_url('tambah_barang/total_harga');?>" class="form-inline" method="post">
					<input type="number" name="uang" placeholder="masukkan uang pembeli" 
					class="form-control" required="required" min="<?php echo $total; ?>">
					<input type="number" name="uang_harga" style="height: 0; width: 0; border: 0;" readonly required="required" value="<?php echo $total; ?>">
					<input type="submit" name="proses" value="proses" class="btn btn-success">
				</form>
				</div>
				<div class="col-md-4">
				<?php /*
					if(isset($_POST['proses'])){
						$uang = $_POST['uang'];
						$kembali = $uang - $total['total'];
						
						$tanggal = date('Y-m-d');
						mysqli_query($koneksi, "INSERT INTO tb_penjualan(
						id_buku,jumlah,jumlah_harga,id_jual) SELECT id_buku,
						jumlah,jumlah_harga,'$kode_otomatis' from tb_keranjang");
						
						mysqli_query($koneksi,"INSERT INTO tb_jual(id_jual,total,uang,kembali,id_kasir,tanggal) 
						VALUES('$kode_otomatis','$total[total]','$uang','$kembali','$profil[id_kasir]','$tanggal')");*/

						//$no=1;
        				//foreach ($query2 as $q) { 
						?> 



						<!-- INI YANG DIPOTONG-->

							<?php// echo $tampil;?>

						<blockquote>
						<h3>
						
							<SMALL>Uang Pembeli</SMALL>
							Rp. <?php if($query2->total==$total){if($query3<=0){echo "";} else{ echo number_format($query2->uang,2);}} else{echo "";}?>
							</h3>
							<h2>
							<small>Uang Kembali</small>
							Rp. <?php if($query2->total==$total){if($query3<=0){echo "";} else{ echo number_format($query2->kembali,2);}} else{echo "";}?>
							</h2>

							<?php //echo $tampil;?>
							</blockquote>
						<?php //} ?>
		</div>
		<div class="col-md-4">
		<br><br>
		<a href="<?php echo site_url('tambah_barang/hapus_keranjang');?>" class="btn btn-success">Selesai & Bersihkan Keranjang</a>
		<a href="<?php echo site_url('kasir/print_doc'); ?>" class="btn btn-success"><span class="glyphicon glyphicon-print"></span></a>
		</div>

		<?php }?>
	
<?php $this->load->view('kasir/footer');?>