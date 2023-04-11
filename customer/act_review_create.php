<?php
    include "koneksi.php";
    $nama = $_POST['nama'];
    $komen = $_POST['komen'];
    $id_produk = $_POST['id_produk'];

    // var_dump($nama_produk);
    $sql = "INSERT INTO `review` (`id_review`, `nama`, `komen`, `id_produk`) VALUES (NULL, '$nama', '$komen', '$id_produk')";
    $a = $connect->query($sql);
        if ($a === true) {
            header('location: review.php');
        } else {
            // var_dump($a);
            echo "ERROR";
        }
    ?>