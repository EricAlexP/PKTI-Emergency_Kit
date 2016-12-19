<?php 
$server = "localhost";
$user = "root";
$pass = "";
$dBase = "belajar";
$conn = mysqli_connect($server,$user,$pass,$dBase);

if (!$conn) {
    die("Connection failed: ".mysqli_connect_error());
}

?>