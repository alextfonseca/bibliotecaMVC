<?php 

namespace Biblioteca\Controller;
use Biblioteca\Entity\Usuario;
use Biblioteca\Infra\EntityManagerCreator;

class Autenticar implements InterfaceControladorRequisicao {
    private $usuarioRepositorio;

    public function __construct(){
        $this->entityManager = EntityManagerCreator::getEntityManager();
        $this->usuarioRepositorio = $this->entityManager->getRepository(Usuario::class);
    }

    public function processaRequisicao(): void {
        $email = $_POST['email'];
        $senha = $_POST['senha'];


        $usuario = $this->usuarioRepositorio->findOneBy(array('email' => $email));
        if($usuario->verificarSenha($senha)) {
            $_SESSION['usuario-logado'] = $usuario;
            header('Location: /home');
        } else {
            header('Location: /login');
        }
    }
} 