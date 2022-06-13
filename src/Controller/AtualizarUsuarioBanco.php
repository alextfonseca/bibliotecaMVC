<?php 

namespace Biblioteca\Controller;

use Biblioteca\Entity\Usuario;
use Biblioteca\Infra\EntityManagerCreator;

class AtualizarUsuarioBanco implements InterfaceControladorRequisicao {
    private $usuarioRepositorio;

    public function __construct() {
        $this->entityManager = EntityManagerCreator::getEntityManager();
        $this->usuarioRepositorio = $this->entityManager->getRepository(Usuario::class);
    }

    public function processaRequisicao(): void {
        $usuarioLogado = $_SESSION['usuario-logado'];

        $novo_nome = $_POST['nome'];
        $novo_email = $_POST['email'];
        $nova_senha = $_POST['senha'];

        $usuario = $this->usuarioRepositorio->findOneBy(array('id' => $usuarioLogado->getId()));

        $usuario->setNome($novo_nome);
        $usuario->setEmail($novo_email);
        if(!empty($nova_senha)) {
            $usuario->setSenha($nova_senha);
        }
        $_SESSION['usuario-logado'] = $usuario;
        $this->entityManager->flush();

        $_SESSION['sucesso'] = 'Usuário atualizado com sucesso';

        header('Location: /home');
        die;
    }
} 