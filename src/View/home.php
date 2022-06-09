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

<a href="/cadastrar-novo-livro">Cadastrar novo livro</a>
<a href="/listar-livro">Meus livros</a>


<div class="userCard">
    <h1>usuario</h1>
    <p>nome: <?= $usuario_logado->getNome() ?></p>
    <p>email: <?= $usuario_logado->getEmail() ?></p>
    <a href="/deslogar">deslogar</a>
    <br><br>
    <a href="/atualizar-usuario">atualizar usuario</a>
    </div>
</body>
</html>