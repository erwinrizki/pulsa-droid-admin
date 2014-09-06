<?php
	include "koneksi.php";
	
	$id = $_GET['id'];
	$hapus = "DELETE FROM data_toko WHERE id_toko='$id';";
	$queryhapus = mysql_query($hapus);
	if($queryhapus) {
		echo "<script>alert('Data Berhasil Dihapus');location.replace('daftartoko.php');</script>";
	} else {
		echo "<script>alert('Data Gagal Dihapus');location.replace('daftartoko.php');</script>";
	}
?>