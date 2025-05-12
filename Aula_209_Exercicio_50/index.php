<?php
    // Cria um array associativo onde a chave é o nome da pessoa e o valor é a idade
    $pessoas = [
        'MAtheus' => 29,
        'Alexia'  => 25,
        'Pedro' => 24,
        'João' => 43
    ];
?>

<!-- Cria uma tabela HTML com borda -->
<table border="1">
    <tr>
        <!-- Cabeçalhos da tabela: Nome e Idade -->
        <th>Nome</th>
        <th>Idade</th>
    </tr>

    <!-- Percorre o array $pessoas, atribuindo a chave à variável $nome e o valor à variável $idade -->
    <?php foreach ($pessoas as $nome => $idade): ?>  
        <tr>
            <!-- Exibe o nome da pessoa -->
            <td><?= $nome; ?></td>
            <!-- Exibe a idade da pessoa -->
            <td><?= $idade; ?></td>
        </tr>
    <?php endforeach; ?>

</table>
