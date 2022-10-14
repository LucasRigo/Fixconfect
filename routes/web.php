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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
