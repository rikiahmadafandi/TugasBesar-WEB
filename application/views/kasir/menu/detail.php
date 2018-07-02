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