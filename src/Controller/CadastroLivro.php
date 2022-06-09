<?php 

namespace Biblioteca\Controller;

class CadastroLivro implements InterfaceControladorRequisicao {
    public function __construct(){
    }

    public function processaRequisicao(): void {
        require 'src/View/cadastroLivro.php';
    }
} 