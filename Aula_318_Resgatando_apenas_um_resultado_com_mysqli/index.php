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

    // Valor do ID do item que será buscado no banco de dados
    $id = 11;

    // Prepara a instrução SQL com um parâmetro (place holder ?) para evitar SQL Injection
    $stmt = $conn->prepare("SELECT * FROM itens WHERE id = ?");

    // Associa o valor da variável $id ao parâmetro da query
    // "i" indica que o parâmetro é do tipo inteiro (integer)
    $stmt->bind_param("i", $id);

    // Executa a instrução preparada
    $stmt->execute();

    // Obtém o resultado da execução da consulta
    $result = $stmt->get_result();

    // Recupera a primeira linha do resultado como um array indexado numericamente
    // fetch_row() retorna um array em que os elementos são acessados por índice (0, 1, 2, ...)
    // Exemplo de retorno: [11, "Cadeira Gamer", "Ergonômica e confortável"]
    $item = $result->fetch_row();

    // Exibe o conteúdo da linha retornada
    print_r($item);

    // Encerra a conexão com o banco de dados
    $conn->close();
?>
