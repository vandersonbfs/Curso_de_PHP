<?php
        // Definindo os parâmetros de conexão com o banco de dados
        $host = "localhost"; // Endereço do servidor MySQL
        $user = "root";      // Usuário do banco de dados
        $pass = "";          // Senha do usuário (vazia nesse caso)
        $db = "cursophp";    // Nome do banco de dados a ser utilizado
    
        // Criando a conexão com o banco usando a classe mysqli
        $conn = new mysqli($host, $user, $pass, $db);

        // Assunto da aula: executando uma consulta no banco de dados
        $sql = "SELECT * FROM itens"; // SQL para selecionar todos os registros da tabela "itens"

        // Executa a consulta e armazena o resultado
        $result = $conn->query($sql);

        // Exibe o conteúdo da variável $result (apenas estrutura do objeto, não os dados)
        print_r($result);

        // Encerra a conexão com o banco de dados
        $conn->close();
?>
