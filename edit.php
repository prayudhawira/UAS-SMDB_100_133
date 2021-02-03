<html>
<body>
<?php
		include('koneksi.php');
		$nomor = $_GET['nomor'];
		$show = mysqli_query($koneksi, "select * from pegawai where nomor = '$nomor'");
		if(mysqli_num_rows($show) == 0)
		{
			echo '<script>window.history.back()</script>';
		}
		else
		{
			$d = mysqli_fetch_assoc($show);
		}
	?>
	
	<form action="edit_proses.php" method="post">
		<input type="hidden" name="nomor" value="<?php echo $nomor; ?>">
		<p></p>
		
		<table align="center">	
			<tr>
				<td>NAMA</td>
				<td>:</td>
				<td>
					<input class="form-control" type="text" name="nama" size="33" value="<?php echo $d['nama']; ?>" required>
				</td>
			</tr>
			
			<tr>
				<td>EMAIL</td>
				<td>:</td>
				<td>
					<input class="form-control" type="text" name="email" size="33" value="<?php echo $d['email'];?>" required>
				</td>
			</tr>
			
			<tr>
				<td>NOMOR HP</td>
				<td>:</td>
				<td>
					<input class="form-control" type="text" name="nomor" size="33" value="<?php echo $d['nomor'];?>" required>
				</td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td></td>
				<td><input class="btn btn-success" type="submit" name="Simpan" value="Simpan"></td>
			</tr>
		</table>
	</form>
</body>
</html>