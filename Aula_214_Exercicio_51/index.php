<?php
    // Criação de um array associativo onde cada chave é o nome de uma pessoa
    // e cada valor representa a pontuação dessa pessoa
    $ranking = [
        "Matheus" => 200,
        "João" => 54,
        "Pedro" => 444,
        "Maria" => 239,
        "Joana" => 123,
        "Henrique" => 12,
    ];

    // Ordena o array pelos valores em ordem decrescente (do maior para o menor)
    // mantendo a associação das chaves (nomes das pessoas)
    arsort($ranking);
?>
    
<!-- Título da página -->
<h1>Ranking</h1>

<!-- Lista ordenada (numerada) para exibir o ranking -->
<ol>
    <!-- Estrutura de repetição para percorrer o array $ranking -->
    <?php foreach($ranking as $pessoa => $pontuacao): ?>
        <!-- Para cada item do array, exibe um item da lista com nome e pontuação -->
        <li><?= $pessoa ?> ------------------ <?= $pontuacao ?> pontos</li>
    <?php endforeach; ?>    
</ol>
