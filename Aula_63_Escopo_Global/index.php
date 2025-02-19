<?php
    $teste = "asd";

    echo "Teste global 1: $teste <br>";

    if(5>2){
        $teste = "DSA";
        echo "Teste IF: $teste <br>";
    }

    echo "Teste global 2: $teste <br>";

    function funcao(){
        $teste = "Função";
        echo "Teste função: $teste <br>";
    }

    funcao();

    function testandoGlobal(){
        global $teste;
        $teste = 2;
        echo "Teste de variável global: $teste <br>";
    }

    testandoGlobal();

    echo "A variável global foi alterada: $teste <br>";