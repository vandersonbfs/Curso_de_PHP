<?php

    // Define uma string contendo HTML com parágrafos e uma div
    $textoHtml = "<p>Testando parágrafo.</p><div>uma div</div><p>Outro parágrafo</p>";

    // Exibe o conteúdo HTML original (com as tags HTML)
    echo $textoHtml;

    // Remove todas as tags HTML da string usando a função strip_tags
    // Isso é útil, por exemplo, antes de salvar o texto em um banco de dados
    $salvarTextoBanco = strip_tags($textoHtml);

    // Exibe o texto já sem as tags HTML
    echo $salvarTextoBanco;

?>
