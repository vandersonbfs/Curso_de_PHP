<?php
    // Define uma string simples
    $str = "Teste";

    // Repete a string $str 5 vezes usando a função str_repeat
    // Resultado será "TesteTesteTesteTesteTeste"
    $strRepetida = str_repeat($str, 5);

    // Exibe a string repetida, seguida de uma quebra de linha
    echo "$strRepetida <br>";

    // Define uma frase
    $frase = "Testando repetição por frase ";

    // Repete a frase 4 vezes diretamente dentro da função echo
    // Resultado será "Testando repetição por frase " repetido 4 vezes
    echo str_repeat($frase, 4);
?>
