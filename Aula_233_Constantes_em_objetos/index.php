<?php

    // Definindo a classe 'Humano'
    class Humano {
        // Definindo constantes da classe: todos os humanos têm 2 olhos, 2 braços e 2 pernas
        public const OLHOS = 2;
        public const BRAÇOS = 2;
        public const PERNAS = 2;

        // Método da classe que exibe o valor da constante BRAÇOS
        function mostrarConstante() {
            // 'self::' é usado para acessar constantes da própria classe
            echo self::BRAÇOS . "<br>";
        }
    }

    // Criando uma instância da classe Humano
    $matheus = new Humano;

    // Acessando e exibindo a constante OLHOS diretamente pela instância
    // Obs: Embora não seja a forma mais comum, é possível acessar constantes com '::$constante' via objeto
    echo $matheus::OLHOS . "<br>";

    // Chamando o método mostrarConstante da instância para exibir a constante BRAÇOS
    $matheus->mostrarConstante();
