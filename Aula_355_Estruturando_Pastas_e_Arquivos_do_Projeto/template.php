<?php

function render($view, $vars = []) {
    extract($vars);
    // CABECALHO
    require __DIR__.'/partials/head.php';
    // MIOLO DO SITE (MUDA TODA PAG.)
    require __DIR__.'/views/'. $view .'.php';
    // RODAPE
    require __DIR__.'/partials/footer.php';
}