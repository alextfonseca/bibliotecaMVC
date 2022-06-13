<?php include 'inicio-html.php';

$aviso = $_SESSION['aviso'];

?>

<div class="container">

<form action="/autenticar" method="post">
        <h1>Faça login em sua conta</h1>

        <p>Ainda não possui uma conta ? <a href="/cadastrar">criar conta</a></p>

        <p class="warning"> <?= $aviso ?> </p>


        <div class="inputGroup">
        <label for="email">E-mail</label>
        <input type="text" name="email" placeholder="Digite aqui seu e-mail">
        </div>


        <div class="inputGroup">
        <label for="senha">Senha</label>
        <input type="password" name="senha" placeholder="Digite sua senha">
        </div>


        <button type="submit">Entrar</button>
    </form>
    </div>

<?php include 'fim-html.php' ?>
