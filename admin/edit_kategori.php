<?php
    include "koneksi.php";
    $id_kategori = $_POST['id_kategori'];
    $nama_kategori = $_POST['nama_kategori'];

    $sql = "UPDATE kategori SET nama_kategori = '$nama_kategori' WHERE kategori.id_kategori = '$id_kategori';";
    $a = $connect->query($sql);
    if ($a === true) {
        header('location: category.php');
    } else {
        // var_dump($a);
        echo "ERROR";
    }
    ?>