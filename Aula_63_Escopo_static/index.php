<?php
    echo "Variável Estática <br>";
    echo "Avariável é declarada com a instrução static. <br>";
    echo "O valor da mesma é mantido e alterado a cada execução de uma função. <br>";
    echo "É interessante este comportamento pois as variáveis de escopo local sempre são resetadas. <br>";

    echo " <br>";

    function teste(){
        $a = 0;
        $a++;
        echo "$a <br>";
    }
    teste();
    teste();
    teste();
    echo "Funçõa com static <br>";
    function testeStatic(){
        static $a = 0;
        $a++;
        echo "$a <br>";
    }
    testeStatic();
    testeStatic();
    testeStatic();

?>