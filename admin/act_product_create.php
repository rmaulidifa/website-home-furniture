<?php
    include "koneksi.php";
    $nama_produk = $_POST['nama_produk'];
    $harga = $_POST['harga'];
    $deskripsi = $_POST['deskripsi'];
    $id_stok = $_POST['id_stok'];

    $sql = "INSERT INTO `produk` (`id_produk`, `nama_produk`, `harga`, `deskripsi`, `id_stok`) VALUES (NULL, '$nama_produk', '$harga', '$deskripsi', '$id_stok')";
    $a = $connect->query($sql);
        if ($a === true) {
            header('location: product.php');
        } else {
            echo "ERROR";
        }
    ?>