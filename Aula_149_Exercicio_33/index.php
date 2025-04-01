<?php

    // Definindo a função "apresentarPessoa", que recebe três parâmetros:
    // $nome, $idade e $genero
    function apresentarPessoa($nome, $idade, $genero) {
        
        // Exibe uma mensagem de saudação, concatenando as variáveis $nome, $idade e $genero
        // na string. O valor de $nome, $idade e $genero será inserido no lugar correspondente
        // dentro da string.
        echo "Olá eu sou $genero $nome e tenho $idade anos <br>";
    }

    // Chama a função "apresentarPessoa", passando os argumentos "Vanderson", 47 e "o" para
    // os parâmetros $nome, $idade e $genero, respectivamente.
    // Isso exibirá: "Olá eu sou o Vanderson e tenho 47 anos"
    apresentarPessoa("Vanderson", 47, "o");

?>
