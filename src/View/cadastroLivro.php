
<?php 
    include 'inicio-html.php';
?>

<div class="container">
    <form action="/cadastrar-livro" method="POST">
    <a class="arrowBackLink" href="/meus-livros"
          ><img src="/public/assets/arrowIcon.svg" alt="Ícone de uma seta"
        /></a>

        <h1>Cadastrar novo livro</h1>

        <div class="inputGroup">
        <label for="nome">Nome do livro</label>
        <input type="text" name="nome" placeholder="Nome do livro">
        </div>

        <div class="inputGroup">
        <label for="categoria">Categoria do livro</label>
        <select name="categoria" id="categoria">
        <option value="Ficção científica">Ficção científica</option>
            <option value="Ação e aventura">Ação e aventura</option>
            <option value="Horror">Horror</option>
            <option value="Romance">Romance</option>
            <option value="Conto">Conto</option>
            <option value="Infantil">Infantil</option>
        </select>
        </div>

        <div class="inputGroup">
        <label for="autor">Nome do autor</label>
        <input type="text" name="autor" placeholder="Nome do autor">
        </div>


        <button type="submit">Cadastrar</button>
    </form>
</div>

<?php 
    include 'fim-html.php';
?>