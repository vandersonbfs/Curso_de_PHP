<?php
    // Inclui o arquivo "backend.php", onde provavelmente estão definidos dados ou funções
    // necessárias para o funcionamento do site (por exemplo, a variável $nome e o array $produtos).
    include_once "backend.php";
?>

<!-- Exibe um título de boas-vindas ao usuário -->
<h1>Seja bem-vindo ao nosso site.</h1>

<!-- Exibe o nome do usuário (assumindo que a variável $nome foi definida em "backend.php") e 
     uma mensagem com as ofertas -->
<p><?= $nome; ?>, veja as nossas ofertas.</p>

<br> <!-- Quebra de linha para separar o conteúdo -->

<!-- Exibe um subtítulo anunciando que os principais produtos serão listados abaixo -->
<h2>Confira nossos principais produtos:</h2>

<!-- Inicia uma lista não ordenada (ul) para exibir os produtos -->
<ul>
    <!-- Laço foreach percorre o array $produtos (que foi definido em "backend.php") 
         e para cada item no array, a variável $produto receberá o valor correspondente -->
    <?php foreach($produtos as $produto): ?>
        <!-- Para cada produto, cria um item na lista (li) e exibe o valor de $produto -->
        <li>
            <?= $produto; ?> <!-- Exibe o valor de $produto no formato HTML -->
        </li>
    <?php endforeach;?>  <!-- Finaliza o laço foreach -->
</ul>


