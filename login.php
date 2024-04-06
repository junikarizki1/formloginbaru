<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css"/>
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />
    <script
      type="module"
      src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"
    ></script>
    <script
      nomodule
      src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"
    ></script>
</head>
<body>
    <div class="container">
        <div class="form-box">
            <form action="savelogin.php" name="Formfill" method="POST" onsubmit="return validation()">
                <h2>Login</h2>
                <p id="result"></p>
                <div class="input-box">
                    <i class="bx bx-envelope"></i>
                    <input type="mail" name="userlogin" id="userlogin" placeholder="Masukan Email atau Username" />
                </div>
                <div class="input-box">
                    <i class="bx bx-lock"></i>
                    <input type="password" name="password" id="password" placeholder="Password" />
                </div>
                <div class="button">
                <input
                    type="submit"
                    class="btn"
                    onclick="validation()"
                    name="cmdlogin"
                    id="cmdlogin"
                    value="Login"
                />
                </div>
                <div class="grouplogin">
                    <span><a href="#">Forget Password</a></span>
                    <span><a href="register.php">Don't Have an Account?</a></span>
                </div>
            </form>
        </div>
        <div class="popup" id="popup">
            <ion-icon name="checkmark-done-circle-outline"></ion-icon>
            <h2>Selamat!</h2>
            <p>
            Login Berhasil <br />
            </p>
            <a href="">
            <!-- <form action="savelogin.php" method="POST" name="Formfill">
                <button onclick="closeSlide()">OK</button>
            </form> -->
        </a>
        </div>
    </div>
    </div>

    
    <script src="validasilogin.js"></script>

</body>
</html>