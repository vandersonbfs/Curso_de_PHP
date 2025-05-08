<?php
    // Cria um array com números de 1 a 10
    // A função range cria uma sequência de valores numéricos
    $arr = range(1, 10);

    // Exibe o array: [1, 2, 3, 4, 5, 6, 7, 8, 9, 10]
    print_r($arr);
    echo "<br>";

    // Cria um array com números de 5 a 50
    $arr2 = range(5, 50);

    // Exibe o array: [5, 6, 7, ..., 50]
    print_r($arr2);
    echo "<br>";

    // Cria um array de 0 a 1000, pulando de 100 em 100 (passo = 100)
    $arr3 = range(0, 1000, 100);

    // Exibe o array: [0, 100, 200, ..., 1000]
    print_r($arr3);
    echo "<br>";
?>
