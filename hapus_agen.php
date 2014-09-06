<?php
	include "koneksi.php";
	
	$id = $_GET['id'];
	$hapus = "DELETE FROM data_agen WHERE id_agen='$id';";
	$queryhapus = mysql_query($hapus);
	if($queryhapus) {
		echo "<script>alert('Data Berhasil Dihapus');location.replace('daftaragen.php');</script>";
	} else {
		echo "<script>alert('Data Gagal Dihapus');location.replace('daftaragen.php');</script>";
	}
?>