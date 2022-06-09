<?php 
    $usuario_logado = $_SESSION['usuario-logado'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <h1>usuario logado:</h1>
    <p>nome: <?= $usuario_logado->getNome() ?></p>
    <p>email: <?= $usuario_logado->getEmail() ?></p>
    <a href="/deslogar">deslogar</a>
    <br><br>
    <a href="/atualizar-usuario">atualizar usuario</a>
</body>
</html>