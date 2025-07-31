<?php

// Definição da classe Cachorro
class Cachorro {

    // Método latir - imprime o som que o cachorro faz
    function latir() {
        echo "Au au <br>";
    }

    // Método andar - recebe uma distância em metros e imprime quantos metros o cachorro andou
    function andar($m) {
        echo "O cachorro andou $m metros <br>";
    }
}

// Criação de dois objetos (instâncias) da classe Cachorro
$viraLata = new Cachorro;       // Objeto representando um cachorro vira-lata
$pastorAlemao = new Cachorro;   // Objeto representando um cachorro da raça Pastor Alemão

// Chamada do método latir para ambos os cachorros
$viraLata->latir();         // Exibe: Au au
$pastorAlemao->latir();     // Exibe: Au au

// Chamada do método andar com diferentes distâncias
$viraLata->andar(1000);     // Exibe: O cachorro andou 1000 metros
$pastorAlemao->andar(50);   // Exibe: O cachorro andou 50 metros
