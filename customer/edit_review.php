<?php
    include "koneksi.php";
    $id_review = $_POST['id_review'];
    $nama = $_POST['nama'];
    $komen = $_POST['komen'];

    $sql = "UPDATE review SET nama = '$nama', komen = '$komen' WHERE review.id_review = '$id_review';";
    $a = $connect->query($sql);
    if ($a === true) {
        header('location: review.php');
    } else {
        // var_dump($a);
        echo "ERROR";
    }
    ?>