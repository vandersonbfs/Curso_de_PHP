<?php
    // Define uma string com a palavra "Testando"
    $palavra = "Testando";

    // Inverte a string usando a função strrev()
    // Resultado será "odnatseT"
    $palavraInvertida = strrev($palavra);

    // Exibe a palavra original seguida de uma quebra de linha
    echo "$palavra <br>";

    // Exibe a palavra invertida ("odnatseT")
    echo "$palavraInvertida <br>";

    // Define uma nova frase mais longa
    $frase = "O programador estava com o prazo curto para fazer o sistema";

    // Aqui há um pequeno erro: está invertendo novamente a variável $palavra,
    // e não a nova frase $frase. Isso resultará em "odnatseT" novamente.
    $fraseInvertida = strrev($palavra); 

    // Exibe o valor de $fraseInvertida, que erroneamente é "odnatseT" de novo
    echo "$fraseInvertida <br>";
?>
