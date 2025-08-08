<?php

    // Definição da classe 'Humano'
    class Humano {
        // Método público chamado 'falar' que imprime "Olá"
        public function falar(){
            echo "Olá";
        }
    }

    // Criação de uma instância da classe Humano e atribuição à variável $matheus
    $matheus = new Humano;

    // Criação de uma variável comum com valor inteiro
    $teste = 10;

    // Verifica se $matheus é um objeto
    if (is_object($matheus)) {
        echo "É um objeto <br>"; // Será exibido, pois $matheus é um objeto da classe Humano
    } else {
        echo "Não é um objeto <br>";
    }

    // Verifica se $teste é um objeto
    if (is_object($teste)) {
        echo "É um objeto <br>";
    } else {
        echo "Não é um objeto <br>"; // Será exibido, pois $teste é apenas um número (int)
    }

    // Exibe o nome da classe do objeto $matheus
    echo get_class($matheus) . "<br>"; // Resultado: Humano

    // Verifica se o método 'falar' existe na classe do objeto $matheus
    if (method_exists($matheus, "falar")) {
        echo "O método existe <br>"; // Será exibido, pois o método 'falar' está definido na classe
    } else {
        echo "O método não existe <br>";
    }
