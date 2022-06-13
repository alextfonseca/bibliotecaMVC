<?php 

namespace Biblioteca\Controller;

class ExcluirLIvro implements InterfaceControladorRequisicao {
    public function __construct(){
    }

    public function processaRequisicao(): void {
            require 'src/View/deletar.php';
    }
} 