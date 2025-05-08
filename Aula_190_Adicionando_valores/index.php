<?php
    // Cria um array vazio
    $arr = [];

    // Exibe o array vazio
    print_r($arr);
    echo "<br>";

    // Atribui o valor 10 ao índice 0 do array
    $arr[0] = 10;

    // Exibe o array após adicionar o elemento no índice 0
    // Resultado: Array ( [0] => 10 )
    print_r($arr);
    echo "<br>";

    // Atribui o valor 15 ao índice 1 do array
    $arr[1] = 15;

    // Exibe o array com os índices 0 e 1 preenchidos
    // Resultado: Array ( [0] => 10 [1] => 15 )
    print_r($arr);
    echo "<br>";

    // Atribui o valor 25 ao índice 5 do array
    $arr[5] = 25;

    // Exibe o array agora com uma lacuna entre os índices 1 e 5
    // Resultado: Array ( [0] => 10 [1] => 15 [5] => 25 )
    print_r($arr);
    echo "<br>";
?>
