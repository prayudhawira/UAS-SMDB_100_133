<?php

	if(isset($_POST['Tambah']))
	{
		include_once 'koneksi.php';
		$nama	= $_POST['nama'];
		$email	= $_POST['email'];
		$nomor	= $_POST['nomor'];
		
		$input	= mysqli_query($koneksi, "insert into pegawai values
		('$nama', '$email', '$nomor')");
		
		if($input)
		{
			echo "<h3>Insert Successed</h3>";
			echo "<script>window.location='index1.php'</script>";
		}
		else
		{
			echo "Insert Failed";
			echo "<a href = 'tambah.php'>Back</a>";
		}
	}
	else
	{
		echo "<script>window.history.back()</script>";
	}

?>