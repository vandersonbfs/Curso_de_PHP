<?php
    // Cria um array multidimensional com dois arrays internos
    // $arr[0] = [1, 2, 3], $arr[1] = [2, 4, 6]
    $arr = [[1,2,3],[2,4,6]];

    // Exibe a estrutura completa do array multidimensional
    print_r($arr);
    echo "<br>"; // Adiciona uma quebra de linha no HTML

    // Exibe o segundo elemento do primeiro array interno ($arr[0][1] = 2)
    echo $arr[0][1] . "<br>";

    // Exibe o terceiro elemento do segundo array interno ($arr[1][2] = 6)
    echo $arr[1][2] . "<br>";

    // Exibe a quantidade de elementos no array principal ($arr), que é 2
    echo count($arr) . "<br>";

    // Exibe a quantidade de elementos no primeiro array interno ($arr[0]), que é 3
    echo count($arr[0]) . "<br>";
?>
