<?php 

namespace Biblioteca\Controller;

use Biblioteca\Entity\Livro;
use Biblioteca\Infra\EntityManagerCreator;

class PersistenciaLivro implements InterfaceControladorRequisicao {
    public function __construct() {
        $this->entityManager = EntityManagerCreator::getEntityManager();
    }

    public function processaRequisicao(): void {
        $nome = $_POST['nome'];
        $categoria = $_POST['categoria'];
        $autor = $_POST['autor'];

        $livro = new Livro();
        $livro->setNome($nome);
        $livro->setCategoria($categoria);
        $livro->setAutor($autor);

        $this->entityManager->persist($livro);
        $this->entityManager->flush();


        header('Location: /listar-livro');
        die;
    }
} 