<?php
    include "koneksi.php";
    $id_trans = $_POST['id_trans'];
    $nama_customer = $_POST['nama_customer'];
    $alamat = $_POST['alamat'];
    $jasa_kirim = $_POST['jasa_kirim'];
    $tanggal = $_POST['tanggal'];

    $sql = "UPDATE transaksi SET nama_customer = '$nama_customer', alamat = '$alamat', jasa_kirim = '$jasa_kirim', tanggal = '$tanggal' WHERE transaksi.id_trans = '$id_trans';";
    $a = $connect->query($sql);
    if ($a === true) {
        header('location: transaksi.php');
    } else {
       
        echo "ERROR";
    }
    ?>