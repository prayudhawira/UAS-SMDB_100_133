<?php

if(isset($_POST['Simpan']))
{
	include('koneksi.php');
	$nama		= $_POST['nama'];
	$email		= $_POST['email'];
	$nomor		= $_POST['nomor'];
	$update		= mysqli_query($koneksi, "update pegawai set
	
	nama		= '$nama',
	email		= '$email'
	
	where nomor	= '$nomor'")
	
	or die(mysqli_error());
	
	if($update)
	{
		echo "<h2>Update Successed</h2>";
		echo "<script>window.location = 'index1.php'</script>";
	}
	else
	{
		echo "<h2>Update Failed</h2>";
		echo "<a href = 'edit.php ?nomor = ".$nomor."'>Back</a>";
	}
}

else
{
	echo "<script>window.history.back()</script>";
}

?>