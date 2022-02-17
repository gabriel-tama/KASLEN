<?php
require 'koneksi.php';


function search($keyword){
    global $conn;
    $query = "SELECT nama,alamat,nomorhp FROM users WHERE nama LIKE '%$keyword%'";
    $found = mysqli_query($conn,$query);
    $rows=[];
    while($row= mysqli_fetch_assoc($found)){
        $rows=[$row];
    }
    return $rows;
}

?>