<?php
include "koneksi.php";
$id_pesan = $_GET['id'];

$sql = "delete from pesan where id_pesan = '$id_pesan'";

$a = $connect->query($sql);

header("location: order.php");