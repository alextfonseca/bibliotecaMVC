<?php 

namespace Biblioteca\Controller;

class Home implements InterfaceControladorRequisicao {
    public function __construct(){
    }

    public function processaRequisicao(): void {
        if(isset($_SESSION['usuario-logado'])) {
            require 'src/View/home.php';
        } else {
            header('Location: /');
        }
    }
} 