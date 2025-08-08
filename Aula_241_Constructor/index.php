<?php

    // Definindo a classe 'Car'
    class Car {
        // Atributos públicos que representam características do carro
        public $portas;
        public $cor;
        public $marca;

        // Método construtor da classe, chamado automaticamente ao criar um novo objeto
        function __construct($portas, $cor, $marca) {
            // Atribuindo os valores passados aos atributos do objeto
            $this->portas = $portas;
            $this->cor = $cor;
            $this->marca = $marca;
        }
    }

    // Criando um objeto da classe Car com os valores fornecidos
    $ferrari = new Car(4, "Vermelha", "Ferrari");

    // Exibindo informações sobre o carro utilizando os atributos do objeto
    echo "O carro é da marca $ferrari->marca e tem a cor $ferrari->cor <br>";
