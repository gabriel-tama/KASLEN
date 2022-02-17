<?php
require '../conf/koneksi.php';

session_start();
if (!isset($_SESSION["login"])){
	header("Location: ../login/login.php");
}

$nav_class= "active";
$current= substr($_SERVER["REQUEST_URI"],8,-1);
$rows=[];

$result = mysqli_query($conn, "SELECT COUNT(username) as anggota FROM users");

while($row = mysqli_fetch_assoc($result)){
	$rows[]=$row;
}

$result = mysqli_query($conn, "SELECT SUM(jumlah) as masuk FROM transaksi WHERE tipe=1");
while($row = mysqli_fetch_assoc($result)){
	$rows[]=$row;
}
$result = mysqli_query($conn, "SELECT SUM(jumlah) as keluar FROM transaksi WHERE tipe=2");
 while($row = mysqli_fetch_assoc($result)){
	$rows[]=$row;
}

$data=[];

$result = mysqli_query($conn, "SELECT tanggal,tipe,jumlah,nama from transaksi JOIN users ON transaksi.user_id = users.user_id ORDER BY tanggal ASC LIMIT 5");
 while($row = mysqli_fetch_assoc($result)){
	$data[]=$row;
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
		<link
			href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300&display=swap"
			rel="stylesheet"
		/>
        <link rel="stylesheet" href="../view/style.css">
		<script
			src="https://kit.fontawesome.com/ca568a90c1.js"
			crossorigin="anonymous"
		></script>
		<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <title>Document</title>
</head>
<body>
    <?php include "../navbar/navbar.php" ?>
    <main>
			<div class="dashboard-container">
				<div class="card total1">
					<div class="info">
						<div class="info-detail">
							<h3>Kas Masuk</h3>
							<p>Total Pemasukan</p>
							<h2>Rp.<?php echo $rows[1]["masuk"] ?>,00</h2>
						</div>
						<div class="info-image">
							<i class="fas fa-dollar-sign"></i>
						</div>
					</div>
				</div>

				<div class="card total2">
					<div class="info">
						<div class="info-detail">
							<h3>Kas Keluar</h3>
							<p>Total Pengeluaran</p>
							<h2>Rp.<?php echo $rows[2]["keluar"] ?>,00</h2>
						</div>
						<div class="info-image">
							<i class="fas fa-money-check-alt"></i>
						</div>
					</div>
				</div>
				<div class="card total3">
					<div class="info">
						<div class="info-detail">
							<h3>Anggota</h3>
							<p>Anggota Terdaftar</p>
							<h2><?php echo $rows[0]["anggota"] ?> <span>Orang</span></h2>
						</div>
						<div class="info-image">
							<i class="fas fa-users"></i>
						</div>
					</div>
				</div>
				<div class="card total4">
					<div class="info">
						<div class="info-detail">
							<h3>Saldo</h3>
							<p>Saldo saat ini</p>
							<h2>Rp.<?php echo $rows[1]["masuk"]-$rows[2]["keluar"] ?>,00</h2>
						</div>
						<div class="info-image">
							<i class="fas fa-balance-scale-right"></i>
						</div>
					</div>
				</div>

				<div class="card detail">
					<div class="detail-header">
						<h2>Transaksi Terakhir</h2>
					</div>
					<table>
						<tr>
							<th>No.</th>
							<th>Nama</th>
							<th>Jenis</th>
							<th>Jumlah</th>
							<th>Tanggal</th>
						</tr>
						<?php $idx = 1;?>
					<?php 
					// $idx=1;
					foreach($data as $dt): ?>
					<tr>
						<td><?= $idx ?></td>
						<td><?= $dt["nama"]; ?></td>
						<td><?= $dt["tipe"]===1 ? "Pemasukan" : "Pengeluaran"?></td>
						<td><?= $dt["tanggal"]; ?> </td>
						<td><?= $dt["jumlah"]; ?></td>
					</tr>
					<?php $idx++; ?>
					<?php endforeach; ?>
						
					</table>
				</div>
				<div class="card customer">
					<div class="detail-header">
						<h2>Grafik Pendapatan</h2>
					</div>
					<?php include '../view/chart.php' ?>
				</div>
			</div>
		</main>

		<!-- <script src="../view/script.js"></script> -->
    
</body>
</html>