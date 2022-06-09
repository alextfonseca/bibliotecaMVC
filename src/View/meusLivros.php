<?php 
    $livros_registrados = $_SESSION['livros-registrados'];
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/styles/global.css" />
    <link rel="stylesheet" href="../../public/styles/listBooks.css" />

    <title>Sistema de gestão de biblioteca</title>
  </head>
  <body>
    <header>
      <h1>Livros cadastrados em sua conta</h1>

      <a href="/cadastrar-novo-livro">Adicionar novo livro</a>
    </header>

    <main>
      <table>
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

            <td">
                <?= $livro->getId(); ?>
              </td>

              <td">
                <?= $livro->getNome(); ?>
              </td>

              <td">
                <?= $livro->getCategoria(); ?>
              </td>

              <td">
                <?= $livro->getAutor(); ?>
              </td>

              <td>
              <a class="edit" href="/editar-livro?id=<?=$livro->getId();?>"
                ><img src="../assets/editIcon.svg" alt="ícone de editar"
              /></a>
            </td>

            <td>
              <a class="remove" href="/excluir-livro?id=<?= $livro->getId() ?>"
                ><img src="../assets/removeIcon.svg" alt="ícone de remover"
              /></a>
            </td>

            </tr>
            <?php endforeach; ?>

        </tbody>
      </table>
    </main>

    <div class="modal">
      <div class="modalContent">
        <h1>Deseja realmente remover este livro?</h1>
        <p>
          Ao remover este livro, ele será removido permanentemente da sua conta.
        </p>
        <div class="buttons">
          <button class="cancel">Cancelar</button>
          <button class="confirm">Confirmar</button>
        </div>
      </div>
    </div>

    <script>
      const removeButton = document.querySelector(".remove");

      const cancelButton = document.querySelector(".cancel");

      const modal = document.querySelector(".modal");

      function handleShowModal() {
        modal.classList.toggle("active");
      }

      removeButton.addEventListener("click", handleShowModal);

      cancelButton.addEventListener("click", handleShowModal);
    </script>
  </body>
</html>