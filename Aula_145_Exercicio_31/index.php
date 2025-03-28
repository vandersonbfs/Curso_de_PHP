<?php

    // Define um array com 5 elementos de texto
    $arr = ["Teste", "Olá", "Balão", "Janela", "Planta"];

    // Usa a função "implode" para unir todos os elementos do array em uma única string.
    // O primeiro parâmetro (", ") especifica o separador entre os elementos. Neste caso, 
    // os elementos do array serão separados por uma vírgula e um espaço.
    $teste = implode(", ", $arr);

    // Exibe a string resultante, que agora é composta pelos elementos do array, separados por vírgula
    echo $teste;

?>
 