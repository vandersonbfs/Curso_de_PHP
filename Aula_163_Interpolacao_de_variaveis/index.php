<?php

    // O ideal é se manter apenas com uma das sintaxes.
    
    // Declaração de variáveis.
    $nome = "Vanderson"; // A variável $nome é atribuída com o valor "Vanderson"
    $idade = 47;         // A variável $idade é atribuída com o valor 47
    $profissao = "Desenvolvedor"; // A variável $profissao é atribuída com o valor "Desenvolvedor"

    // Primeira forma de exibir variáveis dentro de uma string.
    // Aqui, estamos utilizando a interpolação direta de variáveis dentro da string.
    echo "Eu sou $nome e tenho $idade anos, e atuo como $profissao <br>";
    // Essa linha irá exibir: "Eu sou Vanderson e tenho 47 anos, e atuo como Desenvolvedor"

    // Segunda forma de exibir variáveis dentro de uma string.
    // Neste caso, usamos as chaves `{}` para delimitar as variáveis dentro da string.
    echo "Eu sou {$nome} e tenho {$idade} anos, e atuo como {$profissao} <br>";
    // Essa linha irá exibir a mesma coisa que a anterior: "Eu sou Vanderson e tenho 47 anos, e atuo como Desenvolvedor"

?>

