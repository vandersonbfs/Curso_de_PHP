<?php

    // Definindo os parâmetros de conexão com o banco de dados
    $host = "localhost"; // Endereço do servidor MySQL
    $db = "cursophp";    // Nome do banco de dados
    $user = "root";      // Nome de usuário do MySQL
    $pass = "";          // Senha do usuário (vazia neste caso)

    // Criando a conexão com o banco de dados utilizando PDO (PHP Data Objects)
    // A string DSN (Data Source Name) define o tipo de banco de dados, o host e o nome do banco
    // O nome de usuário e a senha são passados como segundo e terceiro argumentos do PDO
    $conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);

    // Valores que serão usados na atualização do registro
    $id = 5; // ID do item que será atualizado
    $nome = "Teclado MicroSoft"; // Novo valor para o campo "nome"
    $descricao = "Este teclado é novo e está na caixa."; // Novo valor para o campo "descricao"

    // Prepara a instrução SQL para atualizar um item na tabela "itens"
    // Utiliza parâmetros nomeados (:id, :nome, :descricao) para segurança e clareza
    $stmt = $conn->prepare("UPDATE itens SET nome = :nome, descricao = :descricao WHERE id = :id");

    // Associa as variáveis aos parâmetros nomeados
    // bindParam liga a variável por referência, ou seja, o valor é lido no momento em que execute() é chamado
    $stmt->bindParam(":id", $id);
    $stmt->bindParam(":nome", $nome);
    $stmt->bindParam(":descricao", $descricao);

    // Executa a instrução preparada para aplicar a atualização no banco de dados
    $stmt->execute();

?>
