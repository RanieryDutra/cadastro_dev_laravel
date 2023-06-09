<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'PrincipalController@principal')->name('site.home');
Route::get('/editar{id}', 'PrincipalController@editar')->name('site.editar');
Route::get('/excluir{id}', 'PrincipalController@excluir')->name('site.excluir');
Route::post('/pesquisar', 'PrincipalController@pesquisar')->name('site.pesquisar');

Route::get('/cadastro', 'CadastroController@cadastro')->name('site.cadastro');
Route::post('/cadastro', 'CadastroController@salvar')->name('site.cadastro');

Route::get('/contato', 'ContatoController@contato')->name('site.contato');

Route::get('/endereco', 'EnderecoController@index')->name('site.endereco');
Route::get('/endereco/buscar/{cep?}', 'EnderecoController@buscaCep')->name('site.busca');
