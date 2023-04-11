<?php
    include "koneksi.php";
    $id_produk = $_POST['id_produk'];
    $nama_produk = $_POST['nama_produk'];
    $harga = $_POST['harga'];
    $deskripsi = $_POST['deskripsi'];

    $sql = "UPDATE produk SET nama_produk = '$nama_produk', harga = '$harga', deskripsi = '$deskripsi' WHERE produk.id_produk = '$id_produk';";
    $a = $connect->query($sql);
    if ($a === true) {
        header('location: product.php');
    } else {
        // var_dump($a);
        echo "ERROR";
    }
    ?>