<?php 

namespace Biblioteca\Controller;

class MeusLivros implements InterfaceControladorRequisicao {
    public function __construct(){
    }

    public function processaRequisicao(): void {
            require 'src/View/meusLivros.php';
    }
} 