<?php
$arr = [10, 20, 30,40, 50, 60, 70, 80, 90, 100];
$a = 0;

while ($a <count($arr)) {

        $numeroAtual = $arr[$a];
       if ($numeroAtual == 30 || $numeroAtual == 40) {
        echo "Pulou a execução em $numeroAtual <br>";
        $a++;
        continue;
    }
    echo "Elemento: $numeroAtual <br>";
    $a++;

}