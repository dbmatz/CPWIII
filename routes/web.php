<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AutorController;
use App\Http\Controllers\EditoraController;
use App\Http\Controllers\GeneroController;
use App\Http\Controllers\LivroController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::fallback(function(){
    return "Página não exite";
});


Route::get('/', function () {
    return view('welcome');
})->name('/');

Route::prefix('autor')->group(function(){
    Route::get('/', [AutorController::class, 'index'])->name('autor-index');
    Route::get('/create', [AutorController::class, 'create'])->name('autor-create');
    Route::post('/', [AutorController::class, 'store'])->name('autor-store');
    /*Route::post('/novo', [AutorController::class, 'novo']);
    Route::update('/autor/editar/{id}', [AAutorControllerutor::class, 'editar']);
    Route::delete('/autor/excluir/{id}', [AutorController::class, 'excluir']);
    oute::post('/autor/salvar', [AutorController::class, 'salvar']);*/
});

Route::prefix('genero')->group(function(){
    Route::get('/', [GeneroController::class, 'index'])->name('genero-index');
    Route::get('/create', [GeneroController::class, 'create'])->name('genero-create');
    Route::post('/', [GeneroController::class, 'store'])->name('genero-store');
    /*Route::post('/genero/novo', [GeneroController::class, 'novo']);
    Route::update('/genero/editar/{id}', [GeneroController::class, 'editar']);
    Route::delete('/genero/excluir/{id}', [GeneroController::class, 'excluir']);
    Route::post('/genero/salvar', [GeneroController::class, 'salvar']);*/
});

Route::prefix('editora')->group(function(){
    Route::get('/', [EditoraController::class, 'index'])->name('editora-index');
    Route::get('/create', [EditoraController::class, 'create'])->name('editora-create');
    Route::post('/', [EditoraController::class, 'store'])->name('editora-store');
    /*Route::post('/editora/novo', [EditoraController::class, 'novo']);
    Route::update('/editora/editar/{id}', [EditoraController::class, 'editar']);
    Route::delete('/editora/excluir/{id}', [EditoraController::class, 'excluir']);
    Route::post('/editora/salvar', [EditoraController::class, 'salvar']);*/
});

Route::prefix('livro')->group(function(){
    Route::get('/', [LivroController::class, 'index'])->name('livro-index');
    Route::get('/create', [LivroController::class, 'create'])->name('livro-create');
    Route::post('/', [LivroController::class, 'store'])->name('livro-store');
    /*Route::post('/livro/novo', [LivroController::class, 'novo']);
    Route::update('/livro/editar/{id}', [LivroController::class, 'editar']);
    Route::delete('/livro/excluir/{id}', [LivroController::class, 'excluir']);
    Route::post('/livro/salvar', [LivroController::class, 'salvar']);*/
});