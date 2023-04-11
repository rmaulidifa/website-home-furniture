<?php
include "koneksi.php";
$id_kandidat= $_GET['id_kandidat'];

$sql = "delete from alternatif where id_kandidat = '$id_kandidat'";

$a = $connect->query($sql);

header("location: brand.php");