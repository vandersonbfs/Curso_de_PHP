<?php
    // Definindo os parâmetros de conexão com o banco de dados
    $host = "localhost"; // Endereço do servidor MySQL (geralmente "localhost" em ambiente local)
    $user = "root";      // Nome de usuário do MySQL
    $pass = "";          // Senha do usuário (vazia neste caso)
    $db = "cursophp";    // Nome do banco de dados que será utilizado

    // Criando a conexão com o banco de dados utilizando a extensão mysqli
    $conn = new mysqli($host, $user, $pass, $db);

    // Verifica se ocorreu algum erro na conexão
    if ($conn->connect_error) {
        // Encerra o script e exibe uma mensagem de erro, caso a conexão falhe
        die("Erro na conexão: " . $conn->connect_error);
    }

    // Valor do ID do item que será atualizado no banco de dados
    $id = 11;

    // Prepara a instrução SQL para atualizar os campos "nome" e "descricao" de um item específico
    // OBS: A vírgula após "descricao = ?" foi removida, pois causaria erro de sintaxe
    $stmt = $conn->prepare("UPDATE itens SET nome = ?, descricao = ? WHERE id = ?");

    // Novos valores para o item
    $nome = "Sofá"; // Novo nome do item
    $descricao = "Sofá semi novo, com madeira de demolição."; // Nova descrição do item

    // Associa os valores às variáveis da query preparada
    // "ssi" indica os tipos dos parâmetros: string, string, inteiro
    $stmt->bind_param("ssi", $nome, $descricao, $id);

    // Executa a query
    $stmt->execute();

    // Verifica se houve erro na execução da query
    if ($stmt->error) {
        // Exibe a mensagem de erro, se houver
        echo "Erro: " . $stmt->error;
    }

    // (Opcional) Fechar o statement e a conexão
    $stmt->close();
    $conn->close();
?>
