<?php
$id = filter_input(
  INPUT_GET,
  'id'
  );


  include 'inicio-html.php';
  ?>

<div class="container">

<div class="modalContent">
        <h1>Deseja realmente remover este livro?</h1>
        <p>
          Ao remover este livro, ele será removido permanentemente da sua conta.
        </p>
        <div class="buttons">
          <a href="/meus-livros" class="cancel">Cancelar</a>

          <a href="/excluir?id=<?= $id ?>" class="confirm">Confirmar</a>
        </div>
      </div>
</div>
<?php include 'fim-html.php' ?>
