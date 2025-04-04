<?php

    // Definindo um array chamado $lista com alguns itens
    $lista = ["Arroz", "Trigo", "Cerveja", "Sal", "Vinagre"];

    // Função que converte o array em uma string formatada
    function listaOaraString($arr){
        // Inicializa uma string com uma frase introdutória
        $str = "Você levou estes itens do mercado: ";
        
        // Loop que percorre todos os elementos do array
        for ($i=0; $i < count($arr); $i++) { 
            // Verifica se o item atual é o último item do array
            if ($i + 1 == count($arr)) {
                // Se for o último item, adiciona o item à string, seguido de um ponto final.
                $str .= "$arr[$i]. ";
            } else {
                // Caso contrário, adiciona o item à string seguido de uma vírgula.
                $str .= "$arr[$i], ";
            }
        }
        // Retorna a string resultante
        return $str;
    }

    // Exibe o resultado da função, passando o array $lista como argumento
    echo listaOaraString($lista);
