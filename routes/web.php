<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EnqueteController;


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
})->name('inicio');

Route::get('/enquete/novo', [EnqueteController::class,'create']);
Route::post('/enquete/novo', [EnqueteController::class, 'store'])->name('salvar_enquetes');
Route::get('/enquete/ver', [EnqueteController::class, 'show'])->name('ver_enquetes');
Route::get('/enquete/listar', [EnqueteController::class, 'listar'])->name('listar_enquetes');
Route::get('/enquete/del/{id}',[EnqueteController::class, 'destroy'])->name('excluir_enquetes');
Route::get('/enquete/edit/{id}',[EnqueteController::class, 'edit'])->name('editar_enquetes');
Route::post('/enquete/edit/{id}', [EnqueteController::class, 'update'])->name('atualizar_enquetes');
