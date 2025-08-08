<?php

    // Cria três objetos DateTime com a data e hora atual
    $dataA = new DateTime();
    $dataB = new DateTime();
    $dataC = new DateTime();

    // Define uma nova data para o objeto $dataB: 10 de outubro de 2022
    $dataB->setDate(2022, 10, 10);

    // Verifica se $dataB é maior (mais recente) que $dataA
    if ($dataB > $dataA ) {
        echo "A data B é maior que a data A <br>";
    }

    // Verifica se $dataA é menor (mais antiga) que $dataB
    if ($dataA < $dataB ) {
        echo "A data A é maior que a data B <br>";
    }

    // Verifica se $dataA e $dataC são exatamente iguais (data e hora)
    if ($dataA == $dataC ) {
        echo "A data A é igual a data C <br>";
    }
