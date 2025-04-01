<?php

    // Definindo a função "parOuImpar", que recebe um parâmetro $num
    function parOuImpar($num) {
        
        // A condição verifica se o número é divisível por 2 sem deixar resto
        // O operador "%" é o operador módulo, que retorna o resto da divisão
        // Se o resto da divisão de $num por 2 for igual a 0, significa que $num é par
        if ($num % 2 === 0) {
            // Se for par, exibe uma mensagem indicando que o número é par
            echo "O número $num é par. <br>";
        } else {
            // Se não for par (ou seja, for ímpar), exibe uma mensagem indicando que o número é ímpar
            echo "O número $num é impar. <br>";
        }

    }

    // Chamadas da função "parOuImpar" passando diferentes números
    // A função verificará se o número é par ou ímpar e exibirá a mensagem correspondente
    parOuImpar(42);  // Exibe "O número 42 é par."
    parOuImpar(31);  // Exibe "O número 31 é impar."
    parOuImpar(22);  // Exibe "O número 22 é par."
    parOuImpar(11);  // Exibe "O número 11 é impar."

?>
