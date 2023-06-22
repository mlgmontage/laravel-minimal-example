<?php

use App\Models\ArticleModel;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/articles', function () {
    $articles = ArticleModel::all();
    return view('articles', ['articles' => $articles]);
});

Route::get('/create', function () {
    return view('create');
});

Route::post('/create', function (Request $request) {
    $article = new ArticleModel();
    $article->title = $request->input('title');
    $article->text = $request->input('text');

    $article->save();

    return redirect('/articles');
});



Route::get('/article/{id}', function (Request $request, string $id) {
    return view('article', ['id' => $id]);
});