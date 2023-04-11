<?php
include "koneksi.php";
$id_kategori= $_GET['id'];

$sql = "delete from kategori where id_kategori = '$id_kategori'";

$a = $connect->query($sql);

header("location: category.php");