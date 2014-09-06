<?php
	include "koneksi.php";
	
	$daftar = "SELECT * FROM data_agen";
	$querydaftar = mysql_query($daftar);
	$isi = array();
	
	while($hasil = mysql_fetch_assoc($querydaftar)) {
		$isi[] = $hasil;
	}
	$data = "{agen: " .json_encode($isi). "}";
	echo $data;
?>