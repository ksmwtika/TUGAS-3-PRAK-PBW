<?php
    $nohari=1;
    switch ($nohari) {
        case 1:
            echo "Hari ke-1 : Senin\n";
        break;
        case 2:
            echo "Hari ke-2 : Selasa\n";
        break;
        case 3:
            echo "Hari ke-3 : Rabu\n";
        break;
        case 4:
            echo "Hari ke-4 : Kamis\n";
        break;
        case 5:
            echo "Hari ke-5 : Jum'at\n";
        break;
        case 6:
            echo "Hari ke-6 : Sabtu\n ";
        break;
        case 7:
            echo "Hari ke-7 : Minggu\n";
        break;
        default:
            echo "Tidak ada hari ke-". $nohari;
        break;
    }
?>