<?php
if(!isset($_SESSION)){ 
    session_start(); 
} 

require("vendor/autoload.php");

use Pecee\SimpleRouter\SimpleRouter as Router;

$_SESSION['url'] = Router::getUrl();

Router::get('/', 'AgendaController@index');
Router::get('/agenda', 'AgendaController@index');
Router::get('/login', 'LoginController@login');
Router::post('/logar', 'LogarController@logar');
Router::get('/registrar', 'RegistrarController@registrar');
Router::post('/editar', 'EditarContatoController@editar');
Router::post('/edit', 'EditaContatoController@editar');
Router::post('/excluir', 'ExcluirContatoController@excluir');
Router::post('/registrarusuario', 'RegistrarUsuario@registrarusuario');
Router::post('/adicionarcontato','AdicionarContatoController@adicionarcontato');
Router::get('/contato', 'ContatoController@contato');
Router::get('/contato/{index}', 'BuscarContatoController@buscarcontato');
Router::get('/erro-campos', 'LoginController@login');
Router::get('/email-senha', 'LoginController@login');
Router::get('/erro-campos-cadastro', 'RegistrarController@registrar');
Router::get('/email-cadastrado', 'RegistrarController@registrar');
Router::get('/erro-campo-email', 'RegistrarController@registrar');
Router::get('/erro-campos-tamanho-maximo', 'EditarContatoController@editar');
Router::get('/erro-tamanho-maximo-imagem', 'EditarContatoController@editar');
Router::get('/erro-telefone', 'EditarContatoController@editar');
Router::get('/erro-campo-vazio', 'EditarContatoController@editar');
Router::get('/erro-campo-maximo', 'AgendaController@index');
Router::get('/erro-campo-vazio-adicionar', 'AgendaController@index');
Router::get('/erro-telefone-adicionar', 'AgendaController@index');
Router::get('/erro-email-adicionar', 'AgendaController@index');



Router::start();