<?php

// Define a URL base do site dinamicamente
$BASE_URL = "http://" . $_SERVER['SERVER_NAME'] . dirname($_SERVER['REQUEST_URI'] . '?') . '/';

// Exemplo de saída (em um servidor local):
// http://localhost/projeto/
