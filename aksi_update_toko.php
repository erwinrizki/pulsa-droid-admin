<?php
	include "koneksi.php";
	
	$id = $_POST['idtoko'];
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$lat = $_POST['lat'];
	$long = $_POST['long'];
	
	$tambah = "UPDATE data_toko SET nama_toko='$nama', alamat_toko='$alamat', latitude_toko='$lat', 
				longitude_toko='$long' WHERE id_toko='$id'";
	$querytambah = mysql_query($tambah);
	
	if($querytambah) {
		echo "<script>alert('Data Berhasil Diupdate');location.replace('daftartoko.php');</script>";
	} else {
		echo "<script>alert('Data Gagal Diupdate');location.replace('daftartoko.php');</script>";
	}
?>