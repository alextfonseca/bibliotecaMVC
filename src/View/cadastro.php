<?php include 'inicio-html.php';

$aviso = $_SESSION['aviso'];

?>

<div class="container">

    <form action="/cadastrar-usuario" method="POST">
    <a class="arrowBackLink" href="/"
        ><img src="/public/assets/arrowIcon.svg" alt="Ícone de uma seta"
      /></a>

        <h1>Criar conta</h1>
        <p>Já tem uma conta ? <a href="/">Entrar</a></p>

        <div class="inputGroup">
        <label for="imagem">Sua imagem de perfil</label>
        <input type="file" name="imagem" placeholder="Sua imagem">
        </div>

        <div class="inputGroup">
        <label for="name">Nome</label>
        <input type="text" name="nome" placeholder="Seu nome">
        </div>

        <div class="inputGroup">
        <label for="email">E-mail</label>
        <input type="text" name="email" placeholder="Seu e-mail">
        </div>


        <div class="inputGroup">
        <label for="senha">Senha</label>
        <input type="password" name="senha" placeholder="Crie sua senha">
        </div>


        <button type="submit">Criar conta</button>
    </form>
</div>

    <?php include 'fim-html.php' ?>