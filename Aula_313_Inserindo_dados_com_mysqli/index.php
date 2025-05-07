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

    // Assunto da aula: inserção de dados em uma tabela

    $table = "itens"; // Nome da tabela onde os dados serão inseridos
    $nome = "Xícara"; // Valor para a coluna 'nome'
    $descricao = "É uma xícara usada de cor rosa."; // Valor para a coluna 'descricao'

    // Monta a instrução SQL para inserir dados na tabela
    // Os valores devem estar entre aspas simples dentro da string SQL
    $sql = "INSERT INTO $table (nome, descricao) VALUES ('$nome', '$descricao')";

    // Executa a query de inserção no banco de dados
    if ($conn->query($sql) === TRUE) {
        echo "Registro inserido com sucesso!";
    } else {
        echo "Erro ao inserir registro: " . $conn->error;
    }

    // Fecha a conexão com o banco de dados
    $conn->close();
?>
