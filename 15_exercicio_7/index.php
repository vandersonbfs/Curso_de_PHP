<?php

    $pessoa = [
        'nome' => 'Vanderson',
        'idade' => 47,
        'profissao' => 'Desenvolvedor',
        'graduacao' => 'Analise e desenvolvimento de sistemas'
    ];

    //Desafio
    $nome = $pessoa['nome'];
    if($pessoa['idade'] >= 18){
        echo " $nome é maior de idade!";
    }
?>