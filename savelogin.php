<?php
	session_start();
    include "koneksi.php";

	if(isset($_POST["cmdlogin"]) ) {
        // $username = $_POST['username'];
        $userlogin = $_POST["userlogin"];
        $password = md5($_POST['password']);


        $sql ="select * from tbuser where email='$userlogin' and password='$password' || username='$userlogin' and password='$password';";
        $query = mysqli_query($conn,$sql)or die("$sql");
        $num = mysqli_num_rows($query);
        $result = mysqli_fetch_array($query);

        if($num==1){
            $_SESSION["username"] = $result["username"];
            $_SESSION["kodeuser"] = $result["kodeuser"];

            header("location:index.php");
        }else{  
        ?>
            <script type="text/javascript">

            alert("Maaf, Data yang anda masukan salah");
            location.href="login.php";

            </script>
        <?php
        }
    }
?>