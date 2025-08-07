<?php

    // Definindo a classe Car
    class Car {
        // Atributo público: pode ser acessado de qualquer lugar
        public $rodas = 4;

        // Atributo privado: só pode ser acessado dentro da própria classe
        private $vidros = "Sem película";

        // Atributo protegido: pode ser acessado dentro da classe e por classes filhas
        protected $portas = 4;

        // Método público para acessar o valor do atributo privado $vidros
        public function getVidro() {
            return $this->vidros;
        }

        // Método público para acessar o valor do atributo protegido $portas
        public function getPortas() {
            return $this->portas;
        }
    }

    // Definindo a classe Mecanico
    class Mecanico {
        // Método que altera o número de rodas de um carro
        public function alterarRodas($carro) {
            $carro->rodas = 10;
        }

        // Método que tenta alterar o valor de $vidros diretamente (mas isso não funcionará como esperado)
        public function colocarPelicula($carro, $pelicula) {
            // Aqui é criado um novo atributo 'vidro' (com nome diferente e sem acesso ao original 'vidros')
            $carro->vidro = $pelicula; // Não afeta o atributo privado original
        }
    }

    // Criando um objeto da classe Car
    $carro = new Car;

    // Exibindo o número de rodas do carro (valor inicial: 4)
    echo $carro->rodas . "<br>";

    // ERRO: variável $matheus não foi definida como instância de Mecanico
    // Correção: criar o mecânico antes de chamar o método
    $matheus = new Mecanico;

    // Chamando o método para alterar o número de rodas do carro
    $matheus->alterarRodas($carro);

    // Exibindo novamente o número de rodas (agora: 10)
    echo $carro->rodas . "<br>";

    // Usando método getter para acessar o atributo privado $vidros
    echo $carro->getVidro() . "<br>"; // Ainda será "Sem película"

    // Usando método getter para acessar o atributo protegido $portas
    echo $carro->getPortas() . "<br>"; // Mostra 4
