<?php
namespace Biblioteca\Controller;
use Biblioteca\Entity\Livro;
use Biblioteca\Infra\EntityManagerCreator;


class Exclusao implements InterfaceControladorRequisicao
{

 private $entityManager;
 public function __construct()
 {
 $this->entityManager = (new EntityManagerCreator())
 ->getEntityManager();
 }
 public function processaRequisicao(): void
 {
  $id = filter_input(
  INPUT_GET,
  'id'
  );

    if (is_null($id) || $id === false) {
    header('Location: /listar-livro');
    return;
    }
    $livro = $this->entityManager->getReference(
    Livro::class,
    $id
    );
    $this->entityManager->remove($livro);
    $this->entityManager->flush();

    $_SESSION['sucesso'] = "Livro excluído com sucesso";


    header('Location: /listar-livro');

  }
}