<?php

use App\Http\Controllers\ProfileController;
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

require __DIR__ . '/auth.php';

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/', function () {
    return view('welcome');
});

Route::fallback(function () {
    return "Página não exite";
});


Route::get('/', function () {
    return view('welcome');
})->name('/');

Route::group(['prefix' => 'genero', 'middleware' => ['auth']], function () {
    Route::get('/', [GeneroController::class, 'index'])->name('genero-index');
    Route::get('/create', [GeneroController::class, 'create'])->name('genero-create');
    Route::post('/', [GeneroController::class, 'store'])->name('genero-store');
    Route::get('/{id}/edit', [GeneroController::class, 'edit'])->where('id', '[0-9]+')->name('genero-edit');
    Route::put('/{id}', [GeneroController::class, 'update'])->where('id', '[0-9]+')->name('genero-update');
    Route::delete('/{id}', [GeneroController::class, 'destroy'])->where('id', '[0-9]+')->name('genero-destroy');
});

Route::group(['prefix' => 'autor', 'middleware' => ['auth']], function () {
    Route::get('/autor', [AutorController::class, 'index'])->name('autor-index');
    Route::get('autor/create', [AutorController::class, 'create'])->name('autor-create');
    Route::post('autor/', [AutorController::class, 'store'])->name('autor-store');
    Route::get('autor/{id}/edit', [AutorController::class, 'edit'])->where('id', '[0-9]+')->name('autor-edit');
    Route::put('autor/{id}', [AutorController::class, 'update'])->where('id', '[0-9]+')->name('autor-update');
    Route::delete('autor/{id}', [AutorController::class, 'destroy'])->where('id', '[0-9]+')->name('autor-destroy');
});

Route::group(['prefix' => 'editora', 'middleware' => ['auth']], function () {
    Route::get('/', [EditoraController::class, 'index'])->name('editora-index');
    Route::get('/create', [EditoraController::class, 'create'])->name('editora-create');
    Route::post('/', [EditoraController::class, 'store'])->name('editora-store');
    Route::get('/{id}/edit', [EditoraController::class, 'edit'])->where('id', '[0-9]+')->name('editora-edit');
    Route::put('/{id}', [EditoraController::class, 'update'])->where('id', '[0-9]+')->name('editora-update');
    Route::delete('/{id}', [EditoraController::class, 'destroy'])->where('id', '[0-9]+')->name('editora-destroy');
});

Route::group(['prefix' => 'livro', 'middleware' => ['auth']], function () {
    Route::get('/', [LivroController::class, 'index'])->name('livro-index');
    Route::get('/create', [LivroController::class, 'create'])->name('livro-create');
    Route::post('/', [LivroController::class, 'store'])->name('livro-store');
    Route::get('/{id}/edit', [LivroController::class, 'edit'])->where('id', '[0-9]+')->name('livro-edit');
    Route::put('/{id}', [LivroController::class, 'update'])->where('id', '[0-9]+')->name('livro-update');
    Route::delete('/{id}', [LivroController::class, 'destroy'])->where('id', '[0-9]+')->name('livro-destroy');
});
