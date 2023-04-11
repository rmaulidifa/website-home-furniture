<?php
    include "koneksi.php";
    $qty = $_POST['qty'];
    $total = $_POST['total'];
    $id_produk = $_POST['id_produk'];

    $sql = "INSERT INTO `pesan` (`id_pesan`, `qty`, `total`, `id_produk`) VALUES (NULL, '$qty', '$total', '$id_produk')";
    $a = $connect->query($sql);
        if ($a === true) {
            header('location: order.php');
            // echo'
            // <script type="text/JavaScript"> 
            // alert("Rincian Order Berhasil Ditambahkan!");
            // document.location.href="order.php"
        // </script>';
        } else {
            echo "ERROR";
        }
    ?>