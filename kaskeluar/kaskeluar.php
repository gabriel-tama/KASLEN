<?php

require '../conf/koneksi.php';
// require '../conf/search.php';

session_start();
if (!isset($_SESSION["login"])){
	header("Location: ../login/index.php");
}

$result= mysqli_query($conn,"SELECT * from transaksi WHERE tipe=2");
$rows= [];
while($row = mysqli_fetch_assoc($result)){
	$rows[]=$row;
}
// var_dump($rows);

$jumlahDataPerHalaman = 6;
$jumlahData = count($rows);
$jumlahHalaman = ceil($jumlahData / $jumlahDataPerHalaman);
$halamanAktif = (isset($_GET["halaman"])) ? $_GET["halaman"] : 1;
$awalData = ($jumlahDataPerHalaman * $halamanAktif) - $jumlahDataPerHalaman;

$result_ = mysqli_query($conn,"SELECT tanggal,tipe,jumlah,nama,deskripsi from transaksi JOIN users ON transaksi.user_id = users.user_id WHERE tipe=2  ORDER BY tanggal DESC LIMIT $awalData,$jumlahDataPerHalaman");
$rows= [];

while($row = mysqli_fetch_assoc($result_)){
	$rows[]=$row;
}

if (isset($_POST["search"])){
	$keyword = $_POST["keyword"];
	$result= mysqli_query($conn,"SELECT tanggal,tipe,jumlah,nama,deskripsi from transaksi JOIN users ON transaksi.user_id = users.user_id WHERE tipe=2 AND nama LIKE '%$keyword%' ORDER BY tanggal DESC LIMIT $awalData,$jumlahDataPerHalaman");
	$rows= [];

while($row = mysqli_fetch_assoc($result)){
	$rows[]=$row;
	}
}


?>




<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="style.css" type="text/css" />
		<link rel="preconnect" href="https://fonts.googleapis.com" />
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
		<link
			href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300&display=swap"
			rel="stylesheet"
		/>

		<script
			src="https://kit.fontawesome.com/ca568a90c1.js"
			crossorigin="anonymous"
		></script>
		<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
		<title>Document</title>
	</head>
	<body>
		<?php include "../navbar/navbar.php"?>
		<main>
			 <div class="dashboard-container">
				

				<div class="card detail">
					<div class="detail-header">
						<h2>Kas Keluar</h2>
						<div class="search-container">
				<form action="" method="post">
					<input type="text" placeholder="Cari Nama" name="keyword" />
					<button type="submit" name="search"><i class="fa fa-search"></i></button>
				</form>
				</div>
				
					</div>
					<table>
						<tr>
							<th>No.</th>
							<th>Nama</th>
							<th>Jenis</th>
							<th>Tanggal</th>
							<th>Jumlah</th>
							<th>Deskripsi</th>
						</tr>
							<?php $idx = 1;?>
					<?php 
					// $idx=1;
					foreach($rows as $data): ?>
					<tr>
						<td><?= $idx ?></td>
						<td><?= $data["nama"]; ?></td>
						<td>Penarikan</td>
						<td><?= $data["tanggal"]; ?> </td>
						<td><?= $data["jumlah"]; ?></td>
						<td><?= $data["deskripsi"]?></td>
					</tr>
					<?php $idx++; ?>
					<?php endforeach; ?>
					
					</table>
					<?php if($jumlahHalaman>1) : ?>
					<div class="pagination">
						<?php if($halamanAktif>1) : ?>
						<a href="?halaman=<?=$halamanAktif-1; ?>"> <span class="fas fa-less-than left"></span></a>
						<?php endif; ?>
						<p>Page <?=$halamanAktif ?></p>
						<?php if($halamanAktif<$jumlahHalaman): ?>
						<a href="?halaman=<?=$halamanAktif+1; ?>"> <span class="fas fa-greater-than right"></span></a>
						<?php endif;?>
					</div> 
					<?php endif;?>
				</div>
				
			</div>
		</main>

	</body>
</html>
