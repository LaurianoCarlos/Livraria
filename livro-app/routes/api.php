<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LivroController;
use App\Http\Controllers\AutorController;
use App\Http\Controllers\AuthController;

// Rota para autenticação e registro de usuário
// Rotas públicas
Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::post('/login', [AuthController::class, 'login'])->name('login');

// Rotas protegidas pelo middleware de autenticação
Route::group(['middleware' => 'auth:api'], function () {
    
    //Usuário
    Route::prefix('users')->group(function () {
        Route::get('/', [UserController::class, 'index']);
        Route::get('/{id}', [UserController::class, 'show']);
        Route::put('/{id}', [UserController::class, 'update']);
        Route::delete('/{id}', [UserController::class, 'destroy']);
    });

    //Autor
    Route::prefix('livros')->group(function () {
        Route::get('/', [LivroController::class, 'index']);
        Route::post('/', [LivroController::class, 'store']);
        Route::get('/{id}', [LivroController::class, 'show']);
        Route::put('/{id}', [LivroController::class, 'update']);
        Route::delete('/{id}', [LivroController::class, 'destroy']);
    });

    //Livros
    Route::prefix('autores')->group(function () {
        Route::get('/', [AutorController::class, 'index']);
        Route::post('/', [AutorController::class, 'store']);
        Route::get('/{id}', [AutorController::class, 'show']);
        Route::put('/{id}', [AutorController::class, 'update']);
        Route::delete('/{id}', [AutorController::class, 'destroy']);

        // Rota para obter os livros de um autor específico
        Route::get('/{id}/livros', [AutorController::class, 'livrosDoAutor']);
    });
});
