<?php

    // Definição da classe Cachorro
    class Cachorro {
        // Atributos públicos da classe
        public $nome;
        public $cor;
        public $patas;

        // Método construtor, chamado automaticamente ao criar um novo objeto
        function __construct($nome, $cor, $patas){
            // Inicializa os atributos com os valores passados como parâmetro
            $this->nome = $nome;
            $this->cor = $cor;
            $this->patas = $patas;
        }
        
        // Método público que exibe as informações do cachorro
        public function exibirAnimal() {
            // Imprime uma frase com os dados do cachorro
            echo "O nome do cachorro é $this->nome, ele tem a cor $this->cor, e tem $this->patas patas;";
        }    
        
    }

    // Criação de um novo objeto da classe Cachorro com os valores especificados
    $turca = new Cachorro("Turca","Preta", 4);

    // Chamada do método para exibir as informações do objeto criado
    $turca->exibirAnimal();
