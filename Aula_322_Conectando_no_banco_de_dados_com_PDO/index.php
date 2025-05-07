<?php

    // Definindo os parâmetros de conexão com o banco de dados
    $host = "localhost"; // Endereço do servidor MySQL
    $db = "cursophp";    // Nome do banco de dados
    $user = "root";      // Nome de usuário do MySQL
    $pass = "";          // Senha do usuário (vazia neste caso)

    // Criando a conexão com o banco de dados utilizando PDO (PHP Data Objects)
    // A string DSN (Data Source Name) especifica o tipo do banco, o host e o nome do banco
    // O usuário e a senha são passados separadamente
    $conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);

    // (Opcional) Define o modo de erro do PDO para lançar exceções em caso de erro
    // Isso ajuda na identificação de erros durante o desenvolvimento
    // $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Prepara a instrução SQL para inserção de dados na tabela "itens"
    // Utiliza parâmetros nomeados (:nome e :descricao) para evitar SQL Injection
    $stmt = $conn->prepare("INSERT INTO itens (nome, descricao) VALUES (:nome, :descricao)");

    // Define os valores que serão inseridos na tabela
    $nome = "Suporte de monitor"; // Valor para o campo "nome"
    $descricao = "O suporte está novo e na caixa."; // Valor para o campo "descricao"

    // Associa as variáveis aos parâmetros nomeados da instrução SQL
    // bindParam vincula as variáveis por referência (o valor é lido no momento do execute)
    $stmt->bindParam(":nome", $nome);
    $stmt->bindParam(":descricao", $descricao);

    // Executa a instrução preparada com os valores vinculados
    $stmt->execute();

?>

