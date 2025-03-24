<?php

    $arr = [5, "Vanderson", true, false, "Opa", 12.2, "teste", true, [], "palavra", 5, 10,"Alô"];

    $quantidade = count($arr);

    $contador = 0;

    while ($contador < $quantidade) {
        if (is_string($arr[$contador])) {
            echo $arr[$contador] . "<br>";
        }
        $contador++;
    }

