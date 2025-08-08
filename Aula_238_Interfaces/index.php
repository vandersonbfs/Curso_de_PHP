<?php

    // Definindo uma interface chamada 'Caracteristicas'
    interface Caracteristicas {
        // Método que toda classe que implementar esta interface deve definir
        public function falar();

        // Constante disponível para qualquer classe que implemente esta interface
        const nome = "Vanderson";
    }

    // A classe 'Humano' implementa a interface 'Caracteristicas'
    class Humano implements Caracteristicas {
        // Atributo público da classe
        public $idade = 29;

        // Implementação obrigatória do método falar() da interface
        public function falar() {
            echo "Olá mundo! <br>";
        }

        // Método que usa a constante definida na interface
        public function dizerNome() {
            // Acessa a constante 'nome' usando 'self::', já que ela foi herdada da interface
            echo "Meu nome é " . self::nome . "<br>";
        }
    }

    // Criando um objeto da classe Humano
    $matheus = new Humano;

    // Chamando o método falar() do objeto
    $matheus->falar(); // Saída: Olá mundo!

    // Chamando o método que imprime o nome vindo da constante da interface
    $matheus->dizerNome(); // Saída: Meu nome é Vanderson
