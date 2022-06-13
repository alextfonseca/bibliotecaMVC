<?php 
    include 'inicio-html.php';

    $usuario_logado = $_SESSION['usuario-logado'];

?>

<div class="container">

    <form action="/atualizar-usuario-banco" method="POST">

    <a class="arrowBackLink" href="/home"
          ><img src="/public/assets/arrowIcon.svg" alt="Ícone de uma seta"
        /></a>

        <h1>Alterar informações do perfil</h1>

        <div class="inputGroup">
        <label for="category">Nome</label>
        <input type="text" name="nome" placeholder="nome" value="<?= $usuario_logado->getNome() ?>">
        </div>

        <div class="inputGroup">
        <label for="category">E-mail</label>
        <input type="text" name="email" placeholder="email" value="<?= $usuario_logado->getEmail() ?>">
        </div>

        <div class="inputGroup">
        <label for="category">Senha</label>
        <input type="password" name="senha" placeholder="senha">
        </div>


        <button type="submit">Salvar mudanças</button>
    </form>
</div>

<?php include 'fim-html.php' ?>