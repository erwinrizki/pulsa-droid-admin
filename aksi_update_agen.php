<?php
	include "koneksi.php";
	
	$id = $_POST['idagen'];
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$nomer = $_POST['nomer'];
	
	$tambah = "UPDATE data_agen SET nama_agen='$nama', alamat_agen='$alamat', nomer_hp='$nomer' WHERE id_agen='$id'";
	$querytambah = mysql_query($tambah);
	
	if($querytambah) {
		echo "<script>alert('Data Berhasil Diupdate');location.replace('daftaragen.php');</script>";
	} else {
		echo "<script>alert('Data Gagal Diupdate');location.replace('daftaragen.php');</script>";
	}
?>