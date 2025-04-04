<?php

    // A função header() define o tipo de conteúdo da resposta HTTP.
    // "Content-type: text/plain" define que o conteúdo enviado será tratado como texto simples (sem formatação HTML).
    header("Content-type: text/plain");

    // pular linha
    // A string que está sendo exibida utiliza o caractere especial \n para inserir uma nova linha.
    // O \n cria uma quebra de linha dentro da saída no texto plano.
    echo "Isso aqui vai ficar na primeira linha \n E isso aqui vai ficar na segunda linha. \n ";
    
    // Tab
    // Aqui, o caractere especial \t é utilizado para adicionar uma tabulação (tab) na saída.
    // A tabulação é um espaço maior que o espaço normal (geralmente 4 ou 8 espaços).
    echo "Testando o TAB \t aqui.\n";
    
    // Barra invertida
    // O caractere especial \\ serve para imprimir uma barra invertida literal (\).
    // Em PHP, a barra invertida é usada como um caractere de escape, então para exibir uma barra invertida real, precisamos usar duas barras invertidas.
    echo "Barra invertida \\ \n";
    
    // Dólar
    // O caractere \$ é utilizado para imprimir o símbolo do dólar ($).
    // Em PHP, o símbolo de dólar é utilizado para declarar variáveis, então, para imprimi-lo como um caractere literal, deve-se usar a barra invertida (\) antes do símbolo.
    echo "Imprimindo o dólar \$teste";

?>
  

