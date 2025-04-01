<?php

    // Definindo a função "velocidadeMaxima" que recebe um parâmetro $vel
    function velocidadeMaxima($vel) {
        
        // Verifica se o valor de $vel é um número inteiro
        if (is_int($vel)) {
            // Se for um número inteiro, exibe a velocidade máxima do carro
            echo "O carro atinge a velocidade máxima de $vel km/h <br>";
        } else {
            // Se não for um número inteiro, exibe uma mensagem de erro
            echo "Por favor, digite um número inteiro.";
        }
    }

    // Chamadas da função "velocidadeMaxima" passando valores inteiros como argumentos
    velocidadeMaxima(300);  // Exibe a mensagem com 300 km/h
    velocidadeMaxima(200);  // Exibe a mensagem com 200 km/h
    velocidadeMaxima(400);  // Exibe a mensagem com 400 km/h

    // Exibe uma mensagem indicando que o teste continua
    echo "Teste continuando <br>";

    // Define a variável $velocidade com o valor 125
    $velocidade = 125;

    // Chama a função "velocidadeMaxima" passando a variável $velocidade
    // Como $velocidade é um número inteiro, a mensagem será exibida corretamente
    velocidadeMaxima($velocidade);

?>
