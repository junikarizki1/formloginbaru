<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Register</title>
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="style.css" />
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
        <form
          action="crud.php"
          method="post"
          name="Formfill"
          onsubmit="return validation()"
        >
          <h2>Register</h2>
          <p id="result"></p>
          <div class="input-box">
            <i class="bx bx-user"></i>
            <input type="text" name="username" id="username" placeholder="Username" />
          </div>
          <div class="input-box">
            <i class="bx bx-envelope"></i>
            <input type="email" name="email" id="email" placeholder="Email" />
          </div>
          <div class="input-box">
            <i class="bx bx-lock"></i>
            <input type="password" name="password" id="password" placeholder="Password" />
          </div>
          <div class="input-box">
            <i class="bx bx-lock"></i>
            <input
              type="password"
              name="cpassword"
              placeholder="Confirm Password"
            />
          </div>
          <div class="button">
            <input
              type="submit"
              class="btn"
              onclick="validation()"
              name="cmd"
              id="cmd"
              value="Register"
            />
          </div>
          <div class="group">
            <!-- <span><a href="#">Forget Password</a></span> -->
            <span><a href="login.php">Already registered?</a></span>
          </div>
        </form>
      </div>

      <div class="popup" id="popup">
        <ion-icon name="checkmark-done-circle-outline"></ion-icon>
        <h2>Selamat!</h2>
        <p>
          Registrasimu Berhasil <br />
          Klik OK Untuk Login
        </p>
          <!-- <form action="saveregister.php" method="POST" name="Formfill">
              <button onclick="closeSlide()">OK</button>
          </form> -->
      </div>
    </div>

    <script src="validasi.js"></script>
  </body>
</html>
