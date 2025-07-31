<?php

// Definição da classe Pessoa
class Pessoa {
    
    // Método da classe Pessoa chamado 'falar'
    // Quando chamado, este método imprime uma mensagem na tela
    function falar() {
        echo "Olá, eu sou um objeto! <br>";
    }
}

// Criação de um objeto da classe Pessoa chamado $matheus
$matheus = new Pessoa;

// Chamada do método 'falar' no objeto $matheus
// Isso irá exibir a mensagem definida dentro do método
$matheus->falar();
