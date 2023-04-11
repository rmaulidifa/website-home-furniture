<?php
    include "koneksi.php";
    $nama_kandidat = $_POST['nama_kandidat'];
    // $id_kandidat = $_POST['id_kandidat'];

    $sql = "INSERT INTO `alternatif` (`nama_kandidat`) VALUES (NULL, '$nama_kandidat')";
    $a = $connect->query($sql);
        if ($a === true) {
            header('location: brand.php'); //alternatif
        } else {
            echo "ERROR";
        }
?>