<?php 
$server = "localhost";
$user = "root";
$pass = "";
$dBase = "keuangan";
$conn = mysqli_connect($server,$user,$pass,$dBase);

if (!$conn) {
    die("Connection failed: ".mysqli_connect_error());
}

// $conn = mysqli_connect("localhost", "root", "", "keuangan");

// if (mysqli_connect_errno()) {
// 	echo "Failed to Connect to MySQL : ".mysqli_connect_error();
// }
?>