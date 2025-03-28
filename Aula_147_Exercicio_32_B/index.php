<?php

    // Definindo uma função chamada "fullName"
    function fullName() {
        
        // A variável $firstName é definida com o valor "Vanderson"
        $firstName = "Vanderson";
        
        // A variável $lastName é definida com o valor "Batista"
        $lastName = "Batista";

        // Exibe o nome completo concatenando as variáveis $firstName e $lastName
        // O operador "." é utilizado para concatenar as strings, e um espaço (" ") é adicionado entre
        // o primeiro e o sobrenome para separar os dois nomes.
        echo $firstName . " " . $lastName;
    }

    // Chama a função "fullName", o que resulta na execução do código dentro dela
    fullName();

?>
