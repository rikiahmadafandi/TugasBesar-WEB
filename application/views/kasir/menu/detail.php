<?php $this->load->view('kasir/header');?>
<?php $this->load->view('kasir/navigasi/navigasi_penjualan');?>
<h4>Detail Penjualan</h4>
	<div class="row">
	<div class="col-md-4">
	<table class="table table-condensed">
		<tr>
			<th>Kode Penjualan</th> <td><?php echo $query2->id_jual; ?></td>
		</tr>
		<tr>
			<th>Kasir</th> <td><?php echo $query2->nama; ?></td>
		</tr>
		<tr>
			<th>Tanggal</th> <td><?php echo $query2->tanggal; ?></td>
		</tr>
			</table>
		</div>

		<div class="col-md-4">
	<table class="table table-condensed">
		<tr>
			<th>Total Harga</th> <td>Rp.<?php echo number_format($query2->total,2); ?></td>
		</tr>
		<tr>
			<th>Uang Pembali</th> <td>Rp.<?php echo number_format($query2->uang,2); ?></td>
			</tr>
		<tr>
			<th>Uang Kembali</th> <td>Rp.<?php echo number_format($query2->kembali,2); ?></td>
		</tr>
	</table>
	</div>
	</div>
	<div class="row">
		<table class="table table-bordered">
		<tr>
			<th>No.</th>
			<th>Buku</th>
			<th>PPn</th>
			<th>Diskon</th>
			<th>Harga</th>
			<th>Jumlah</th>
			<th>Jumlah Harga</th>
			</tr>
		<?php

		$no=1;
        foreach ($query3 as $d) { 
		?>

		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $d->judul; ?></td>
			<td><?php echo $d->ppn; ?></td>
			<td><?php echo $d->diskon; ?></td>
			<td>Rp.<?php echo $d->harga_pokok; ?></td>
			<td><?php echo $d->jumlah; ?></td>
			<td>Rp.<?php echo $d->jumlah_harga; ?></td>
			</tr>
		<?php
			}
		?>
		<tr>
			<th class="text-right" colspan="6">Total Harga</th>
			<td>
				Rp.<?php echo number_format($query2->total,2); ?></td>
		</tr>
		</table>
			<center>
				<a href="<?php echo site_url('kasir/data_penjualan');?>" class="btn btn-success">Kembali</a>
				<a href="<?php echo site_url('kasir/detail_print/'.$query2->id_jual); ?>" class="btn btn-primary"><span class="glyphicon 
				glyphicon-print"></span></a>
			</center>
	</div>
	
<?php $this->load->view('kasir/footer');?>