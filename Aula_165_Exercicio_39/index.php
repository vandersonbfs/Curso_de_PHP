<?php

    // Definindo um array associativo chamado $arr onde as chaves são os nomes dos itens e os valores são os preços.
    $arr = [
        'porta' => 100,         // O preço da 'porta' é 100
        'maçaneta' => 5,        // O preço da 'maçaneta' é 5
        'motor' => 2000,        // O preço do 'motor' é 2000
        'retrovisor' => 8,      // O preço do 'retrovisor' é 8
    ];

    // Função que filtra itens com preço maior que 10 e retorna os nomes desses itens.
    function itensCaros($arr) {
        // Inicializa um array vazio que irá armazenar os itens caros (preço maior que 10)
        $arrItensCaros = [];

        // Itera sobre o array associativo $arr, onde $item é a chave (nome do item) e $preco é o valor (preço do item).
        foreach ($arr as $item => $preco) {
            // Verifica se o preço do item é maior que 10.
            if ($preco > 10) {
                // Se o preço for maior que 10, o item é adicionado ao array $arrItensCaros usando array_push.
                array_push($arrItensCaros, $item);
            }
        }

        // Retorna o array contendo os itens cujo preço é maior que 10.
        return $arrItensCaros;
    }  

?>
