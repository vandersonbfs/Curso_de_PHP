<?php

    // Criação de uma instância de uma classe anônima (sem nome) e atribuição à variável $pessoa
    $pessoa = new class() {
        
        // Atributo público 'nome' com valor inicial "Matheus"
        public $nome = "Matheus";

        // Método público que exibe uma mensagem com o nome da pessoa
        public function dizerNome(){
            // Exibe o nome usando a variável interna $this->nome
            echo "Olá meu nome é $this->nome <br>"; // <-- Correção: faltava o ponto e vírgula aqui
        }

    };

    // Exibe diretamente o valor do atributo 'nome' do objeto $pessoa
    echo $pessoa->nome . "<br>";

    // Chama o método 'dizerNome' do objeto $pessoa
    $pessoa->dizerNome();
