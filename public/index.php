<?php 
require 'vendor/autoload.php';

session_start();

$caminho = $_SERVER['REQUEST_URI'] ?? '/login';
$rotas = require 'src/routes.php';

if (!array_key_exists($caminho, $rotas)) {
 http_response_code(404);
 exit();
}else{
  $classeControladora = new $rotas[$caminho];
  $classeControladora->processaRequisicao();
}

