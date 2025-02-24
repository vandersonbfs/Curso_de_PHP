<?php

    // Mudanca de tipo implicita

    echo 5 / 2;
    echo "<br>";

    if(is_float(5/2)){
        echo "5/2 resulta em um float: 2.5 <br>";
    }

    echo 2 . 3; //concatenação
    echo "<br>";

    if(is_string(2 . 3)){
        echo "2 . 3 resulta em uma string: 23 <br>";
    }
