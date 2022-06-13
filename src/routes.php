<?php 

use Biblioteca\Controller\Login;
use Biblioteca\Controller\Cadastro;
use Biblioteca\Controller\CadastroLivro;
use Biblioteca\Controller\PersistenciaUsuario;
use Biblioteca\Controller\PersistenciaLivro;
use Biblioteca\Controller\Home;
use Biblioteca\Controller\MeusLivros;
use Biblioteca\Controller\Deslogar;
use Biblioteca\Controller\Autenticar;
use Biblioteca\Controller\ListarLivros;
use Biblioteca\Controller\AtualizarUsuario;
use Biblioteca\Controller\AtualizarUsuarioBanco;
use Biblioteca\Controller\EditarLivro;
use Biblioteca\Controller\EditarLivroBanco;
use Biblioteca\Controller\Exclusao;
use Biblioteca\Controller\ExcluirLivro;

return [
    '/' => Login::class,
    '/cadastrar' => Cadastro::class,
    '/cadastrar-novo-livro' => CadastroLivro::class,


    '/cadastrar-usuario' => PersistenciaUsuario::class,
    '/cadastrar-livro' => PersistenciaLivro::class,

    
    '/autenticar' => Autenticar::class,
    '/listar-livro' => ListarLivros::class,
    '/home' => Home::class,
    '/meus-livros' => MeusLivros::class,
    '/deslogar' => Deslogar::class,


    '/atualizar-usuario' => AtualizarUsuario::class,
    '/atualizar-usuario-banco' => AtualizarUsuarioBanco::class,


    '/editar-livro' => EditarLivro::class,
    '/editar-livro-banco' => EditarLivroBanco::class,


    '/excluir' => Exclusao::class,
    '/excluir-livro' => ExcluirLivro::class,


];