<?php
include "koneksi.php";
$username= $_GET['id'];

$sql = "delete from pengguna where username = '$username'";

$a = $connect->query($sql);

header("location: profil.php");