<?php
    include "koneksi.php";
    $id_kandidat = $_POST['id_kandidat'];
    $nama_kandidat = $_POST['nama_kandidat'];

    $sql = "UPDATE alternatif SET nama_kandidat = '$nama_kandidat' WHERE alternatif.id_kandidat = '$id_kandidat';";
    $a = $connect->query($sql);
    if ($a === true) {
        header('location: brand.php'); //alternatif
    } else {
        // var_dump($a);
        echo "ERROR";
    }
    ?>