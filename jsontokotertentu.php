<?php
	include "koneksi.php";
	
	$idtoko = $_GET['id'];
	$daftar = "SELECT * FROM data_toko WHERE id_toko = '$idtoko'";
	$querydaftar = mysql_query($daftar);
	$isi = array();
	
	while($hasil = mysql_fetch_assoc($querydaftar)) {
		$isi[] = $hasil;
	}
	$data = "{data_toko: " .json_encode($isi). "}";
	echo $data;
	//json_encode($isi);
	//print(json_encode($isi));
?>