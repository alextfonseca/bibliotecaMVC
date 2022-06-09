<?php 

namespace Biblioteca\Controller;

class Login implements InterfaceControladorRequisicao {
    public function __construct(){
    }

    public function processaRequisicao(): void {
        require 'src/View/login.php';
    }
} 