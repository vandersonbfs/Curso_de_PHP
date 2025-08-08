<?php

    // Cria um novo objeto DateTime com a data e hora atual
    $data = new DateTime();

    // Exibe a estrutura completa do objeto DateTime (inclui data, hora, timezone, etc.)
    print_r($data);
    echo "<br>";

    // Define uma nova data: 01 de dezembro de 1999 (mantendo a hora anterior)
    $data->setDate(1999, 12, 01);

    // Exibe novamente o objeto DateTime após a alteração da data
    print_r($data);
    echo "<br>";

    // Define uma nova hora: 05:12:10 (mantendo a data já alterada)
    $data->setTime(05, 12, 10);

    // Exibe o objeto DateTime após a alteração da hora
    print_r($data);
    echo "<br>";

    // Formata e exibe a data atual do objeto no formato: dia/mês/ano (com dois dígitos no ano)
    echo $data->format('d/m/y') . "<br>";
