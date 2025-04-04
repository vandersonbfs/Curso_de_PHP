<!-- Verificador de Números Primos
Crie uma função chamada isPrime que recebe um número inteiro positivo como parâmetro.

A função deve verificar se o número fornecido é um número primo.

Um número primo é aquele que é divisível apenas por 1 e por ele mesmo.

Caso o número fornecido seja menor que 2, retorne false.

Caso contrário, percorra os números de 2 até a raiz quadrada do número fornecido e verifique se algum deles é um divisor do número. Se encontrar um divisor, retorne false. Caso contrário, retorne true. -->

<?php

function isPrime($num) {
    // Se o número for menor que 2, não é primo
    if ($num < 2) {
        return false;
    }
    
    // Percorre os números de 2 até a raiz quadrada do número
    for ($i = 2; $i <= sqrt($num); $i++) {
        // Se algum número for divisor de $num, então não é primo
        if ($num % $i == 0) {
            return false;
        }
    }
    
    // Se nenhum divisor for encontrado, o número é primo
    return true;
}

// Testando a função
echo isPrime(11) ? "É primo!" : "Não é primo!"; // Saída: "É primo!"
echo "<br>";
echo isPrime(15) ? "É primo!" : "Não é primo!"; // Saída: "Não é primo!"
?>
