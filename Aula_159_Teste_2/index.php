<!-- Soma dos Dígitos
Crie uma função chamada sumDigits que recebe um número inteiro como parâmetro.

A função deve calcular a soma dos dígitos desse número.

Retorne o valor da soma. -->

<?php

function sumDigits($num) {
    // Inicializa a soma
    $sum = 0;
    
    // Converte o número em string para poder percorrer cada dígito
    $num = abs($num); // Garantir que o número seja positivo
    $num_str = strval($num);
    
    // Percorre cada dígito da string
    for ($i = 0; $i < strlen($num_str); $i++) {
        // Adiciona o valor do dígito à soma
        $sum += (int)$num_str[$i];
    }
    
    // Retorna a soma dos dígitos
    return $sum;
}

// Testando a função
echo sumDigits(1234); // Saída: 10
echo "<br>";
echo sumDigits(987);  // Saída: 24
?>
