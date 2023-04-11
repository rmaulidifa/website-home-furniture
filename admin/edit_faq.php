<?php
    include "koneksi.php";
    $id_faq = $_POST['id_faq'];
    $subjek = $_POST['subjek'];
    $pertanyaan = $_POST['pertanyaan'];
    $jawaban = $_POST['jawaban'];

    $sql = "UPDATE faq SET subjek = '$subjek', pertanyaan = '$pertanyaan', jawaban = '$jawaban' WHERE faq.id_faq = '$id_faq';";
    $a = $connect->query($sql);
    if ($a === true) {
        header('location: faq.php');
    } else {
        // var_dump($a);
        echo "ERROR";
    }
    ?>