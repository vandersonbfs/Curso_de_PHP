<?php

    // Cria um novo objeto DateTime com a data e hora atual
    $data = new DateTime();

    // Exibe a data atual no formato: dia/mês/ano (com dois dígitos no ano)
    echo $data->format('d/m/y') . "<br>";

    // Exibe a data atual no formato: dia da semana abreviado - mês abreviado - ano completo
    echo $data->format('D - M - Y') . "<br>";

    // Modifica a data adicionando 5 dias à data atual
    $data->modify('+5 days');

    // Exibe a nova data (após adicionar 5 dias) no formato: dia/mês/ano
    echo $data->format('d/m/y') . "<br>";

    // Modifica a data adicionando 2 meses à data atual (já com os 5 dias somados)
    $data->modify('+2 months');
    
    // Exibe a nova data (após adicionar os 2 meses) no mesmo formato
    echo $data->format('d/m/y') . "<br>";
