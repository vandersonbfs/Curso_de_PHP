<?php

// Definição da classe Animal
Class Animal {
    
    // Propriedade pública que armazenará o nome do animal
    public $nome;

    // Método que permite definir o nome do animal
    function escolherNome($nome) {
        // A palavra-chave $this se refere ao objeto atual
        // Aqui, estamos atribuindo o valor do parâmetro $nome à propriedade $nome do objeto
        $this->nome = $nome;
    }
}

// Criação de um objeto da classe Animal
$cachorro = new Animal;

// Chamando o método escolherNome para definir o nome do animal como "Frida"
$cachorro->escolherNome("Frida");

// Exibindo o nome do animal na tela
echo "O nome do animal é: $cachorro->nome <br>";  // Saída: O nome do animal é: Frida
