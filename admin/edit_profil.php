<?php
    include "koneksi.php";
    $username = $_POST['username'];
    $password=md5($_POST['password']);
    $email = $_POST['email'];

    $sql = "UPDATE pengguna SET password = '$password', email = '$email' WHERE pengguna.username = '$username';";
    $a = $connect->query($sql);
    if ($a === true) {
        header('location: profil.php');
    } else {
        // var_dump($a);
        echo "ERROR";
    }
    ?>