<?php 

namespace Biblioteca\Controller;

class Deslogar implements InterfaceControladorRequisicao {
    public function __construct(){
    }

    public function processaRequisicao(): void {
        session_unset();
        header('Location: /login');
        die;
    }
} 