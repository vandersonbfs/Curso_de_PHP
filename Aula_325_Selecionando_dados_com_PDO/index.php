<?php

    // Definindo os parâmetros de conexão com o banco de dados
    $host = "localhost"; // Endereço do servidor MySQL
    $db = "cursophp";    // Nome do banco de dados
    $user = "root";      // Nome de usuário do MySQL
    $pass = "";          // Senha do usuário (vazia neste caso)

    // Criando a conexão com o banco de dados utilizando PDO (PHP Data Objects)
    // A string DSN define o tipo do banco (MySQL), o host e o nome do banco
    $conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);

    // Valor usado como critério para filtrar os itens com id maior que esse valor
    $id = 5;

    // Prepara uma instrução SQL com parâmetro nomeado :id para evitar SQL Injection
    $stmt = $conn->prepare("SELECT * FROM itens WHERE id > :id");

    // Associa a variável $id ao parâmetro nomeado :id
    $stmt->bindParam(":id", $id);

    // Executa a consulta preparada
    $stmt->execute();

    // Recupera a primeira linha do resultado como um array associativo
    // Cada coluna será representada com o nome do campo como chave
    $data = $stmt->fetch(PDO::FETCH_ASSOC);
    
    // Exibe a primeira linha retornada
    print_r($data);

    // Recupera todas as linhas restantes como um array de arrays associativos
    $itens = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Exibe todas as linhas restantes
    print_r($itens);
    
?>
