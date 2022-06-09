<?php 

use Biblioteca\Controller\Login;
use Biblioteca\Controller\Cadastro;
use Biblioteca\Controller\PersistenciaUsuario;
use Biblioteca\Controller\Home;
use Biblioteca\Controller\Deslogar;
use Biblioteca\Controller\Autenticar;
use Biblioteca\Controller\AtualizarUsuario;
use Biblioteca\Controller\AtualizarUsuarioBanco;

return [
    '/login' => Login::class,
    '/cadastrar' => Cadastro::class,
    '/cadastrar-usuario' => PersistenciaUsuario::class,
    '/autenticar' => Autenticar::class,
    '/home' => Home::class,
    '/deslogar' => Deslogar::class,
    '/atualizar-usuario' => AtualizarUsuario::class,
    '/atualizar-usuario-banco' => AtualizarUsuarioBanco::class,
];