<?php

    // Definindo uma trait chamada 'Objeto'
    // Traits são blocos reutilizáveis de métodos que podem ser incluídos em classes
    trait Objeto {
        // Método público que será inserido nas classes que usarem esta trait
        public function teste() {
            echo "Testando trait de objeto <br>";
        }
    }

    // Definindo uma classe chamada 'Central'
    class Central {
        // Incluindo a trait 'Objeto' na classe usando a palavra-chave 'use'
        use Objeto; // Isso faz com que a classe herde o método 'teste()' da trait
    }

    // Criando uma instância da classe Central
    $x = new Central;

    // Chamando o método 'teste()', que foi incluído na classe por meio da trait
    $x->teste(); // Saída: Testando trait de objeto
