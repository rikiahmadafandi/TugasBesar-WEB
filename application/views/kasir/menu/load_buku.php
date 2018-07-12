<?php $this->load->view('kasir/header');?>
<?php $this->load->view('kasir/navigasi/navigasi_input');?>
<h2>Pilih Buku</h2>
	<div class="col-md-6">
		<table class="table table-bordered" border="5" id="data_tabel">
		<thead>
			<tr>Nama</tr>
			<tr>Stok</tr>
			<tr>Tindakan</tr>
		</thead>
		<tbody>
		<?php  
		 foreach ($query as $d) { ?>
			<tr class="success">
			<td class="warning"><?php echo $d->judul; ?></td>
			<td class="warning"><?php echo $d->stok; ?></td>
			<td><a class="btn btn-sm btn-block btn-warning" href="<?php echo site_url('kasir/input_barang/'.$d->id_buku); ?>">
			Pilih</a></td>
			</tr>
			<?php
		}
		?>
		</tbody>
		</table>
		<?php $this->load->view('kasir/footer');?>

<script type="text/javascript">
$(document).ready(function(){
    $('#data_tabel').DataTable( {
        "scroolX"           : true,
        "scrollCollapse"    : true,
        "paging"            : true,
    } );        
});
</script>