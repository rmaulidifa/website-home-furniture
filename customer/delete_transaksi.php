<?php
include "koneksi.php";
$id_trans = $_GET['id'];

$sql = "delete from transaksi where id_trans = '$id_trans'";

$a = $connect->query($sql);

header("location: transaksi.php");