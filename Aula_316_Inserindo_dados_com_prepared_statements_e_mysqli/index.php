<?php
    // Definindo os parâmetros de conexão com o banco de dados
    $host = "localhost"; // Endereço do servidor MySQL (normalmente "localhost" em ambiente local)
    $user = "root";      // Nome de usuário do MySQL
    $pass = "";          // Senha do usuário do MySQL (vazia neste caso)
    $db = "cursophp";    // Nome do banco de dados a ser utilizado

    // Criando a conexão com o banco de dados usando a extensão mysqli
    $conn = new mysqli($host, $user, $pass, $db);

    // Verifica se houve erro na conexão
    if ($conn->connect_error) {
        // Exibe a mensagem de erro e encerra o script caso a conexão falhe
        die("Erro na conexão: " . $conn->connect_error);
    }

    // Dados que serão inseridos na tabela 'itens'
    $nome = "Suporte de microfone"; // Nome do item
    $descricao = "O suporte é novo e foi fabricado na China."; // Descrição do item

    // Preparando a instrução SQL para inserção com parâmetros (uso de prepared statement)
    $stmt = $conn->prepare("INSERT INTO itens (nome, descricao) VALUES (?, ?)");

    // Faz o bind dos parâmetros na instrução SQL preparada
    // "ss" indica que ambos os parâmetros são do tipo string
    $stmt->bind_param("ss", $nome, $descricao);

    // Executa a instrução SQL com os valores vinculados
    $stmt->execute();

    // (Opcional) Fechar a declaração e a conexão ao final do uso
    // $stmt->close();
    $conn->close();
?>
