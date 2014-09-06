<?php
	include "koneksi.php";
	
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$nomer = $_POST['nomer'];
	
	$tambah = "INSERT INTO data_agen VALUES(null,'$nama','$alamat','$nomer');";
	$querytambah = mysql_query($tambah);
	
	if($querytambah) {
		echo "<script>alert('Data Berhasil Ditambahkan');location.replace('daftaragen.php');</script>";
	} else {
		echo "<script>alert('Data Gagal Ditambahkan');location.replace('inputdataagen.php');</script>";
	}
?>