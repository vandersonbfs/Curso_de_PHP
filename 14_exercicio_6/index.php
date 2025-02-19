<?php
    $carro = [
        'marca' => 'Nissan',
        'modelo' => 'Sentra',
        'ano_fabricacao' => 2017,
        'velocidade_max' => 280,
        'blindado' => false,   
    ];
    print_r($carro);
    echo "<br>";
    $marca = $carro['marca'];
    echo "<br>";
    $velocidade_max = $carro['velocidade_max'];
    echo "<br>";
    echo "O carro é da marca $marca e atinge no maximo $velocidade_max km/h";


?>