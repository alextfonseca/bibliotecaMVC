<?php 

$id = $_GET['id'];
$informacoes_livro = $_SESSION['informacoes-livro'];

include 'inicio-html.php';

?>

<div class="container">
    <form action="/editar-livro-banco" method="POST">
    <a class="arrowBackLink" href="/meus-livros"
          ><img src="/public/assets/arrowIcon.svg" alt="Ícone de uma seta"
        /></a>

        <h1>Editar livro</h1>

        <div class="inputGroup">
        <label for="nome">Novo nome</label>
            <input type="text" name="nome" placeholder="Nome do livro" value="<?= $informacoes_livro->getNome()  ?>">
        </div>


        <div class="inputGroup">
        <label for="categoria">Nova categoria</label>
            <select name="categoria" id="categoria" >
            <option value="<?= $informacoes_livro->getCategoria()  ?>"><?= $informacoes_livro->getCategoria()  ?></option>
            <option value="Ficção científica">Ficção científica</option>
                <option value="Ação e aventura">Ação e aventura</option>
                <option value="Horror">Horror</option>
                <option value="Romance">Romance</option>
                <option value="Conto">Conto</option>
                <option value="Infantil">Infantil</option>
            </select>
        </div>

        <div class="inputGroup">
        <label for="autor">Novo nome do autor</label>
            <input type="text" name="autor" placeholder="Nome do autor" value="<?= $informacoes_livro->getAutor()  ?>">
        </div>

        <input hidden type="number" name="id" value="<?= $id ?>">


        <button type="submit">Salvar alterações</button>
    </form>
</div>

<?php include 'fim-html.php' ?>
