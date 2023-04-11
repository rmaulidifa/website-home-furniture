<?php
    include "koneksi.php";
    $subjek = $_POST['subjek'];
    $pertanyaan = $_POST['pertanyaan'];
    $jawaban = $_POST['jawaban'];

    $sql = "INSERT INTO `faq` (`id_faq`, `subjek`, `pertanyaan`, `jawaban`) VALUES (NULL, '$subjek', '$pertanyaan', '$jawaban')";
    $a = $connect->query($sql);
        if ($a === true) {
            header('location: faq.php');
        } else {
            // var_dump($a);
            echo "ERROR";
        }
    ?>