<?php
require '../conf/koneksi.php';

session_start();

if (isset($_SESSION["login"])){
	header("Location: ../dashboard/dashboard.php");
}

if(isset($_POST["login"])){
	$username= $_POST["username"];
	$password = $_POST["password"];
    
	$result = mysqli_query($conn,"SELECT * FROM users WHERE username = '$username'");


	if (mysqli_num_rows($result)===1){
		$row = mysqli_fetch_assoc($result);
		if(password_verify($password,$row["password"])){
			$_SESSION["login"]=true;
			$_SESSION["nama"] = $row["nama"];
            $_SESSION["username"] = $row["username"];
            header("Location: ../dashboard/dashboard.php");
			exit;
		}
	}
	$error = true;

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
			<h1>Login</h1>
			<h3 style="color:red">
			<?php 
			if (isset($error)){
				echo "Username atau password salah";
			}
			?>
			</h3>
			<form action="" method="post">
				<div class="txt_field">
					<input type="text" required placeholder="Username" name="username" />
					<!-- <label>Username</label> -->
				</div>
				<div class="txt_field">
					<input type="password" required placeholder="Password" name="password" />
					<!-- <label>Password</label> -->
				</div>
				<!-- <button type="submit" name="login">Login</button> -->
				<input type="submit" value="Login" name="login" />
				<div class="signup_link">Belum Mendaftar? <a href="../signup/signup.php">Signup</a></div>
			</form>
		</div>
	</body>
</html>
