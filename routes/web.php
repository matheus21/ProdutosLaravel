<?php

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

Route::resource('produtos', 'ProdutoController');
Route::resource('marcas', 'MarcaController');

Route::get('/marcas/remove/{id}', 'MarcaController@remover')->name('marcas.remove');
Route::get('/produtos/remove/{id}', 'ProdutoController@remover')->name('produtos.remove');
