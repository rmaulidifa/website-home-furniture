<?php
include "koneksi.php";
$id_produk= $_GET['id'];

$sql = "delete from produk where id_produk = '$id_produk'";

$a = $connect->query($sql);

header("location: product.php");