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
        // Encerra o script e exibe uma mensagem de erro
        die("Erro na conexão: " . $conn->connect_error);
    }

    // Valor de referência para a consulta
    $id = 4;

    // Preparando uma instrução SQL para selecionar todos os registros com id maior que o valor informado
    $stmt = $conn->prepare("SELECT * FROM itens WHERE id > ?");

    // Faz a associação do parâmetro da consulta com o valor da variável $id
    // "i" indica que o tipo do parâmetro é inteiro (integer)
    $stmt->bind_param("i", $id);

    // Executa a instrução preparada
    $stmt->execute();

    // Obtém o resultado da consulta executada
    $result = $stmt->get_result();

    // Recupera todos os registros retornados pela consulta em formato de array
    // fetch_all() retorna todos os resultados como um array numérico por padrão
    // Exemplo de retorno: [ [5, "Item A", "Descrição A"], [6, "Item B", "Descrição B"], ... ]
    $data = $result->fetch_all();

    // Exibe o array contendo os dados retornados da consulta
    print_r($data);
?>
   