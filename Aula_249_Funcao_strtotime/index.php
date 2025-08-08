<?php

    // Converte a string "5 days" em um timestamp equivalente à data atual + 5 dias
    $cincodias = strtotime("5 days");

    // Exibe o timestamp (valor numérico representando a data em segundos desde 01/01/1970)
    echo $cincodias . "<br>";

    // Converte "10 days" em timestamp (data atual + 10 dias)
    $dezdias = strtotime("10 days");

    // Exibe o timestamp correspondente aos 10 dias no futuro
    echo $dezdias . "<br>";

    // Formata o timestamp de 5 dias para uma data legível no formato dia/mês/ano (2 dígitos)
    $dataAtualMais5 = date('d/m/y', $cincodias);
    
    // Exibe a data formatada correspondente a hoje + 5 dias
    echo $dataAtualMais5 . "<br>";

    // Converte "2 months" em timestamp (data atual + 2 meses)
    $doismeses = strtotime("2 months");

    // Formata o timestamp para o formato dia/mês/ano (com 4 dígitos no ano)
    $dataAtualMaisDoisMeses = date('d/m/Y', $doismeses);

    // Exibe a data correspondente a hoje + 2 meses
    echo $dataAtualMaisDoisMeses . "<br>";

    // Converte "12 years" em timestamp (data atual + 12 anos)
    $dozeanos = strtotime("12 years");

    // Formata e exibe a data correspondente a hoje + 12 anos
    echo date('d/m/Y', $dozeanos) . "<br>";
