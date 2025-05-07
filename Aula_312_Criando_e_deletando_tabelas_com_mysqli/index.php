<?php
    // Definindo os parâmetros de conexão com o banco de dados
    $host = "localhost"; // Endereço do servidor MySQL
    $user = "root";      // Usuário do banco de dados
    $pass = "";          // Senha do usuário (vazia nesse caso)
    $db = "cursophp";    // Nome do banco de dados a ser utilizado

    // Criando a conexão com o banco usando a classe mysqli
    $conn = new mysqli($host, $user, $pass, $db);

    // Assunto da aula
    $sql = "CREATE TABLE teste (nome VARCHAR(100), sobre nome VARCHAR(100))";

    $conn->query($sql);

    $conn->close();


?>