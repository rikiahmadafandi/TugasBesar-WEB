<?php $this->load->view('kasir/header');?>
<?php $this->load->view('kasir/navigasi/navigasi_input');?>
<h4>Input Penjualan</h4>   
		
		<form class="form-inline" method="post" action="<?php echo site_url('tambah_barang/keranjang');?>">
		<a href="<?php echo site_url('kasir/load_buku');?>" class="btn btn-info">load buku</a>
			<input type="text" placeholder="pilih buku" readonly="readonly" required="required" value="<?php echo $judul; ?>" class="form-control">
		<input type="number" max="<?php echo $stok; ?>" name="jumlah" placeholder="jumlah beli max <?php echo $stok; ?>" class="form-control">
		<input type="number" style="height: 0px; width: 0px; border: 0px;" name="stok" value="<?Php echo $stok;?>" class="" readonly>
		<input type="text" style="height: 0px; width: 0px; border: 0px;" name="id_buku" readonly="readonly" required="required" value="<?php echo $id_buku; ?>">
		<input type="text" style="height: 0px; width: 0px; border: 0px;" name="harga_pokok" readonly="readonly" required="required" value="<?php echo $harga_pokok; ?>">
<input type="submit" name="tambah" value="tambah ke keranjang" class="btn btn-primary">
		</form>
		?>
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
				<?php
		            echo number_format($total);
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
						<blockquote>
						<h3>
						
							<SMALL>Uang Pembeli</SMALL>
							Rp. <?php if($query2->total==$total){if($query3<=0){echo "";} else{ echo number_format($query2->uang,2);}} else{echo "";}?>
							</h3>
							<h2>
							<small>Uang Pembeli</small>
							Rp. <?php if($query2->total==$total){if($query3<=0){echo "";} else{ echo number_format($query2->kembali,2);}} else{echo "";}?>
							</h2>

							<?php //echo $tampil;?>
							</blockquote>
						<?php //} ?>
		</div>
		<div class="col-md-4">
		<br><br>
		<a href="<?php echo site_url('tambah_barang/hapus_keranjang');?>" class="btn btn-success">Selesai & Bersihkan Keranjang</a>
		<a href="<?php echo site_url('kasir/print_doc');?>" class="btn btn-success"><span class="glyphicon glyphicon-print"></span></a>
		</div>

		<?php }?>
	
<?php $this->load->view('kasir/footer');?>