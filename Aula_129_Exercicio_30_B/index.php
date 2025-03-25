<?php
    // Aula_129_Exercicio_30_B
    // Inicializa um array vazio chamado $arr
    $arr = [];

    // Laço "for" para adicionar números de 0 a 10 no array
    for ($i = 0; $i <= 10; $i++) { 
        // Adiciona o valor de $i ao array usando a função array_push
        array_push($arr, $i);
    }

    // Exibe o conteúdo do array na tela
    print_r($arr);
?>
