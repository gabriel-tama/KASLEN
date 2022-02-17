<?php
require '../conf/register.php';


session_start();

if (isset($_SESSION["login"])){
	header("Location: ../dashboard/dashboard.php");
}

if(isset($_POST["register"])){
	$error= registrasi($_POST);
	if ($error===-1){
		$_SESSION["username"] = $_POST["username"];
		echo "<script>alert('User baru telah dibuat.')</script>";
		header("Location: ../dashboard/dashboard.php");
	}
}



?>




<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<link rel="stylesheet" href="style.css" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>KAS-LEN 💸💸💸</title>
	</head>
	<body>
		<h1 class="header">KAS-LEN</h1>

		<h3>Atur uang anda dengan cermat 💸💸💸</h3>
		<div class="center">
			<h1>Daftar</h1>
			<h3 style="color:red">
			<?php if(isset($_POST["register"])){
				if($error !==-1){
					echo $error;
				}
				
			}?></h3>
			<form action="" method="post">
				<div class="txt_field">
					<input type="text" name="nama" required placeholder="Nama Lengkap" />
				</div>
				<div class="txt_field">
					<input type="text" name="alamat" required placeholder="Alamat" />
				</div>
				<div class="txt_field">
					<input type="text" name="nomorhp" required placeholder="Nomor HP" />
				</div>

				<div class="txt_field">
					<input type="text" name="username" required placeholder="Username" />
				</div>
				<div class="txt_field">
					<input type="password" name="password" required placeholder="Password" />
				</div>
				<div class="txt_field">
					<input type="password" name="cpassword" required placeholder="re-Password" />
					<!-- <label>Password</label> -->
				</div>
				
				<input type="submit" value="Daftar" name="register" />
			</form>
		</div>
	</body>
</html>
