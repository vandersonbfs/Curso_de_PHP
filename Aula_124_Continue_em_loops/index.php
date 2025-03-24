<?php

    // O Continue em uma execução do loop.
    // O interpretador pula uma etapa

    $a = 10;

    while ($a > 0) {
        if ($a == 5 || $a = 7) {
            echo "Pulou a execução no $a <br>";
            $a--;
            continue;
        }

        echo "Executando o Loop $a <br>";
        $a--;
    }