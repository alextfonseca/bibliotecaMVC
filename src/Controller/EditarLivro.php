<?php 

namespace Biblioteca\Controller;

use Biblioteca\Entity\Livro;
use Biblioteca\Infra\EntityManagerCreator;

class EditarLivro implements InterfaceControladorRequisicao {

    private $livroRepositorio;

    public function __construct(){
        $this->entityManager = EntityManagerCreator::getEntityManager();
        $this->livroRepositorio = $this->entityManager->getRepository(Livro::class);
    }

    public function processaRequisicao(): void {

        $id = $_GET["id"];
        
        $livro = $this->livroRepositorio->findOneBy(array('id' => $id));
        
        $_SESSION['informacoes-livro'] = $livro;
        require 'src/View/editarLivro.php';
    }
} 