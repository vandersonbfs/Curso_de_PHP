<?php
    // Declaração de uma matriz (array bidimensional) com 3 arrays internos
    $arr = [
        [1, 2, 3, 4],
        [2, 4, 6, 8],
        [3, 6, 9, 12]
    ];

    // Loop externo percorre cada array interno
    for ($i = 0; $i < count($arr); $i++) { 
        // Exibe qual array externo está sendo impresso (1, 2 ou 3)
        echo "Imprimindo array externo " . ($i + 1) . "<br>";

        // Loop interno percorre os elementos do array interno atual
        for ($j = 0; $j < count($arr[$i]); $j++) { 
            // Imprime o valor do elemento atual do array interno
            echo $arr[$i][$j] . "<br>";
        }
    }
?>
