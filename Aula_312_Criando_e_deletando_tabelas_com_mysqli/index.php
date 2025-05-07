<?php
    // Definindo os parâmetros de conexão com o banco de dados
    $host = "localhost"; // Endereço do servidor MySQL (geralmente "localhost" em ambiente local)
    $user = "root";      // Nome de usuário do MySQL
    $pass = "";          // Senha do MySQL (vazia neste caso)
    $db = "cursophp";    // Nome do banco de dados a ser utilizado

    // Criando a conexão com o banco de dados usando a extensão mysqli
    $conn = new mysqli($host, $user, $pass, $db);

    // Verifica se houve erro na conexão
    if ($conn->connect_error) {
        die("Erro na conexão: " . $conn->connect_error);
    }

    // Assunto da aula: criação de tabela no banco de dados
    $sql = "CREATE TABLE teste (nome VARCHAR(100), sobrenome VARCHAR(100))"; 
    // Cria a tabela "teste" com duas colunas: nome e sobrenome, ambas do tipo texto com até 100 caracteres

    // Linha comentada abaixo poderia ser usada para deletar a tabela, se necessário
    //$sql = "DROP TABLE teste";

    // Executa a query definida na variável $sql
    $conn->query($sql);

    // Fecha a conexão com o banco de dados
    $conn->close();
?>
