<?php

namespace App\Http\Controllers;

use App\Models\ArticleModel;

use Illuminate\Http\Request;

class Article extends Controller
{
    //
    public function index()
    {
        $articles = ArticleModel::all();
        return view('articles', ['articles' => $articles]);
    }
    public function create_view()
    {
        return view('create');
    }

    public function create(Request $request)
    {
        $article = new ArticleModel();
        $article->title = $request->input('title');
        $article->text = $request->input('text');

        $article->save();

        return redirect('/articles');
    }

    public function edit_view(Request $request, string $id)
    {
        $article = ArticleModel::findOrFail($id);
        return view('edit', ['article' => $article]);
    }

    public function edit(Request $request, string $id)
    {
        $article = ArticleModel::findOrFail($id);
        $article->title = $request->input('title');
        $article->text = $request->input('text');

        $article->save();

        return redirect('/articles');
    }

    public function article(Request $request, string $id)
    {
        $article = ArticleModel::findOrFail($id);
        return view('article', ['article' => $article]);
    }

    public function delete(Request $request, string $id)
    {
        $article = ArticleModel::findOrFail($id);
        $article->delete();
        return redirect('/articles');
    }
}