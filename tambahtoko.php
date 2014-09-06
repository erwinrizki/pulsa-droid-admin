<?php
	include "koneksi.php";
	
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$lat = $_POST['lat'];
	$long = $_POST['long'];
	
	$tambah = "INSERT INTO data_toko VALUES(null,'$nama','$alamat','$lat','$long');";
	$querytambah = mysql_query($tambah);
	
	if($querytambah) {
		echo "<script>alert('Data Berhasil Ditambahkan');location.replace('daftartoko.php');</script>";
	} else {
		echo "<script>alert('Data Gagal Ditambahkan');location.replace('inputdatatoko.php');</script>";
	}
?>