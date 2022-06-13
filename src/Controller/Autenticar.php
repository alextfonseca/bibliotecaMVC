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

        if($email === '' || $senha === ''){
            $_SESSION['aviso'] = 'É necessário inserir e-mail e senha';

            header('Location: /');
        }


        $usuario = $this->usuarioRepositorio->findOneBy(array('email' => $email));
        if($usuario->verificarSenha($senha)) {
            $_SESSION['usuario-logado'] = $usuario;
            header('Location: /home');
        } else {
            $_SESSION['aviso'] = 'Usuário ou senha incorretos';
            header('Location: /');
        }
    }
} 