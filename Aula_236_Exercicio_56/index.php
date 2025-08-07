<?php

    // Definindo a classe base 'Humano'
    class Humano {
        // Atributos públicos: podem ser acessados de qualquer lugar
        public $maos = 2;
        public $pernas = 2;

        // Método público que imprime uma mensagem
        public function falar() {
            echo "Olá, eu sou um humano <br>";
        }
    }

    // A classe 'Professor' herda da classe 'Humano'
    class Professor extends Humano {
        // Novo atributo específico da classe Professor
        public $disciplina = "Matemática";

        // Método que imprime o que o professor está fazendo
        public function estaLecionando() {
            // Usa o atributo $disciplina da própria classe
            echo "O professor está dando aula de $this->disciplina <br>";
        }
    }

    // Criando um objeto da classe Humano
    $marcos = new Humano;

    // Acessando atributo público diretamente
    echo "$marcos->maos <br>"; // Mostra: 2

    // Chamando método da classe Humano
    $marcos->falar(); // Mostra: Olá, eu sou um humano

    // Criando um objeto da classe Professor (que herda de Humano)
    $joao = new Professor;

    // Acessando atributo herdado da classe Humano
    echo "$joao->pernas <br>"; // Mostra: 2

    // Acessando atributo específico da classe Professor
    echo "$joao->disciplina <br>"; // Mostra: Matemática

    // Chamando método herdado da classe Humano
    $joao->falar(); // Mostra: Olá, eu sou um humano

    // Chamando método específico da classe Professor
    $joao->estaLecionando(); // Mostra: O professor está dando aula de Matemática
