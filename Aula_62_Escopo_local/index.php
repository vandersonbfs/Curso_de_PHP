<?php
    $x = 12;

    echo "Global $x";
    echo "<br>";
    function teste(){
        $x =5;
        echo "Local $x";
    }

    teste();