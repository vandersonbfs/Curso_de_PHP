<!-- Contagem de Vogais
Crie uma função chamada countVowels que recebe uma string como parâmetro.

A função deve retornar a quantidade de vogais presentes na string.

Utilize uma estrutura de repetição para percorrer cada caractere da string.

Utilize uma variável para armazenar o contador de vogais.

Considere que as vogais são as letras "a", "e", "i", "o" e "u", em minúsculas ou maiúsculas. -->

<?php

// Função que recebe uma string e retorna a quantidade de vogais
function countVowels($string) {
    // Inicializa o contador de vogais
    $vowelCount = 0;

    // Converte a string para minúsculas para facilitar a comparação
    $string = strtolower($string);

    // Percorre cada caractere da string
    for ($i = 0; $i < strlen($string); $i++) {
        // Verifica se o caractere é uma vogal
        if (in_array($string[$i], ['a', 'e', 'i', 'o', 'u'])) {
            $vowelCount++; // Incrementa o contador se for uma vogal
        }
    }

    // Retorna a quantidade de vogais
    return $vowelCount;
}

// Exemplo de uso da função
$string = "Olá, como você está?";
echo "Quantidade de vogais: " . countVowels($string);

?>
