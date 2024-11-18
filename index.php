<?php
require("vendor/autoload.php");

use Pecee\SimpleRouter\SimpleRouter as Router;

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


Router::start();