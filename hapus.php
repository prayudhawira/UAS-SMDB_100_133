<?php
		if (isset($_GET['nomor'])){
			include('koneksi.php');
			$nomor	= $_GET['nomor'];
			$cek	= mysqli_query($koneksi, "select nomor from pegawai
			where nomor= '$nomor'")
			or die(mysqli_error());
			
			if(mysqli_num_rows($cek)==0)
			{
				echo "<script>window.history.back()</script>";
			}
			else
			{
				$del = mysqli_query($koneksi, "delete from pegawai
				where nomor = '$nomor'");
				
				if($del)
				{
					echo "<h3>Delete Successed</h3>";
					echo "<script>window.location = index1.php';</script>";
				}
				else
				{
					echo "<h2>Delete Failed</h2>";
					echo "<a href = 'index1.php'>Back</a>";
				}
			}
		}
		else
		{
			echo "<script>window. history.back()</script>";
		}
	?>