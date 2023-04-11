<?php
    include "koneksi.php";

    $uname = $_POST['username'];
    $pass = md5($_POST['pass']);
    $email = $_POST['email'];
    $level = $_POST['level'];

    $sql = "INSERT INTO pengguna VALUES ('".$uname."','".$pass."','".$email."','".$level."')";

    if(mysqli_query($connect, $sql)){
        echo '<script type="text/JavaScript"> 
        alert("Anda Berhasil Registrasi!");
        document.location.href="login.php"
    </script>';
    }else{
        echo '<script type="text/JavaScript"> 
        alert("Anda Gagal Registrasi!");
        document.location.href="regForm.php"
    </script>';
        echo mysqli_error($connect);
    }
?>