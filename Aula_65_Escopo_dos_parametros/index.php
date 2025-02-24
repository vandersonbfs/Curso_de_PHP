<?php
    echo "Como calcular a margem de lucro? <br>";
    echo "<br>";
    $valorCompra = 289;
    $valorVenda = 365;
    $diferencia = $valorVenda - $valorCompra;
    $lucro = $diferencia / $valorVenda;
    $lucro = $lucro * 100;
    echo "Valor de compra: $valorCompra. <br>";
    echo "<br>";
    echo "Valor de venda: $valorVenda <br>";
    echo "<br>";
    echo "Margem de lucro: $lucro%";

    echo "<br>";
    echo "Escopo de parâmetros:";
    echo "<br>";

    function margem($a, $b){
        echo $a - $b;
        echo "<br>";

    }
    margem($valorVenda, $valorCompra);


    