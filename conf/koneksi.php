<?php

//Inisiasi nilai-nilai paramater koneksi
$namaServer = "localhost"; // isikan sesuai nama server Anda
$namaPengguna = "root"; //isikan sesuai nama pengguna Basisdata Anda
$pw = ""; //isikan sesuai password Anda
$nama_db = "kaslen";
//Membuat koneksi
$conn = new mysqli($namaServer, $namaPengguna, $pw, $nama_db);
//memeriksa apakah koneksi sukses dilakukan
if ($conn->connect_error) {
	die("Koneksi gagal : " . $koneksi->connect_error. "<br>");
}
// echo "Koneksi sukses. <br >";
?>

