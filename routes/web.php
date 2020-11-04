<?php

use Illuminate\Support\Facades\Route;
// Controller




Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\ArticleController;

Route::resource('/artikel', ArticleController::class);

// CRUD routes Lama ini yang bawah
// Route::get('/artikel', [ArticleController::class, 'index']);
// Route::get('/artikel/create', [ArticleController::class, 'create']);
// Route::get('/artikel/{slug}', [ArticleController::class, 'show']);
// Route::post('/artikel', [ArticleController::class, 'store']);
// Route::get('/artikel/{id}/edit', [ArticleController::class, 'edit']);
// Route::put('/artikel/{id}', [ArticleController::class, 'update']);
// Route::delete('/artikel/{id}', [ArticleController::class, 'destroy']);
