<?php 

namespace Biblioteca\Controller;

class EditarLivro implements InterfaceControladorRequisicao {
    public function __construct(){
    }

    public function processaRequisicao(): void {
        require 'src/View/editarLivro.php';
    }
} 