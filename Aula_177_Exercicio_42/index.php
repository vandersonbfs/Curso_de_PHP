<?php
    // Define uma string com a frase completa
    $str = "Cadê o meu queijo? Ele estava aqui em cima";

    // Extrai 6 caracteres a partir da posição 12 da string
    // A partir da posição 12, temos "queijo", que é o que será extraído
    $queijo = substr($str, 12, 6);

    // Exibe a palavra "queijo" seguida de uma quebra de linha
    echo "$queijo <br>";

    // Extrai 6 caracteres a partir da posição 24 da string
    // A partir da posição 24, temos "estava", que será extraída
    $estava = substr($str, 24, 6);

    // Exibe a palavra "estava" seguida de uma quebra de linha
    echo "$estava <br>";
?>
