<?php
include "koneksi.php";
$id_review= $_GET['id'];

$sql = "delete from review where id_review = '$id_review'";

$a = $connect->query($sql);

header("location: review.php");