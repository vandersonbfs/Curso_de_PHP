<?php

    // Definindo os parâmetros de conexão com o banco de dados
    $host = "localhost"; // Endereço do servidor MySQL
    $db = "cursophp";    // Nome do banco de dados
    $user = "root";      // Nome de usuário do MySQL
    $pass = "";          // Senha do usuário (vazia neste caso)

    // Criando a conexão com o banco de dados utilizando PDO (PHP Data Objects)
    // OBS: Correção feita na string DSN e na passagem de parâmetros
    // A string DSN deve conter apenas os dados do host e do banco; o usuário e a senha são passados separadamente
    $conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);

    // Dica adicional (opcional): configurar o modo de erro para exceção
    // $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>
