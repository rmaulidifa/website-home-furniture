<?php
    include "koneksi.php";
    $id_stok = $_POST['id_stok'];
    $jumlah = $_POST['jumlah'];

    $sql = "UPDATE stok SET jumlah = '$jumlah' WHERE stok.id_stok = '$id_stok';";
    $a = $connect->query($sql);
    if ($a === true) {
        header('location: stock.php');
    } else {
        // var_dump($a);
        echo "ERROR";
    }
    ?>