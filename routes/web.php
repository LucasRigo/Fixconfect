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

Route::get('processos', [\App\Http\Controllers\ProcessosController::class,'index']);
Route::get('processos/create', [\App\Http\Controllers\ProcessosController::class,'create']);
Route::post('processos/store', [\App\Http\Controllers\ProcessosController::class,'store']);
Route::get('processos/{id}/destroy', [\App\Http\Controllers\ProcessosController::class,'destroy']);
Route::get('processos/{id}/edit', [\App\Http\Controllers\ProcessosController::class,'edit']);
Route::put('processos/{id}/update', [\App\Http\Controllers\ProcessosController::class,'update']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
