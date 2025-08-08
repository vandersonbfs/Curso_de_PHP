<?php

    // Cria um objeto DateTime com a data e hora atual
    $dataA = new DateTime();

    // Cria outro objeto DateTime também com a data atual
    $dataB = new DateTime();

    // Define uma nova data para o objeto $dataB: 15 de outubro de 2001
    $dataB->setDate(2001, 10, 15);

    // Exibe os dados do objeto $dataA (data atual)
    print_r($dataA);
    echo "<br>";

    // Exibe os dados do objeto $dataB (data alterada para 15/10/2001)
    print_r($dataB);
    echo "<br>";

    // Calcula a diferença entre $dataA e $dataB (objeto DateInterval)
    $diferenca = $dataA->diff($dataB);

    // Exibe o objeto DateInterval com os detalhes da diferença (anos, meses, dias, etc.)
    print_r($diferenca);
    echo "<br>";

    // Formata a diferença para exibir apenas a quantidade total de dias (%a = total de dias)
    echo $diferenca->format("%a days");
    echo "<br>";
