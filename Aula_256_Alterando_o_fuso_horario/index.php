<?php

    // Define o fuso horário padrão como "America/Sao_Paulo"
    // Isso garante que todas as funções de data/hora usem o horário de São Paulo
    date_default_timezone_set('America/Sao_Paulo');

    // Corrigido: cria um novo objeto DateTime com a data e hora atual com base no fuso horário definido
    $data = new DateTime();

    // Exibe a estrutura completa do objeto DateTime (contendo data, hora, fuso horário, etc.)
    print_r($data);

    // Adiciona uma quebra de linha após a impressão do objeto
    echo "<br>";
