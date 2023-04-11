<?php
include "koneksi.php";
$id_faq= $_GET['id'];

$sql = "delete from faq where id_faq = '$id_faq'";

$a = $connect->query($sql);

header("location: faq.php");