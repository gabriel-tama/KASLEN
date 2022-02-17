<?php

require "../conf/query.php";

$keyword = $_GET["keyword"];
$result = query("SELECT nama FROM users WHERE username='$keyword'");

if (!empty(($result))){
    echo $result[0]["nama"];
}else{
    echo "error";
}
?>


					