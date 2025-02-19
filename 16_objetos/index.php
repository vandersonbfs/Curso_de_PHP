<?php
    class Pessoa {
        function falar(){
            echo "Olá pessoal!";
        }
    }

    $vanderson = new Pessoa();

    $vanderson->nome = "Vanderson";

    echo $vanderson->nome;

    echo "<br>";

    $vanderson->falar();
    

?>