<html>
    <head>
        <link rel="stylesheet" type="text/css" href="styleReg.css">
        <title>Registrasi</title>
    </head>
    <body>
        <form action="regProses.php" method="POST">
            <div class="container">
              <h1><center>Register</center></h1>
              <p><center>Please fill in this form to create an account.</center></p>
              <label for="username"><b>Username</b></label>
              <input type="text" placeholder="Enter Username" name="username"  required>
              <label for="pass"><b>Password</b></label>
              <input type="password" placeholder="Enter Password" name="pass" id="pass" required>
              <label for="email"><b>Email</b></label>
              <input type="text" placeholder="Enter your Email" name="email"  required>
              <label for="level"><b>Level</b></label>
              <br>
                    <select name="level">
                        <option value="1">Admin</option>
                        <option value="2">Pengguna</option>
                    </select>
                </br>
                <br>
              <button type="submit" class="registerbtn">Register</button>
            </div>
            <div class="signin">
                <span class="psw"><a href="login.php">Already have an account?</a></span>
            </div>
          </form>
    </body>
</html>
