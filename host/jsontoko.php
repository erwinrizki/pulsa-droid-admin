<?php
	include "koneksi.php";
	
	$daftar = "SELECT * FROM data_toko";
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