<?php 
    // Array

    $hari = array("Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu", "Minggu");
    $bulan = ["Januari", "Februari"];
    $mix = [10, "Malam", TRUE];

    // menampilkan array --> var_dump() print_r()
    var_dump($hari);
    echo "<br>";
    print_r($bulan);
    echo "<br>";
    echo $hari[1];
    echo "<br>";

    // menambah element baru array
    $bulan[] = "Maret";
    $bulan[] = "April";
    print_r($bulan);
    echo "<br>";
?>