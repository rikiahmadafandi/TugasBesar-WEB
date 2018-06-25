<?php
include('inc/koneksi.php');
$id_kasir	= $_GET['id_pegawai'];

$sql 	= 'delete from tb_kasir where id_kasir="'.$id_kasir.'"';
$query	= mysqli_query($koneksi,$sql);
header('location:?menu=data_pegawai');
?>