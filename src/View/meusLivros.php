<?php 
    include 'inicio-html.php';

    $sucesso = $_SESSION['sucesso'];
    $livros_registrados = $_SESSION['livros-registrados'];
?>



    <header>
      <h1>Livros cadastrados em sua conta</h1>

      <a href="/home">Voltar a home</a>

      <a href="/cadastrar-novo-livro">Adicionar novo livro</a>
    </header>

      <table>
      <p class="success"> <?= $sucesso ?> </p>
        <thead>
          <tr>
            <td>id</td>
            <td>Nome do livro</td>
            <td>Categoria</td>
            <td>Nome do autor</td>
            <td></td>
            <td></td>
          </tr>
        </thead>

        <tbody>
          
          <?php foreach ( $livros_registrados as $livro ): ?>
            <tr>

            <td>
                <?= $livro->getId(); ?>
              </td>

              <td>
                <?= $livro->getNome(); ?>
              </td>

              <td>
                <?= $livro->getCategoria(); ?>
              </td>

              <td>
                <?= $livro->getAutor(); ?>
              </td>

              <td>
              <a class="edit" href="/editar-livro?id=<?=$livro->getId();?>"
                ><img src="/public/assets/editIcon.svg" alt="ícone de editar"
              /></a>
            </td>

            <td>
              <a class="remove" href="/excluir-livro?id=<?=$livro->getId();?>"
                ><img src="/public/assets/removeIcon.svg" alt="ícone de remover"
              /></a>
            </td>

            </tr>
            <?php endforeach; ?>

        </tbody>
      </table>


<?php include 'fim-html.php' ?>