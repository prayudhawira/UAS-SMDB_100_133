<?php
session_start();
include "koneksi.php";
if(!isset($_SESSION['nama'])){
	header("Location: form.php");
}
if(isset($_SESSION['nama'])){
	$nama = $_SESSION['nama'];
}
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title> BIJIKERS INDONESIA : Situs Penjualan Biji-biji Kopi Indonesia</title>
		<link rel="icon" href="logo.jpg">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="biji1.css">
		
	</head>
	<body id="pembuka">
	 <div id="biji1">
		<header>
			<nav>
				<ul>
					<li><a href="index1.php" >HOME</a></li>
					<li><a href="index2.html">PRODUK KAMI</a></li>
					<li><a href="index3.html">TIPS MENGELOLA BIJI</a></li>
				</ul>
			</nav>
		</header>
		<section class="courses">
			<article>
				<figure>
					<img src="bijibiji.jpg" style="height: 100%;width: 100%;float:center"/>
					<href						
				</figure>
				<hgroup>
					<h1>BIJIKERS INDONESIA</h1>
					<br>
					<h2>Situs Penjualan Biji Kopi Indonesia</h2>
					<p>BIJIKERS INDONESIA merupakan situs penjualan biji kopi lokal.
					Kami juga menyediakan berbagai jenis kopi yang dijual di pasar lelang biji kopi. 
					Kami juga menambah stok berbagai jenis kopi setiap bulannya.
					Kami melakukan proses roasting sendiri, 
					sehingga anda bisa memesan tingkat roasted yang anda sukai, apakah medium roast ataukah dark roast.
					Selain itu kami memberikan fasilitas FREE grinder dengan menyesuaikan kebutuhan anda, 
					apakah grinder kasar ataukah grinder halus.</p>
					<p>Untuk melihat produk kopi yang dijual,
					silahkan klik tombol di bawah ini.</p>
					<button><font face="futura"><a href="index2.html"><h2>Lihat Produk Kami ➡</h2></a></font></button>
				</hgroup>
				<br>
				<br>
				<br>
				<br>
				Contact us.
				<p>Untuk pemesanan dan tanya penjual silahkan hubungi kontak dibawah.</p>
				<h4>Whatapp: 082276729702 </h4>
				<h4>Line: @biji_indo </h4>
			</article>  
		</section>			
		<aside>
			<section class="shipping">
				<h2>SHIPPING ALL AROUND INDONESIA.</h2>
				<h3>#Pengiriman Via</h3>
				<p><b>* Pos Indonesia</b></p>
				<p><b>* Jne</b></p>
				<br>
				<h3>#Gratis Biaya Antar</h3>
				<p><b>* Untuk Pembelian di Kota Medan.</b></p>
				<p><b>* Untuk Pembelian Minimal 30 bungkus.</b></p>
				<p><b>* Untuk Pembelian Semua Jenis Kopi sekaligus.</b></p>
			</section>
			
			
		<h2 style="text-align:center">DATA PEGAWAI</h2>
		<a href="tambah.php"><h5 style="text-align:center">Tambah Data Baru</h5></a>
		  <table border="1" width="600px" align="center" style="text-align:center">
			<tr>
			<td> Nama </td>
			<td> Email </td>
			<td> Nomor Hp </td>
			<td> Opsi </td>
			</tr>
			<?php
			include_once 'koneksi.php';
			$data=mysqli_query($koneksi, "select * from pegawai");
			while ($d=mysqli_fetch_array($data)){
			?>
		  
			<tr>   
			<td><?php echo $d['nama']; ?></td>
			<td><?php echo $d['email']; ?></td>
			<td><?php echo $d['nomor']; ?></td>	
			<td>
			<a href="edit.php ?nomor=<?php echo $d['nomor'];?>">edit</a>
			<a href="hapus.php ?nomor=<?php echo $d['nomor'];?>">hapus</a>
			</td>
			</tr>
			
			<?php
			}
			?>
			</table>
		</aside>
		
		<footer>
			&copy; 2020 PT. Biji Indo, Medan
		</footer>
	 </div>	
	</body>
</html>