<?php
    // Define uma string
    $str = "Esta é a minha string";

    // Extrai 5 caracteres a partir da posição 10 da string $str
    // Resultado será "minha"
    $minha = substr($str, 10, 5);

    // Exibe a string original seguida de uma quebra de linha
    echo $str . "<br>";

    // Exibe a substring extraída ("minha")
    echo $minha . "<br>";

    // Define uma nova string
    $str2 = "Testando esta string";

    // Extrai a substring a partir da posição 8 até o final da string
    // Resultado será "esta string"
    $novaString = substr($str2, 8);

    // Exibe a substring extraída
    echo $novaString . "<br>";

    // Extrai a substring a partir da posição 8, mas remove os últimos 3 caracteres
    // Resultado será "esta stri", pois ele pega de posição 8 até 3 caracteres antes do fim
    $novaString2 = substr($str2, 8, -3);

    // Exibe essa nova substring
    echo $novaString2 . "<br>";
?>
