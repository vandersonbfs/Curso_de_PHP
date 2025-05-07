<?php
    // Definindo os parâmetros para a conexão com o banco de dados
    $host = "localhost"; // Endereço do servidor MySQL (geralmente "localhost" em servidores locais)
    $user = "root";      // Nome de usuário do MySQL
    $pass = "";          // Senha do usuário do MySQL (em branco neste caso)
    $db = "cursophp";    // Nome do banco de dados que será acessado

    // Criando uma nova conexão com o banco de dados utilizando a extensão MySQLi
    $conn = new mysqli($host, $user, $pass, $db);

    // Verificando se houve algum erro na conexão
    if ($conn->connect_errno) {
        // Caso haja erro, exibe uma mensagem de erro
        echo "Erro na conexão! <br>";
        // Mostra a descrição do erro retornado pelo MySQL
        echo "Erro: " . mysqli_connect_error();
    }
?>
