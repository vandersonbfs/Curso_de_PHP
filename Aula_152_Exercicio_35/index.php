<?php

    // Define uma função chamada 'numAoQuadrado' que recebe um parâmetro $x
    function numAoQuadrado($x){
        // Dentro da função, calcula o quadrado de $x utilizando o operador de exponenciação '**'
        $resultado = $x ** 2;
        // Retorna o valor do quadrado de $x
        return $resultado;
    }

    // Chama a função 'numAoQuadrado' passando o valor 2 e imprime o resultado.
    // O resultado será 4, pois 2 elevado ao quadrado (2^2) é 4.
    echo numAoQuadrado(2) . "<br>";

    // Chama a função 'numAoQuadrado' passando o valor 4 e armazena o resultado na variável $num.
    // O resultado será 16, pois 4 elevado ao quadrado (4^2) é 16.
    $num = numAoQuadrado(4);
    // Imprime o valor armazenado em $num, que é 16.
    echo $num . "<br>";

?>

