<?php
$serverName = "localhost";
$userName = "root";
$Password = "";
$dbName = "examdb";
$link=mysqli_connect($serverName,$userName,$Password,$dbName);
mysqli_set_charset($link,"UTF-8");
?>