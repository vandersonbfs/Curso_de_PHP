<?php

// Inicializando um array vazio chamado $arr
$arr = [];

// Começando o loop para preencher o array com números de 10 a 20
// Erro: "fo= 20" é um erro de digitação. Deveria ser "for($i = 10; $i <= 20; $i++)"
for ($i = 10; $i <= 20; $i++) { 
    // Adicionando o valor de $i ao array usando a função array_push
    array_push($arr, $i);
}

// Exibindo o conteúdo do array
print_r($arr);
// Exibindo uma quebra de linha. O código estava tentando usar 'echo <br>' de forma incorreta.
// Corrigido para 'echo "<br>";'
echo "<br>";

// Iniciando um loop para percorrer o array e verificar números ímpares
for ($i = 0; $i < count($arr); $i++) { 
    // Condição para verificar se o número é ímpar (resto da divisão por 2 diferente de 0)
    if ($arr[$i] % 2 != 0) {
        // Exibindo o número ímpar
        echo "Número ímpar: $arr[$i] <br>";
    }
}

?>
