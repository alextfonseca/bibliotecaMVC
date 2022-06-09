<?php 

namespace Biblioteca\Controller;

class AtualizarUsuario implements InterfaceControladorRequisicao {
    public function __construct(){
    }

    public function processaRequisicao(): void {
        require 'src/View/atualizarUsuario.php';
    }
} 