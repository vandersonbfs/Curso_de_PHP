<?php

// Definição da classe Pessoa
class Pessoa {
    
    // Propriedades públicas da classe Pessoa
    public $nome;   // Armazena o nome da pessoa
    public $idade;  // Armazena a idade da pessoa

    // Método andar que recebe uma distância em metros como parâmetro
    function andar($m) {
        // Imprime a mensagem informando quantos metros a pessoa andou
        echo "A pessoa andou $m metros <br>";
    }
}

// Criação de um objeto da classe Pessoa
$pessoa = new Pessoa;

// Definindo valores para as propriedades do objeto
$pessoa->nome = "Matheus";  // Define o nome como "Matheus"
$pessoa->idade = 29;        // Define a idade como 29

// Exibindo as informações da pessoa
echo "O nome dele é $pessoa->nome e tem $pessoa->idade anos <br>";

// Chamando o método andar com valor 20
$pessoa->andar(20);         // Exibe: A pessoa andou 20 metros


    