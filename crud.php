<?php

session_start();
include "koneksi.php";

if(isset($_POST["cmd"])) {
	$cmd = $_POST["cmd"];
}else {
	$cmd = $_GET["cmd"];
}

if($cmd == "Login") {
	$userlogin = $_POST["userlogin"];
    $password = md5($_POST['password']);

	$sql ="select * from tbuser where email='$userlogin' and password='$password' || username='$userlogin' and password='$password';";
    $query = mysqli_query($conn,$sql)or die("$sql");
    $num = mysqli_num_rows($query);
    
	if($num == 0) {
		?>
		<script type="text/javascript">
			alert("Maaf, Data yang anda masukan salah.");
			location.href = "login.php";
		</script>
		<?php
	}else {
		$result = mysqli_fetch_array($query);
		$_SESSION["username"] = $result["username"];
        $_SESSION["kodeuser"] = $result["kodeuser"];

		header("Location: index.php");
	}
}else if($cmd == "Register") {
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $username = $_POST["username"];

    $sql_check = "select * from tbuser where username='$username';";   
    $query_check = mysqli_query($conn,$sql_check)or die("$sql_check");
    $num_check = mysqli_num_rows($query_check);

    $sql_checkmail = "select * from tbuser where email='$email';";   
    $query_checkmail = mysqli_query($conn,$sql_checkmail)or die("$sql_checkmail");
    $num_checkmail = mysqli_num_rows($query_checkmail);

    if($num_check == 0 && $num_checkmail == 0) {
        $email = $_POST['email'];
        $password = md5($_POST['password']);
        $username = $_POST["username"];

        $sql = "insert into tbuser(kodeuser, username, email, password) value('$kodeuser','$username','$email', '$password')";
        $query = mysqli_query($conn,$sql) or die("error: $sql");
        // $num = mysqli_num_rows($query);
        $_SESSION["username"] = $username;

        ?>
        <script type="text/javascript">
            location.href = "index.php";
        </script>
        <?php
    } else if ($num_check == 1 && $num_checkmail == 0 ) {
        ?>
            <script type="text/javascript">
                alert("Maaf, Username yang anda masukan sudah terdaftar pada website kami.");
                location.href = "register.php";
            </script>
        <?php
    } else if ($num_checkmail == 1 && $num_check == 0) {
        ?>
            <script type="text/javascript">
                alert("Maaf, Email yang anda masukan sudah terdaftar pada website kami.");
                location.href = "register.php";
            </script>
        <?php
    } else if ($num_checkmail == 1 && $num_check == 1) {
        ?>
            <script type="text/javascript">
                alert("Maaf, Email dan Username yang anda masukan sudah terdaftar pada website kami.");
                location.href = "register.php";
            </script>
        <?php
    }
}
?>