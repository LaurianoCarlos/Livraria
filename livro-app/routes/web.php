<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LivroController;
use App\Http\Controllers\AutorController;

Route::prefix('livros')->group(function () {
    Route::get('/', [LivroController::class, 'index']);
    Route::post('/', [LivroController::class, 'store']);
    Route::get('/{id}', [LivroController::class, 'show']);
    Route::put('/{id}', [LivroController::class, 'update']);
    Route::delete('/{id}', [LivroController::class, 'destroy']);

Route::prefix('autores')->group(function () {
    Route::get('/', [AutorController::class, 'index']);
    Route::post('/', [AutorController::class, 'store']);
    Route::get('/{id}', [AutorController::class, 'show']);
    Route::put('/{id}', [AutorController::class, 'update']);
    Route::delete('/{id}', [AutorController::class, 'destroy']);

    
     //rota para obter os livros de um autor específico
     Route::get('/{id}/livros', [AutorController::class, 'livrosDoAutor']);
});

});
