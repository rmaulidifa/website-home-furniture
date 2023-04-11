<?php
include "koneksi.php";
$id_pay = $_GET['id'];

$sql = "delete from payment where id_pay = '$id_pay'";

$a = $connect->query($sql);

header("location: payment.php");