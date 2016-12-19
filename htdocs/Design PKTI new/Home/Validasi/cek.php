<?php
include 'connection.php';
$cek = $_POST['submit'];

if ($cek == "Sign up") {
	$username = $_POST['username'];
	$email = $_POST['email'];
	$pass = $_POST['password'];
	$con_pass = $_POST['con_password'];

	$query = mysqli_query($conn, "SELECT * FROM user_regis WHERE username='$username' ");
	$status = mysqli_num_rows($query);
	
	if($status == 0)
	{
		$masuk = mysqli_query($conn, "INSERT INTO user_regis(username,email,password,con_password) VALUES('$username','$email','$pass' , '$con_pass') ");
		echo '<script type="text/javascript">alert("Register Success Bray");</script>';
		header("location:../LoginRegistrationForm/LoginAndRegis.php#tologin");
	}
	else
	{
		echo '<script type="text/javascript">alert("Email Sudah dipakai");</script>';
		echo '<script type="text/javascript">history.back()</script>';
	}
}

elseif ($cek == "Login") {
	$username = $_POST['username'];
	$pass = $_POST['password'];

	$query = mysqli_query($conn, "SELECT * FROM user_regis WHERE (username='$username' OR email='$username') AND (password='$pass') ");
	if (mysqli_num_rows($query) > 0){
		header("location: ../Home.php");
	}
}
?>
