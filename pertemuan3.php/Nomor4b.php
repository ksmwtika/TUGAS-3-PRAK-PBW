<?php
    // Nomor 4b Tampilkan associative array ($mobil2) menggunakan foreach - loop!

    $mobil2 = ["satu" => "Toyota", "dua" => "Mitsubishi", "tiga" => "Tesla", "empat" => "Honda"];
    foreach ($mobil2 as $key => $mobil2) {
        echo "{$key} => {$mobil2} <br>";
    }
?>