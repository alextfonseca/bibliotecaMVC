<?php 

namespace Biblioteca\Controller;
use Biblioteca\Entity\Livro;
use Biblioteca\Infra\EntityManagerCreator;

class ListarLivros implements InterfaceControladorRequisicao {
    private $livroRepositorio;

    public function __construct(){
        $this->entityManager = EntityManagerCreator::getEntityManager();
        $this->livroRepositorio = $this->entityManager->getRepository(Livro::class);
    }

    public function processaRequisicao(): void {

        $livros = $this->livroRepositorio->findAll();

            $_SESSION['livros-registrados'] = $livros;
            header('Location: /meus-livros');

    }
} 