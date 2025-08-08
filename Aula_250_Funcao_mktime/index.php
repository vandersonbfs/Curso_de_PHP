<?php

    // Cria um timestamp com base em uma data específica usando mktime:
    // mktime(hora, minuto, segundo, mês, dia, ano)
    // Neste caso: 02:12:33 da manhã do dia 05/02/1991
    $dataNascimento = mktime(02, 12, 33, 02, 05, 1991);

    // Exibe o timestamp gerado (quantidade de segundos desde 01/01/1970 até essa data)
    echo $dataNascimento . "<br>";

    // Formata o timestamp para uma data legível no formato dia/mês/ano
    $dataNascimentoFormatada = date('d/m/Y', $dataNascimento);

    // Exibe a data formatada: 05/02/1991
    echo $dataNascimentoFormatada . "<br>";
