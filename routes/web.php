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

Route::get('/edit/{id}', function (Request $request, string $id) {
    $article = ArticleModel::findOrFail($id);
    return view('edit', ['article' => $article]);
});

Route::put('/edit/{id}', function (Request $request, string $id) {
    $article = ArticleModel::findOrFail($id);
    $article->title = $request->input('title');
    $article->text = $request->input('text');

    $article->save();

    return redirect('/articles');
});

Route::get('/article/{id}', function (Request $request, string $id) {
    $article = ArticleModel::findOrFail($id);
    return view('article', ['article' => $article]);
});

Route::delete('/delete/{id}', function (Request $request, string $id) {
    $article = ArticleModel::findOrFail($id);
    $article->delete();
    return redirect('/articles');
});