<?php 	
session_start();
include "koneksi.php";
// var_dump($_SESSION);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="t_login">
        <?php 	
            if(!isset($_SESSION["username"]) ) {
        ?>
            <div class="user">
                <a href="login.php" style="text-decoration: none;">Login</a>
            </div>
            <div class="user1">
                    <a href="register.php" style="text-decoration: none;">Register</a>
            </div>

        <?php
            }else{
        ?>
                <div class="tes">
                <?php 
                    include 'secure.php';

                    $username = $_SESSION['username'];		          		        
                        echo "Welcome, $username";
                ?>
                <input type="hidden" name="kodeuser" id="kodeuser" value="<?php echo $username ?>">
            </div>
            <div class="user">
                <a href="logout.php">Logout</a>
            </div>
        <?php 	
        } 
        ?>
    </div>
</body>
</html>