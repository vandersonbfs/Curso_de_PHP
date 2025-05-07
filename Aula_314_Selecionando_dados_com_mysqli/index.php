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
        die("Erro na conexão: " . $conn->connect_error); // Encerra o script em caso de erro
    }

    // Assunto da aula: consulta a todos os registros da tabela "itens"
    $sql = "SELECT * FROM itens"; // Consulta SQL para buscar todos os dados da tabela

    // Executa a consulta e armazena o resultado em $result
    $result = $conn->query($sql);

    // Verifica se a consulta retornou algum resultado
    if ($result && $result->num_rows > 0) {
        // Recupera o primeiro item da consulta como array associativo
        $item = $result->fetch_assoc();

        // Recupera todos os itens restantes como array numérico
        $itens = $result->fetch_all();

        // Exibe todos os itens recuperados
        print_r($itens);
    } else {
        echo "Nenhum resultado encontrado.";
    }

    // Fecha a conexão com o banco de dados
    $conn->close();
?>

