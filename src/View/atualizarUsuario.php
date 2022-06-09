<?php 
    $usuario_logado = $_SESSION['usuario-logado'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar Usuario</title>
</head>
<body>
    <form action="/atualizar-usuario-banco" method="POST">
        <input type="text" name="nome" placeholder="nome" value="<?= $usuario_logado->getNome() ?>">
        <input type="text" name="email" placeholder="email" value="<?= $usuario_logado->getEmail() ?>">
        <input type="text" name="senha" placeholder="senha">
        <button type="submit">enviar</button>
    </form>
</body>
</html>