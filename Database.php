<?php
$dbHost = "localhost";
$dbUser = "root"; 
$dbPass = ""; 
$dbDatabase = "enzo"; 

$db = mysqli_connect("$dbHost", "$dbUser", "$dbPass", "$dbDatabase") or die ("koneksi gagal");
?>