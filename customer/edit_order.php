<?php
    include "koneksi.php";
    $id_pesan = $_POST['id_pesan'];
    $qty = $_POST['qty'];
    $total = $_POST['total'];

    $sql = "UPDATE pesan SET qty = '$qty', total = '$total' WHERE pesan.id_pesan = '$id_pesan';";
    $a = $connect->query($sql);
    if ($a === true) {
        header('location: order.php');
    } else {
        // var_dump($a);
        echo "ERROR";
    }
    ?>