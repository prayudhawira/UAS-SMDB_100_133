<?php
session_start();
include ('koneksi.php');
$nama=$_POST['nama'];
$password=$_POST['password'];
$query=mysqli_query($koneksi, "select*from admin where nama = '$nama' and password = '$password'");

$xxx=mysqli_num_rows($query);
if ($xxx==TRUE){
	$_SESSION['nama']=$nama;
	header("location:index1.php");
}
else{
	echo"<script>alert('Tidak dapat masuk. Pastikan nama atau password anda benar!'); location ='form.php';</script>";
}

?>