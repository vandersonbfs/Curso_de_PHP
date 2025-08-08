<?php

    // Definindo uma classe abstrata chamada 'Teste'
    // Classes abstratas **não podem ser instanciadas diretamente**
    abstract class Teste {

        // Método estático concreto (com implementação)
        // Pode ser chamado diretamente pela classe, sem precisar de um objeto
        public static function testandoClasse() {
            echo "Este método é de uma classe abstrata <br>";
        }

        // Método abstrato: apenas declarado, sem implementação
        // As classes que estendem esta classe DEVEM implementá-lo
        abstract public function testeAbs();
    }

    // Chamando o método estático da classe abstrata diretamente
    Teste::testandoClasse(); // Saída: Este método é de uma classe abstrata

    // Criando uma nova classe chamada 'Nova' que estende a classe abstrata 'Teste'
    class Nova extends Teste {
        // Implementando o método abstrato obrigatório
        public function testeAbs() {
            echo "teste método abstrato <br>";
        }
    }

    // Criando uma instância da classe Nova
    $n = new Nova;

    // Chamando o método implementado
    $n->testeAbs(); // Saída: teste método abstrato
