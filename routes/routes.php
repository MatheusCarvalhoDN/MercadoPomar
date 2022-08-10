<?php
use Src\Route as Route;

Route::get('/', 'indexController@index');

Route::get('/sair', 'userController@sair');

Route::get('/cadastro', 'userController@cadastro');
Route::post('/cadastro', 'userController@postCadastro');

Route::get('/login', 'userController@login');
Route::post('/login', 'userController@postLogin');

Route::get('/carrinho', 'carrinhoController@carrinho');
Route::post('/carrinho', 'carrinhoController@postCarrinho');
Route::post('/remove/carrinho', 'carrinhoController@removeCarrinho');
Route::post('/update/carrinho', 'carrinhoController@upCarrinho');

Route::get('/pedidos', 'pedidoController@pedido');

Route::get('/pagamento', 'pagamentoController@pagamento');
Route::post('/pagamento', 'pagamentoController@postPagamento');

Route::get('/produto', 'produtoController@produto');
Route::post('/produto', 'produtoController@postProduto');
