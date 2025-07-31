<?php

// Definição da classe Car (Carro)
class Car {
    
    // Propriedades públicas do carro
    public $rodas = 4;          // Número de rodas do carro
    public $aro = 20;           // Tamanho do aro das rodas
    public $cor = "Vermelha";   // Cor padrão do carro

    // Método público para "ligar" o carro
    function ligar() {
        echo "Vrummmm <br>";   // Imprime um som de motor ligado
    }
}

// Criação de um objeto da classe Car chamado $ferrari
$ferrari = new Car;

// Acessando e exibindo o valor da propriedade aro
echo $ferrari->aro . "<br>";    // Exibe: 20

// Acessando e exibindo o valor da propriedade rodas
echo $ferrari->rodas . "<br>";  // Exibe: 4

// Alterando o valor da propriedade cor do objeto $ferrari
$ferrari->cor = "Azul";

// Exibindo o novo valor da cor
echo $ferrari->cor;             // Exibe: Azul

// Chamando o método ligar do objeto $ferrari
echo $ferrari->ligar();         // Exibe: Vrummmm
