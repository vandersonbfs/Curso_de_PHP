<?php
    // Criação de um array associativo com nomes como chaves e idades como valores
    $arr = [
        'Matheus' => 29,
        'Pedro' => 18,
        'Joaquim' => 14,
        'Maria' => 12,
    ];

    // Ordena o array pelo valor em ordem crescente, mantendo a associação das chaves
    asort($arr);
    // Exibe o array ordenado
    print_r($arr);
    echo "<br>";

    // Criação de outro array associativo com diferentes valores
    $arr2 = [
        'Matheus' => 12,
        'Pedro' => 44,
        'Joaquim' => 14,
        'Maria' => 32,
    ];

    // Ordena o array pelo valor em ordem decrescente, mantendo a associação das chaves
    arsort($arr2);
    // Exibe o array ordenado
    print_r($arr2);
    echo "<br>";

    // Ordena o array pela chave em ordem alfabética crescente
    ksort($arr2);
    // Exibe o array ordenado
    print_r($arr2);
    echo "<br>";

    // Ordena o array pela chave em ordem alfabética decrescente
    krsort($arr2);
    // Exibe o array ordenado
    print_r($arr2);
    echo "<br>";
?>
