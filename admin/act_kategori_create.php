<?php
    include "koneksi.php";
    $nama_kategori = $_POST['nama_kategori'];
    $id_produk = $_POST['id_produk'];

    // var_dump($nama_produk);
    $sql = "INSERT INTO `kategori` (`id_kategori`, `nama_kategori`, `id_produk`) VALUES (NULL, '$nama_kategori', '$id_produk')";
    $a = $connect->query($sql);
        if ($a === true) {
            header('location: category.php');
        } else {
            // var_dump($a);
            echo "ERROR";
        }
    ?>