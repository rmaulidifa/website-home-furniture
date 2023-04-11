<?php
include "koneksi.php";
$id_stok= $_GET['id'];

$sql = "delete from stok where id_stok = '$id_stok'";

$a = $connect->query($sql);

header("location: stok.php");