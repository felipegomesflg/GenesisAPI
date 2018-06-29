<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('ajustes', 'AjusteController@index');
Route::get('ajuste/{id}', 'AjusteController@show');
Route::post('ajuste', 'AjusteController@store');
Route::put('ajuste', 'AjusteController@store');
Route::delete('ajuste', 'AjusteController@destroy');

Route::get('ajustetipos', 'AjusteTipoController@index');
Route::get('ajustetipo/{id}', 'AjusteTipoController@show');
Route::post('ajustetipo', 'AjusteTipoController@store');
Route::put('ajustetipo', 'AjusteTipoController@store');
Route::delete('ajustetipo', 'AjusteTipoController@destroy');

Route::get('categorias', 'CategoriaController@index');
Route::get('categoria/{id}', 'CategoriaController@show');
Route::post('categoria', 'CategoriaController@store');
Route::put('categoria', 'CategoriaController@store');
Route::delete('categoria', 'CategoriaController@destroy');

Route::get('contatos', 'ContatoController@index');
Route::get('contato/{id}', 'ContatoController@show');
Route::post('contato', 'ContatoController@store');
Route::put('contato', 'ContatoController@store');
Route::delete('contato', 'ContatoController@destroy');

Route::get('fornecedores', 'FornecedorController@index');
Route::get('fornecedor/{id}', 'FornecedorController@show');
Route::post('fornecedor', 'FornecedorController@store');
Route::put('fornecedor', 'FornecedorController@store');
Route::delete('fornecedor', 'FornecedorController@destroy');

Route::get('pedidos', 'PedidoController@index');
Route::get('pedido/{id}', 'PedidoController@show');
Route::post('pedido', 'PedidoController@store');
Route::put('pedido', 'PedidoController@store');
Route::delete('pedido', 'PedidoController@destroy');

Route::get('pedidoitems', 'PedidoitemController@index');
Route::get('pedidoitem/{id}', 'PedidoitemController@show');
Route::post('pedidoitem', 'PedidoitemController@store');
Route::put('pedidoitem', 'PedidoitemController@store');
Route::delete('pedidoitem', 'PedidoitemController@destroy');

Route::get('produtos', 'ProdutoController@index');
Route::get('produto/{id}', 'ProdutoController@show');
Route::post('produto', 'ProdutoController@store');
Route::put('produto', 'ProdutoController@store');
Route::delete('produto', 'ProdutoController@destroy');

Route::get('usuarios', 'UsuarioController@index');
Route::get('usuario/{id}', 'UsuarioController@show');
Route::post('usuario', 'UsuarioController@store');
Route::put('usuario', 'UsuarioController@store');
Route::delete('usuario', 'UsuarioController@destroy');
