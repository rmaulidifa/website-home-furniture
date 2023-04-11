<?php
    include "koneksi.php";
    $id_pay = $_POST['id_pay'];
    $metode = $_POST['metode'];
    $no_rekening = $_POST['no_rekening'];
    $tanggal_pay = $_POST['tanggal_pay'];

    $sql = "UPDATE payment SET metode = '$metode', no_rekening = '$no_rekening', tanggal_pay = '$tanggal_pay' WHERE payment.id_pay = '$id_pay';";
    $a = $connect->query($sql);
    if ($a === true) {
        header('location: payment.php');
    } else {
        echo "ERROR";
    }
    ?>