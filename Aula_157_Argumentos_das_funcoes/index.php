<?php

    // Definindo a função 'soma' que recebe três parâmetros: $a, $b e $c
    function soma($a, $b, $c){
        
        // Exibe todos os argumentos passados para a função utilizando a função 'func_get_args()'.
        // A função 'func_get_args()' retorna um array com todos os parâmetros passados para a função.
        print_r(func_get_args());
        echo "<br>";  // Quebra de linha para separar a saída no navegador

        // A linha abaixo tenta imprimir a variável 'func_get_args()' diretamente, mas não irá funcionar corretamente
        // porque 'func_get_args()' retorna um array, e o PHP não converte automaticamente um array em uma string.
        // Isso provavelmente resultará em um erro ou um resultado inesperado.
        echo func_get_args() . "<br>"; 

        // Retorna a soma dos três parâmetros passados para a função
        return $a + $b + $c;
    }

    // Chamada da função 'soma' com os valores 2, 4 e 4.
    soma(2, 4, 4);
