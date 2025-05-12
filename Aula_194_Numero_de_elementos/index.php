<?php
    // Cria um array com três elementos: 1, 2 e 3
    $arr = [1, 2, 3];

    // Exibe a quantidade de elementos do array $arr (que é 3), seguido de uma quebra de linha
    echo count($arr) . "<br>";

    // Cria um array com os números de 1 a 10
    $arr2 = range(1, 10);

    // Exibe a quantidade de elementos do array $arr2 (que é 10), seguido de uma quebra de linha
    echo count($arr2) . "<br>";

    // Cria um array associativo com três pares chave/valor
    $arr3 = ['nome' => 'Matheus', 'idade' => 29, 'profissão' => 'Programador'];

    // Exibe novamente a quantidade de elementos do array $arr2 (ainda 10), seguido de uma quebra de linha
    // OBS: Provavelmente aqui o correto seria usar count($arr3), não $arr2
    echo count($arr2) . "<br>";
?>
