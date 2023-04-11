<?php
    include "koneksi.php";

    $nama_customer = $_POST['nama_customer'];
    $alamat = $_POST['alamat'];
    $jasa_kirim = $_POST['jasa_kirim'];
    $tanggal = $_POST['tanggal'];
    // $id_pesan = $_POST['id_pesan'];

    $sql = "INSERT INTO `transaksi` (`id_trans`, `nama_customer`, `alamat`, `jasa_kirim`, `tanggal`) VALUES (NULL, '$nama_customer', '$alamat', '$jasa_kirim', '$tanggal')";
    $a = $connect->query($sql);
        if ($a === true) {
            header('location: transaksi.php');
        //     echo'
        //     <script type="text/JavaScript"> 
        //     alert("Detail Transaksi Berhasil Ditambahkan!");
        //     document.location.href="transaksi.php"
        // </script>';
        } else {
            echo "ERROR";
        }
    ?>