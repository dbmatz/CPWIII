<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AutorController;
use App\Http\Controllers\EditoraController;
use App\Http\Controllers\GeneroController;
use App\Http\Controllers\LivroController;
use App\Models\Livro;

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

Route::fallback(function () {
    return "Página não exite";
});


Route::get('/', function () {
    return view('welcome');
})->name('/');

Route::prefix('autor')->group(function () {
    Route::get('/', [AutorController::class, 'index'])->name('autor-index');
    Route::get('/create', [AutorController::class, 'create'])->name('autor-create');
    Route::post('/', [AutorController::class, 'store'])->name('autor-store');
    Route::get('/{id}/edit', [AutorController::class, 'edit'])->where('id', '[0-9]+')->name('autor-edit');
    Route::put('/{id}', [AutorController::class, 'update'])->where('id', '[0-9]+')->name('autor-update');
    Route::delete('/{id}', [AutorController::class, 'destroy'])->where('id', '[0-9]+')->name('autor-destroy');
    Route::get('/relatorio', [AutorController::class, 'relatorio'])->name('autor-relatorio');
});

Route::prefix('genero')->group(function () {
    Route::get('/', [GeneroController::class, 'index'])->name('genero-index');
    Route::get('/create', [GeneroController::class, 'create'])->name('genero-create');
    Route::post('/', [GeneroController::class, 'store'])->name('genero-store');
    Route::get('/{id}/edit', [GeneroController::class, 'edit'])->where('id', '[0-9]+')->name('genero-edit');
    Route::put('/{id}', [GeneroController::class, 'update'])->where('id', '[0-9]+')->name('genero-update');
    Route::delete('/{id}', [GeneroController::class, 'destroy'])->where('id', '[0-9]+')->name('genero-destroy');
    Route::get('/relatorio', [GeneroController::class, 'relatorio'])->name('genero-relatorio');
});

Route::prefix('editora')->group(function () {
    Route::get('/', [EditoraController::class, 'index'])->name('editora-index');
    Route::get('/create', [EditoraController::class, 'create'])->name('editora-create');
    Route::post('/', [EditoraController::class, 'store'])->name('editora-store');
    Route::get('/{id}/edit', [EditoraController::class, 'edit'])->where('id', '[0-9]+')->name('editora-edit');
    Route::put('/{id}', [EditoraController::class, 'update'])->where('id', '[0-9]+')->name('editora-update');
    Route::delete('/{id}', [EditoraController::class, 'destroy'])->where('id', '[0-9]+')->name('editora-destroy');
    Route::get('/relatorio', [EditoraController::class, 'relatorio'])->name('editora-relatorio');
});

Route::prefix('livro')->group(function () {
    Route::get('/', [LivroController::class, 'index'])->name('livro-index');
    Route::get('/create', [LivroController::class, 'create'])->name('livro-create');
    Route::post('/', [LivroController::class, 'store'])->name('livro-store');
    Route::get('/{id}/edit', [LivroController::class, 'edit'])->where('id', '[0-9]+')->name('livro-edit');
    Route::put('/{id}', [LivroController::class, 'update'])->where('id', '[0-9]+')->name('livro-update');
    Route::delete('/{id}', [LivroController::class, 'destroy'])->where('id', '[0-9]+')->name('livro-destroy');
    Route::get('/relatorio', [LivroController::class, 'relatorio'])->name('livro-relatorio');
});
