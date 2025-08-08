<?php

    // Definição da classe Humano
    class Humano {
        // Atributos públicos da classe
        public $idade;
        public $nome;
        public $profissao;

        // Método público chamado 'falar' (ainda sem implementação)
        public function falar(){}

        // Método público chamado 'andar' (nota: estava com erro de digitação: "functionandar")
        public function andar(){}  // <-- Corrigido aqui o nome do método
    }

    // Verifica se a classe 'Humano' foi definida
    if (class_exists("Humano")) {
        // Se a classe existir, imprime a mensagem
        echo "A classe existe <br>";    
    }

    // Obtém e imprime um array com os atributos (variáveis) públicos da classe 'Humano'
    print_r(get_class_vars("Humano"));
