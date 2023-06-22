<?php

use App\Http\Controllers\Article;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/articles', [Article::class, 'index']);
Route::get('/create', [Article::class, 'create_view']);
Route::post('/create', [Article::class, 'create']);
Route::get('/edit/{id}', [Article::class, 'edit_view']);
Route::put('/edit/{id}', [Article::class, 'edit']);
Route::get('/article/{id}', [Article::class, 'article']);
Route::delete('/delete/{id}', [Article::class, 'delete']);