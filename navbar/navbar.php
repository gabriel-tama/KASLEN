<?php
// session_start();
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
		<link rel="stylesheet" href="style.css">

		<script
			src="https://kit.fontawesome.com/ca568a90c1.js"
			crossorigin="anonymous"
		></script>
    <title>Document</title>
</head>
<body>
    <nav class="navbar">
			<h3>Kas-Len</h3>
			<div class="profile">
				<img
					src="https://picsum.photos/200/200?random=1"
					alt=""
					class="profile-image"
				/>
				<p class="profile-name"><?php 
						if(isset($_SESSION["nama"])){
							echo "Selamat Datang " . $_SESSION["nama"]." ! ";
						}else{
							echo "Administrator";
						}
					
					?></p>
			</div>
		</nav>

		<input type="checkbox" name="" id="toggle" />
		<label for="toggle" class="side-toggle">
			<span class="fas fa-bars"></span>
		</label>

		<div class="sidebar">
			<div class="sidebar-menu">
				<a href="../dashboard/dashboard.php">
					<span class="fas fa-chalkboard"></span>
					<p>Dashboard</p>
				</a>
			</div>
			<div class="sidebar-menu">
				<a href="../dataanggota/dataanggota.php">
					<span class="fas fa-users"></span>
					<p href="#">Data Anggota</p>
				</a>
			</div>
			<div class="sidebar-menu">
				<a href="../saldo/saldo.php">
					<span class="fas fa-chart-line"></span>
					<p href="#">Saldo</p>
				</a>
			</div>
			<div class="sidebar-menu">
				<a href="../kasmasuk/kasmasuk.php">
					<span class="fas fa-credit-card"></span>
					<p href="#">Kas Masuk</p>
				</a>
			</div>
			<div class="sidebar-menu">
				<a href="../kaskeluar/kaskeluar.php">
					<span class="fas fa-piggy-bank"></span>
					<p href="#">Kas Keluar</p>
				</a>
			</div>
			<?php if($_SESSION["username"]==="uii") :?>

			<div class="sidebar-menu">
				<a href="../transaksi/transaksi.php">
					<span class="fas fa-clipboard-list"></span>
					<p href="#">Transaksi</p>
				</a>
			</div>
			<?php endif; ?>

			<div class="sidebar-menu logout" id="logout">
				<a href="../logout/logout.php">
					<span class="fas fa-power-off"></span>

					<p>Logout</p>
				</a>
			</div>
		</div>

    
</body>
</html>