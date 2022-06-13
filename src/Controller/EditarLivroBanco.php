<?php 

namespace Biblioteca\Controller;

use Biblioteca\Entity\Livro;
use Biblioteca\Infra\EntityManagerCreator;

class EditarLivroBanco implements InterfaceControladorRequisicao {
    private $livroRepositorio;

    public function __construct() {
        $this->entityManager = EntityManagerCreator::getEntityManager();
        $this->livroRepositorio = $this->entityManager->getRepository(Livro::class);
    }

    public function processaRequisicao(): void {


        $id = $_POST['id'];
        $novo_nome = $_POST['nome'];
        $nova_categoria = $_POST['categoria'];
        $novo_autor = $_POST['autor'];


        $livro = $this->livroRepositorio->findOneBy(array('id' => $id));

        $livro->setNome($novo_nome);
        $livro->setCategoria($nova_categoria);
        $livro->setAutor($novo_autor);

        $_SESSION['livros-registrados'] = $livro;
        $_SESSION['sucesso'] = 'Livro alterado com sucesso';
        $this->entityManager->flush();

        header('Location: /listar-livro');
        die;
    }
} 