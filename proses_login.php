<?php
// session_start();
include 'koneksi.php';
$username = $_POST['username'];
$password = md5($_POST['password']);

echo "username";
$query = mysqli_query($kon, "SELECT * FROM users WHERE username='$username' AND password='$password'");

	if (mysqli_num_rows($query) > 0) {
		$data = mysqli_fetch_assoc($query);
		$_SESSION['username'] = $data['username'];
		header("Location:dashboard.php");
	} else {
		$_SESSION['login_gagal'] = "username dan password salah" ;
		header("Location:index.php");
	}

?>	