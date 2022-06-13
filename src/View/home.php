<?php 
    $usuario_logado = $_SESSION['usuario-logado'];
    $sucesso = $_SESSION['sucesso'];

    include 'inicio-html.php';
?>

<div class="container">

<div class="userCard">

<p class="success"><?= $sucesso ?>  </p>

    <h1>Seja bem-vindo(a) <?= $usuario_logado->getNome() ?></h1>
    <div class="buttons">
    <a href="/deslogar">
    <img src="/public/assets/logOut.svg" alt="Ícone de sair">
        Sair</a>
    <br><br>
    <a href="/atualizar-usuario">
    <img src="/public/assets/editIcon.svg" alt="Ícone de editar">
        Atualizar perfil</a>
    </div>


    <div class="buttons">
    <a href="/cadastrar-novo-livro">Cadastrar novo livro</a>
    <a href="/listar-livro">Meus livros</a>
    </div>
</div>

</div>

