<?php
$dbhost 	= "localhost";
$dbuser		= "root";
$dbpassword	= "";
$dbname		= "kopi";
$koneksi	= mysqli_connect($dbhost,$dbuser,$dbpassword)
or die("koneksi ke database gagal");
mysqli_select_db($koneksi,$dbname) or die ("Database tidak tersedia");
?>