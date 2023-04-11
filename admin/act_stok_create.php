<?php
    include "koneksi.php";
    $jumlah = $_POST['jumlah'];
    $id_produk = $_POST['id_produk'];

    $sql = "INSERT INTO `stok` (`id_stok`, `jumlah`, `id_produk`) VALUES (NULL, '$jumlah', '$id_produk')";
    $a = $connect->query($sql);
        if ($a === true) {
            header('location: stock.php');
        } else {
            echo "ERROR";
        }
    ?>