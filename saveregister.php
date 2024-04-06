<?php 
    session_start();
	include "koneksi.php";
	
	$email = $_POST['email'];
	$password = md5($_POST['password']);
	$username = $_POST["username"];

	$sql = "insert into tbuser(kodeuser, username, email, password) value('$kodeuser','$username','$email', '$password')";
	$query = mysqli_query($conn,$sql) or die("error: $sql");
	// $num = mysqli_num_rows($query);
	$_SESSION["username"] = $username;

    echo "<script>alert('Akun anda berhasil di buat');window.location='index.php'</script>";
?>
