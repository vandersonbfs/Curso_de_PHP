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

    // Assunto da aula: exclusão de item com base no nome

    $nome = "teste"; // Nome do item que será removido da tabela

    // Prepara a instrução SQL para deletar um item com nome igual ao valor de $nome
    // CORREÇÃO: a instrução SQL precisa estar entre aspas
    $stmt = $conn->prepare("DELETE FROM itens WHERE nome = ?");

    // Associa o valor de $nome ao parâmetro da consulta
    // "s" indica que o parâmetro é do tipo string
    $stmt->bind_param("s", $nome);

    // Executa a query preparada
    $stmt->execute();

    // (Opcional) Verifica se algum registro foi realmente deletado
    if ($stmt->affected_rows > 0) {
        echo "Item deletado com sucesso.";
    } else {
        echo "Nenhum item encontrado com esse nome.";
    }

    // Encerra a conexão com o banco de dados
    $conn->close();
?>
