<?php
	$host = "localhost";
	$user = "755209";
	$pass = "konfirmasi1";
	$db = "755209";
	
	$koneksi = mysql_connect($host,$user,$pass);
	$pilihdb = mysql_select_db($db,$koneksi);
?>