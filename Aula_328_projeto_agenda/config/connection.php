<?php

    // Endereço do servidor de banco de dados (neste caso, o próprio computador)
    $host = "localhost";

    // Nome do banco de dados que será utilizado
    $dbname = "agenda";

    // Usuário do banco de dados
    $user = "root";

    // Senha do banco de dados (vazia no ambiente local)
    $pass = "";

    // Bloco try: tenta executar a conexão com o banco de dados
    try{

        // Cria uma nova conexão PDO com o MySQL usando os dados informados
        $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);

    // Bloco catch: é executado se ocorrer algum erro na conexão
    }catch(PDOException $e){

        // Captura a mensagem de erro gerada pelo PDO
        $error = $e->getMessage();

        // Exibe a mensagem de erro na tela
        echo "Erro:  $error";
    }
