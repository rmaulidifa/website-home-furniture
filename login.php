<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="loginStyle.css">
    <title>Login</title>
</head>
<body>
    <div class="kotak_login">
        <form action="loginProses.php" method="post">
            <div class="container">
                <h3><center><b>Login</b></center></h3><br>
                <label for="username"><b>Username</b></label>
                <input type="text" name="username" id="username" placeholder="Enter Username" size="20">
                <label for="password"><b>Password</b></label>
                <input type="password" name="psw" id="password" placeholder="Enter Password" size="20"><br><br>
                <button type="submit" id="myButton" name="Login">Login</button>
                <div class="reg">
                    <br><span class="registrasi"><a href="regForm.php" onclick="validation();">Don't have an account?</a></span>
                </div>
            </div>
        </form>
    </div>
</body>
</html>