<?php 

namespace Biblioteca\Controller;

use Biblioteca\Entity\Usuario;
use Biblioteca\Infra\EntityManagerCreator;

class PersistenciaUsuario implements InterfaceControladorRequisicao {
    public function __construct() {
        $this->entityManager = EntityManagerCreator::getEntityManager();
    }

    public function processaRequisicao(): void {
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $usuario = new Usuario();
        $usuario->setNome($nome);
        $usuario->setEmail($email);
        $usuario->setSenha($senha);

        $this->entityManager->persist($usuario);
        $this->entityManager->flush();

        header('Location: /login');
        die;
    }
} 