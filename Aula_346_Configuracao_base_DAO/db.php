<?php

    // Nome do banco de dados que será utilizado
    $db = "daotest";

    // Endereço do servidor do banco de dados (localhost = servidor local)
    $host = "localhost";

    // Usuário do banco de dados
    $user = "root";

    // Senha do usuário do banco de dados (vazia no ambiente local)
    $pass = "";

    // Cria uma nova conexão com o banco de dados usando PDO
    // mysql:dbname=$db;host=$host define o driver, banco e servidor
    // $user e $pass são as credenciais de acesso
    $conn = new PDO("mysql:dbname=$db;host=$host", $user, $pass);
