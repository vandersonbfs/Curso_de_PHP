<?php

// Definição da classe Calculadora
class Calculadora {

    // Método para somar dois números
    public function somar($a, $b) {
        return $a + $b;
    }

    // Método para subtrair o segundo número do primeiro
    public function subtrair($a, $b) {
        return $a - $b;
    }

    // Método para multiplicar dois números
    public function multiplicar($a, $b) {
        return $a * $b;
    }

    // Método para dividir o primeiro número pelo segundo
    public function dividir($a, $b) {
        // Verifica se o divisor é diferente de zero para evitar erro
        if ($b != 0) {
            return $a / $b;
        } else {
            return "Erro: Divisão por zero.";
        }
    }
}

// Exemplo de uso da classe

// Cria um objeto da classe Calculadora
$calc = new Calculadora();

// Testes com os métodos
echo "Soma: " . $calc->somar(10, 5) . "<br>";         // Resultado: 15
echo "Subtração: " . $calc->subtrair(10, 5) . "<br>"; // Resultado: 5
echo "Multiplicação: " . $calc->multiplicar(10, 5) . "<br>"; // Resultado: 50
echo "Divisão: " . $calc->dividir(10, 5) . "<br>";     // Resultado: 2
echo "Divisão por zero: " . $calc->dividir(10, 0) . "<br>";  // Resultado: Erro
