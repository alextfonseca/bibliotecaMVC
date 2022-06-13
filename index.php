<?php 
require 'vendor/autoload.php';

session_start();

$caminho = parse_url($_SERVER['REQUEST_URI']);
$rotas = require 'src/routes.php';

if (!array_key_exists($caminho['path'], $rotas)) {
 http_response_code(404);
 exit();
}else{
  $classeControladora = $rotas[$caminho['path']];
  $classeControladora = new $classeControladora();
  $classeControladora->processaRequisicao();
}

