<?php

    // Definindo a classe Humano (sem atributos ou métodos, por enquanto)
    class Humano {

    }

    // Definindo a classe Animal (também vazia)
    class Animal {

    }

    // Criando uma instância da classe Humano e atribuindo à variável $marcos
    $marcos = new Humano;

    // Criando uma instância da classe Animal e atribuindo à variável $turca
    $turca = new Animal;

    // Verificando se $marcos é uma instância da classe Humano
    if ($marcos instanceof Humano) {
        echo "Marcos é um Humano <br>";
    } else {
        echo "A Marcos não é um Humano <br>";
    }

    // Verificando se $turca é uma instância da classe Humano
    if ($turca instanceof Humano) {
        echo "Turca é um Humano <br>";
    } else {
        echo "A Turca não é um Humano <br>";
    }
