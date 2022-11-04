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

Route::group(['prefix'=>'processos', 'where'=>['id'=>'[0-9]+']], function(){

    Route::get('',              ['as'=>'processos', 'uses'=>'\App\Http\Controllers\ProcessosController@index']);
    Route::get('create',        ['as'=>'processos.create', 'uses'=>'\App\Http\Controllers\ProcessosController@create']);
    Route::post('store',        ['as'=>'processos.store', 'uses'=>'\App\Http\Controllers\ProcessosController@store']);
    Route::get('{id}/destroy',  ['as'=>'processos.destroy','uses'=>'\App\Http\Controllers\ProcessosController@destroy']);
    Route::get('{id}/edit',     ['as'=>'processos.edit', 'uses'=>'\App\Http\Controllers\ProcessosController@edit']);
    Route::put('{id}/update',   ['as'=>'processos.update','uses'=>'\App\Http\Controllers\ProcessosController@update']);

});


Route::group(['prefix'=>'aparelhos', 'where'=>['id'=>'[0-9]+']], function(){

    Route::get('',              ['as'=>'aparelhos', 'uses'=>'\App\Http\Controllers\AparelhosController@index']);
    Route::get('create',        ['as'=>'aparelhos.create', 'uses'=>'\App\Http\Controllers\AparelhosController@create']);
    Route::post('store',        ['as'=>'aparelhos.store', 'uses'=>'\App\Http\Controllers\AparelhosController@store']);
    Route::get('{id}/destroy',  ['as'=>'aparelhos.destroy','uses'=>'\App\Http\Controllers\AparelhosController@destroy']);
    Route::get('{id}/edit',     ['as'=>'aparelhos.edit', 'uses'=>'\App\Http\Controllers\AparelhosController@edit']);
    Route::put('{id}/update',   ['as'=>'aparelhos.update','uses'=>'\App\Http\Controllers\AparelhosController@update']);

});



Route::group(['prefix'=>'linhas', 'where'=>['id'=>'[0-9]+']], function(){

    Route::get('',              ['as'=>'linhas', 'uses'=>'\App\Http\Controllers\LinhasController@index']);
    Route::get('create',        ['as'=>'linhas.create', 'uses'=>'\App\Http\Controllers\LinhasController@create']);
    Route::post('store',        ['as'=>'linhas.store', 'uses'=>'\App\Http\Controllers\LinhasController@store']);
    Route::get('{id}/destroy',  ['as'=>'linhas.destroy','uses'=>'\App\Http\Controllers\LinhasController@destroy']);
    Route::get('{id}/edit',     ['as'=>'linhas.edit', 'uses'=>'\App\Http\Controllers\LinhasController@edit']);
    Route::put('{id}/update',   ['as'=>'linhas.update','uses'=>'\App\Http\Controllers\LinhasController@update']);

});

Route::group(['prefix'=>'terceirizados', 'where'=>['id'=>'[0-9]+']], function(){

    Route::get('',              ['as'=>'terceirizados', 'uses'=>'\App\Http\Controllers\TerceirizadosController@index']);
    Route::get('create',        ['as'=>'terceirizados.create', 'uses'=>'\App\Http\Controllers\TerceirizadosController@create']);
    Route::post('store',        ['as'=>'terceirizados.store', 'uses'=>'\App\Http\Controllers\TerceirizadosController@store']);
    Route::get('{id}/destroy',  ['as'=>'terceirizados.destroy','uses'=>'\App\Http\Controllers\TerceirizadosController@destroy']);
    Route::get('{id}/edit',     ['as'=>'terceirizados.edit', 'uses'=>'\App\Http\Controllers\TerceirizadosController@edit']);
    Route::put('{id}/update',   ['as'=>'terceirizados.update','uses'=>'\App\Http\Controllers\TerceirizadosController@update']);

});


Route::group(['prefix'=>'cores', 'where'=>['id'=>'[0-9]+']], function(){

    Route::get('',              ['as'=>'cores', 'uses'=>'\App\Http\Controllers\CoresController@index']);
    Route::get('create',        ['as'=>'cores.create', 'uses'=>'\App\Http\Controllers\CoresController@create']);
    Route::post('store',        ['as'=>'cores.store', 'uses'=>'\App\Http\Controllers\CoresController@store']);
    Route::get('{id}/destroy',  ['as'=>'cores.destroy','uses'=>'\App\Http\Controllers\CoresController@destroy']);
    Route::get('{id}/edit',     ['as'=>'cores.edit', 'uses'=>'\App\Http\Controllers\CoresController@edit']);
    Route::put('{id}/update',   ['as'=>'cores.update','uses'=>'\App\Http\Controllers\CoresController@update']);

});

Route::group(['prefix'=>'modelos', 'where'=>['id'=>'[0-9]+']], function(){

    Route::get('',              ['as'=>'modelos', 'uses'=>'\App\Http\Controllers\ModelosController@index']);
    Route::get('create',        ['as'=>'modelos.create', 'uses'=>'\App\Http\Controllers\ModelosController@create']);
    Route::post('store',        ['as'=>'modelos.store', 'uses'=>'\App\Http\Controllers\ModelosController@store']);
    Route::get('{id}/destroy',  ['as'=>'modelos.destroy','uses'=>'\App\Http\Controllers\ModelosController@destroy']);
    Route::get('{id}/edit',     ['as'=>'modelos.edit', 'uses'=>'\App\Http\Controllers\ModelosController@edit']);
    Route::put('{id}/update',   ['as'=>'modelos.update','uses'=>'\App\Http\Controllers\ModelosController@update']);

});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
