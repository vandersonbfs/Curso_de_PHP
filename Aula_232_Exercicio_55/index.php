<?php

// Definição da classe Carro
class Carro {
    
    // Propriedades públicas do carro
    public $cor;              // Cor do carro
    public $tetoSolar;        // Indica se o carro tem teto solar (true/false ou sim/não)
    public $velocidadeMaxima; // Velocidade máxima do carro

    // Método para definir a velocidade máxima do carro
    function setVelocidadeMaxima($vel) {
        // Atribui o valor do parâmetro $vel à propriedade $velocidadeMaxima do objeto
        $this->velocidadeMaxima = $vel;
    }

    // Método para exibir a velocidade máxima do carro
    function getVelocidadeMaxima() {
        // Imprime a velocidade máxima atual do carro
        echo "A velocidade máxima deste carro é: $this->velocidadeMaxima km/h <br>";
    }
}

// Criação de um objeto da classe Carro chamado $bmw
$bmw = new Carro;

// Define a velocidade máxima do carro usando o método setVelocidadeMaxima
$bmw->setVelocidadeMaxima(200); // Define a velocidade máxima como 200 km/h

// Chama o método para exibir a velocidade máxima do carro
$bmw->getVelocidadeMaxima();    // Saída: A velocidade máxima deste carro é: 200 km/h
