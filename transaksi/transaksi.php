<?php
require "../conf/koneksi.php";
require "../conf/transaksi.php";


session_start();

if (isset($_POST["submit"])){
	
	if($_POST["nama"]==="Username tidak ada !"){
		echo "<script>alert('Username tidak ditemukan')</script>";
		header("Location: ../dashboard/dashboard.php");
	}else{
		$error = transaksi($_POST);
		if ($error===-1){
		echo "<script>alert('Data baru berhasil ditambahkan')</script>";
		header("Location: ../dashboard/dashboard.php");
		}else{
		echo "<script>alert('Terjadi kesalahan pada server')</script>";
		header("Location: ../dashboard/dashboard.php");
		}
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
						<h2>Form Transaksi</h2>
					
					</div>
                    <form action="" method="post" id="userInfo">
				<div class="user-details">
					<div class="input-box">
						<span class="form-details">Username</span>
						<input type="text" placeholder="Masukkan Username" name="username" id="username" required onchange="searchNama()"/>
					</div>
					<div class="input-box">
						<span class="form-details">Nama Lengkap</span> <span class="fas" id="check" style="color:red"></span>
						<input readonly type="text" value="Username tidak ditemukan !" name="nama" id="nama"  />
					</div>
					
					<div class="input-box">
						<span class="form-details">Jenis Transaksi</span>
						<select name="jenis" id="jenis" onchange="gantiSelect()" required>
                            <option value="">Pilih </option>
                            <option value="pemasukan">Pemasukan</option>
                            <option value="penarikan">Penarikan</option>
                        </select>
					</div>
					<div class="input-box">
						<span class="form-details">Jumlah</span>
						<input readonly type="text" placeholder="Jumlah" name="jumlah" id="jumlah" required/>
					</div>
					<div class="input-box">
						<span class="form-details">Tanggal</span>
						<input type="date" name="tanggal" id="tanggal"  required/>
					</div>
					<div class="input-box">
						<span class="form-details">Deskripsi</span>
						<input readonly type="text" placeholder="Deskripsi Singkat" name="deskripsi" id="deskripsi" required/>
					</div>
                    <input type="submit" value="Submit" name="submit">
				</div>
			</form>
				</div>
					</div>
		</main>

		<script src="script.js"></script>
	</body>
</html>
