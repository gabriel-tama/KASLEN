<?php
require 'koneksi.php';

function registrasi($data){
    global $conn;

    $username= strtolower(stripslashes($data["username"]));
    $nama = $data["nama"];
    $alamat = $data["alamat"];
    $nomorhp = $data["nomorhp"];
    $password= mysqli_real_escape_string($conn,$data["password"]);
    $cpassword= mysqli_real_escape_string($conn,$data["cpassword"]);
    $error = "";
    $result = mysqli_query($conn,"SELECT username from users WHERE username = '$username'");

    if (mysqli_fetch_assoc($result)){
        // echo "<script>alert('Username telah ada');</script>";
        $error = "Username telah ada";
        // echo $error;
        return $error;
    }

    if ($password!==$cpassword){
        // echo "<script>alert('konfirmasi password salah')</script>";
        $error= "Konfirmasi password salah";
        return $error;
    }
    $password = password_hash($password,PASSWORD_DEFAULT);
    mysqli_query($conn,"INSERT INTO users VALUES ('','$username','$password','$nama','$alamat','$nomorhp');");
    return -1;
}

?>