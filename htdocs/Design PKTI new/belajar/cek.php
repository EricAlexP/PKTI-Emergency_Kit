<?php
include 'connection.php';
$cek = $_POST['submit'];

if ($cek == "Sign up") {
	$userName = $_POST['user'];
	$email = $_POST['email'];
	$pass = $_POST['password'];

	$query = mysqli_query($conn, "SELECT * FROM tbluser WHERE email='$email' ");
	$status = mysqli_num_rows($query);
	
	if($status == 0)
	{
		$masuk = mysqli_query($conn, "INSERT INTO tbluser(nama,email,password) VALUES('$userName','$email','$pass') ");
		echo '<script type="text/javascript">alert("Register Success Bray");</script>';
		header("location:index3.php#tologin");
	}
	else
	{
		echo '<script type="text/javascript">alert("Email Sudah dipakai");</script>';
		echo '<script type="text/javascript">history.back()</script>';
	}
}
?>
