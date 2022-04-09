<?php
    $huruf = "B";
    $converArray = str_split($huruf);

    foreach($converArray as $row) {
        if (($huruf == "A") || ($huruf == "I") || ($huruf == "U") || ($huruf == "E") || ($huruf == "O"))
        {
            echo "Termasuk huruf vokal \n";
        }
        elseif (($huruf == "a") || ($huruf == "i") || ($huruf == "u") || ($huruf == "e") || ($huruf == "o"))
        {
            echo "Termasuk huruf vokal \n";
        }
        else 
        {
            echo "Tidak termasuk huruf vokal \n";
        }
    }
?>