<?php
// require "query.php";
require "koneksi.php";
function transaksi($data){
    global $conn;

    $username= strtolower(stripslashes($data["username"]));
    $jenis = ($data["jenis"]==="pemasukan") ? 1 : 2;
    $jumlah = (int)$data["jumlah"];
    $tanggal = $data["tanggal"];
    $deskripsi = $data["deskripsi"];

    mysqli_query($conn,"INSERT INTO transaksi VALUES('',(SELECT user_id FROM users WHERE username='$username'),'$tanggal','$jenis','$jumlah','$deskripsi');");
    return -1;
}



?>