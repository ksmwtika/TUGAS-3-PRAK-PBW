<?php
    // Nomor 4a Tampilkan numberik array ($mobil1) menggunakan for - loop dan while - loop!

    // Menggunakan for - loop
    
    $mobil1 = ["Toyota", "Mitsubishi", "Tesla", "Honda"];
    for ($i = 0; $i < count($mobil1); $i++) {
        echo "Mobil ini adalah {$mobil1[$i]} <br>";
    }

    // Menggunakan while - loop
    
    $mobil1 = ["Toyota", "Mitsubishi", "Tesla", "Honda"];
    $i = 1;
    while ($i < count($mobil1)) {
        echo "Mobil ini adalah {$mobil1[$i]} <br>";
        $i++;
    }
?>