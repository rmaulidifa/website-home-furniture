<?php
    include "koneksi.php";

    $metode = $_POST['metode'];
    $norek = $_POST['norek'];
    $tanggal = $_POST['tanggal'];
    // $id_pesan = $_POST['id_pesan'];
  
    $sql = "INSERT INTO `payment` (`id_pay`, `metode`, `no_rekening`, `tanggal_pay`) VALUES (NULL, '$metode', '$norek', '$tanggal')";
    $a = $connect->query($sql);
        if ($a === true) {
            // header('location: payment.php');
            echo'
            <script type="text/JavaScript"> 
            alert("Payment Success!");
            document.location.href="payment.php"
        </script>';
        } else {
            echo "ERROR";
        }
    ?>