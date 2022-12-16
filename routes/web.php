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

Route::get('/', function () {
    return view('welcome');
});
// INICIO DA ROTA DA VITRINE---------------------------------------

Route::get('vitrine', [\App\Http\Controllers\VitrineController::class, 'index'])->name('vitrine.index');
Route::get('vitrine/categoria/{id}', [\App\Http\Controllers\VitrineController::class, 'listarProdutosPorCategoria'])->name('vitrine.categoria');
Route::get('vitrine/subcategoria/{id}', [\App\Http\Controllers\VitrineController::class, 'listarProdutosPorSubCategoria'])->name('vitrine.subcategoria');
Route::get('vitrine/produto/{id}', [\App\Http\Controllers\VitrineController::class, 'mostrarProduto'])->name('vitrine.detalhes');

Route::get('vitrine/shop', function (){
    return view('vitrine.shop');
});
Route::get('vitrine/single', function (){
    return view('vitrine.single');
});

// FIM DA ROTA DA VITRINE-------------------------------------

// INICIO CARRINHO DE COMPRAS-------------------------------

Route::get('vitrine/carrinho', [\App\Http\Controllers\CarrinhoComprasController::class, 'index'])->name('vitrine.carrinho')->name('vitrine.index');
Route::post('vitrine/carrinho', [\App\Http\Controllers\CarrinhoComprasController::class, 'adicionarItemCarrinho'])->name('vitrine.addcarrinho');
Route::delete('vitrine/carrinho', [\App\Http\Controllers\CarrinhoComprasController::class, 'removerItemCarrinho'])->name('vitrine.delcarrinho');
Route::put('vitrine/carrinho', [\App\Http\Controllers\CarrinhoComprasController::class, 'alterarItemCarrinho'])->name('vitrine.updcarrinho');
Route::get('vitrine/carrinho/clear', [\App\Http\Controllers\CarrinhoComprasController::class, 'limparCarrinho'])->name('vitrine.clearcarrinho');

// FIM CARRINHO DE COMPRAS------------------------------------

// Gerenciamento do Cliente-------------------------

Route::get('vitrine/cliente/create',[\App\Http\Controllers\ClientController::class, 'create'])->name('cliente.create');
Route::post('vitrine/cliente/',[\App\Http\Controllers\ClientController::class, 'store'])->name('cliente.store');
Route::get('vitrine/cliente/login',[\App\Http\Controllers\ClientController::class, 'createLogin'])->name('cliente.login.create');
Route::post('vitrine/cliente/login',[\App\Http\Controllers\ClientController::class, 'login'])->name('cliente.login');
Route::get('vitrine/cliente/logout',[\App\Http\Controllers\ClientController::class, 'logout'])->name('cliente.logout');

//FIM Gerenciamento cliente-------------------------

// Finalizar Pedido-----------------

Route::get('vitrine/pedido/checar', [\App\Http\Controllers\PedidoController::class, 'checarPedido'])->name('pedido.checar');
Route::get('vitrine/pedido/finalizar', [\App\Http\Controllers\PedidoController::class, 'finalizarPedido'])->name('pedido.finalizar');

//FIM Finalizar Pedido--------------


Route::get('/hello-world', function () {
    return 'Hello World!';
});

Route::get('/hello-world/{nome}', [\App\Http\Controllers\TesteController::class, 'mostrarNome']);
Route::get('/soma/{n1}/{n2}', [\App\Http\Controllers\TesteController::class, 'soma']);

Route::resource('categorias', \App\Http\Controllers\CategoriaController::class);
Route::resource('subcategorias', \App\Http\Controllers\SubcategoriaController::class);
Route::resource('produtos', \App\Http\Controllers\ProdutoController::class);


