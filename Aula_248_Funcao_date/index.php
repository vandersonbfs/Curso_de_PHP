<?php

    // Obtém a data atual no formato: dia/mês/ano com dois dígitos (ex: 08/08/25)
    $d = date('d/m/y');

    // Exibe a data formatada com quebra de linha
    echo $d . "<br>";

    // Obtém a data atual no formato: dia, mês abreviado - ano com quatro dígitos (ex: 08, Aug - 2025)
    $d2 = date('d, M - Y');

    // Exibe a data formatada com quebra de linha
    echo $d2 . "<br>";

    // Novamente, obtém a data no mesmo formato do primeiro exemplo
    $d3 = date('d/m/y');

    // Exibe a data
    echo $d3 . "<br>";

    // Obtém a data no formato: dia da semana por extenso, mês por extenso - ano (ex: Friday, August - 2025)
    $d4 = date('l, F - Y');

    // Exibe a data formatada
    echo $d4 . "<br>";
