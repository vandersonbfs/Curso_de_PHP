<?php

    $x = 0;
    while ($x < 10) {
        echo "O x é igual $x <br>";
        $x++;

        if ($x === 5) {
            echo "Parando o loop. <br>";
            break;
        }
    }

    echo "Saiu do loop <br>";