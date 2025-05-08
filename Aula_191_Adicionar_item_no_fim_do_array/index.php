<?php
    // Cria um array com três elementos (índices automáticos: 0, 1, 2)
    $arr = [1, 2, 3];

    // Adiciona o valor 4 ao final do array
    // O PHP automaticamente usa o próximo índice disponível (3)
    $arr[] = 4;

    // Exibe o array atualizado: Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 )
    print_r($arr);
    echo "<br>";

    // Adiciona o valor 5 ao final do array
    // Novamente, o índice é atribuído automaticamente (4)
    $arr[] = 5; 

    // Exibe o array final: Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 [4] => 5 )
    print_r($arr);
    echo "<br>";
?>
