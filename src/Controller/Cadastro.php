<?php 

namespace Biblioteca\Controller;

class Cadastro implements InterfaceControladorRequisicao {
    public function __construct(){
    }

    public function processaRequisicao(): void {
        require 'src/View/cadastro.php';
    }
} 