<?php

    // Definindo a classe Humano
    class Humano {
        // Atributo público: acessível de qualquer lugar
        public $idade = 29;

        // Método público: pode ser acessado de fora da classe
        public function falar() {
            echo "Olá Mundo!";
        }

        // Método privado: só pode ser acessado dentro da própria classe
        private function gritar() {
            echo "PHP É MUITO BOM! <br>";
        }

        // Método público que acessa o método privado gritar()
        public function acessarGritar() {
            // Isso funciona porque está dentro da mesma classe
            $this->gritar();
        }

        // Método protegido: acessível apenas pela própria classe ou classes filhas
        protected function falarBaixinho() {
            echo "lalalala <br>";
        }

        // Método público que acessa o método protegido falarBaixinho()
        public function acessarFalarBaixinho() {
            $this->falarBaixinho();
        }
    }

    // Classe Programador herda de Humano
    class Programador extends Humano {
        // Não define novos métodos ou atributos, mas herda todos os públicos e protegidos
    }

    // Criando uma instância da classe Humano
    $ze = new Humano;

    // Chamando método público diretamente
    $ze->falar();

    // Chamando métodos públicos que acessam métodos privados e protegidos
    $ze->acessarGritar();
    $ze->acessarFalarBaixinho();

    // Criando uma instância da classe Programador (filha de Humano)
    $matheus = new Programador;

    // Acessando atributo público herdado da classe Humano
    echo $matheus->idade . "<br>";

    // Acessando método público herdado
    $matheus->falar();

    // Acessando métodos públicos que indiretamente acessam métodos protegidos/privados
    $matheus->acessarGritar();
    $matheus->acessarFalarBaixinho();
