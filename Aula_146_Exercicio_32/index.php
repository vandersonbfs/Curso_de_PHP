<?php

    // Definindo uma função chamada "multiplicacao"
    function multiplicacao() {
        
        // A variável $x é definida com o valor inteiro 5
        $x = 5;
        
        // A variável $y é definida com o valor decimal (float) 4.12
        $y = 4.12;
        
        // A variável $z é definida com o valor inteiro 8
        $z = 8;

        // A variável $resultado armazena o resultado da multiplicação de $x, $y e $z
        // Aqui, 5 * 4.12 * 8 será calculado.
        $resultado = $x * $y * $z;

        // Exibe o valor de $resultado na tela, seguido de uma quebra de linha (<br>)
        echo $resultado . "<br>";
    }

    // Chama a função "multiplicacao", executando o código dentro dela
    multiplicacao();

?>
