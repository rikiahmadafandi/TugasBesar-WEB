<?php
//	$id_jual = $_GET['id_jual'];
//	$q = mysqli_query($koneksi,"SELECT tb_jual.*,tb_kasir.* FROM tb_jual 
//	INNER JOIN tb_kasir ON tb_kasir.id_kasir=tb_jual.id_kasir WHERE id_jual='$id_jual'");
//	$d = mysqli_fetch_array($q);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  
</head>
<center>//
<h1>Toko Buku</h1>
</center>
	
	<div class="row">
	<div style="width: 45%; float: left;">
	<table class="table table-condensed">
		<tr>
			<th>Kode Penjualan</th> <td><?php echo $query2 ->id_jual; ?></td>
		</tr>
		<tr>
			<th>Kasir</th> <td><?php echo $query2->nama; ?></td>
		</tr>
		<tr>
			<th>Tanggal</th> <td><?php echo $query2->tanggal; ?></td>
		</tr>
			</table>
		</div>
		
	<div style="width: 45%; float: left; margin-left: 5%;">
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
		//	$no = 1;
		//	$qbuku = mysqli_query($koneksi,"SELECT tb_penjualan.*,tb_buku.*
		//			FROM tb_penjualan
		//			INNER JOIN tb_buku ON tb_buku.id_buku=tb_penjualan.id_buku WHERE id_jual='$id_jual'");
		//	while ($data = mysqli_fetch_array($qbuku)){

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
			
	</div>
	
</body>
</html>
<script type="text/javascript">
window.print();
</script>