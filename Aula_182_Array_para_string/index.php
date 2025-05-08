<?php
    // Cria um array com alguns itens de frutas e vegetais
    $arr = ["Maçã", "Pera", "Mamão", "Batata"];

    // Converte o array em uma string, separando os elementos por vírgula e espaço
    // Resultado: "Maçã, Pera, Mamão, Batata"
    $str = implode(", ", $arr);

    // Exibe a string resultante
    echo "$str <br>";

    // Cria um segundo array com itens militares
    $arr2 = ["Avião", "Tanque", "Jipe", "Metralhadora"];

    // Converte esse array em uma string, separando os elementos por " <-> "
    // Resultado: "Avião <-> Tanque <-> Jipe <-> Metralhadora"
    $str2 = implode(" <-> ", $arr2);

    // Exibe a segunda string resultante
    echo "$str2 <br>";
?>
