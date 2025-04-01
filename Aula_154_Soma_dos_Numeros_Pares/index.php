<?php

// Função que calcula a soma dos números pares de 1 até o número fornecido
function sumEvenNumbers($n) {
    // Inicializa a variável para acumular a soma
    $soma = 0;

    // Estrutura de repetição para percorrer os números de 1 até $n
    for ($i = 1; $i <= $n; $i++) {
        // Verifica se o número é par
        if ($i % 2 == 0) {
            // Adiciona o número par à variável $soma
            $soma += $i;
        }
    }

    // Retorna a soma total dos números pares
    return $soma;
}

// Teste da função
echo sumEvenNumbers(10);  // Esperado: 2 + 4 + 6 + 8 + 10 = 30

?>
