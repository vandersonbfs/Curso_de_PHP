<?php
    // Cria um array contendo os números de 10 até 45
    $arr = range(10, 45);

    // Inicia um loop for que percorre todos os elementos do array $arr
    for ($i = 0; $i < count($arr); $i++) {

        // Soma 6 ao valor atual do array
        $soma = $arr[$i] + 6;

        // Verifica se o valor somado é maior que 30
        if ($soma > 30) {
            // Se for maior que 30, exibe uma mensagem personalizada
            echo "O número $soma é muito alto! <br>";
        } else {
            // Caso contrário, apenas exibe o valor normalmente
            echo "$soma <br>";
        }
    }
?>
