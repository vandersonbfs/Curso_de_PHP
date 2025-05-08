<?php
    // Define uma frase simples separada por espaços
    $frase = "Testando o explode";

    // Usa a função explode para dividir a string $frase onde houver espaços (" ")
    // Resultado será um array: ["Testando", "o", "explode"]
    $fraseArray = explode(" ", $frase);

    // Exibe o array resultante
    print_r($fraseArray);
    echo "<br>";

    // Agora tenta dividir a mesma frase, mas com vírgula como delimitador
    // Como não há vírgulas na string, o resultado será um array com a frase inteira como único elemento
    $fraseArray2 = explode(",", $frase);
    print_r($fraseArray2);
    echo "<br>";

    // Define uma nova frase com palavras separadas por vírgulas e espaços
    $fraseB = "Carro, Avião, Barco Navio";

    // Usa explode para dividir a string onde houver vírgulas
    // Resultado: ["Carro", " Avião", " Barco Navio"]
    // Note que há espaços no início de alguns elementos, pois explode não remove espaços automaticamente
    $fraseBArray = explode(",", $fraseB);

    // Exibe o array resultante da nova frase
    print_r($fraseBArray);
    echo "<br>";
?>
