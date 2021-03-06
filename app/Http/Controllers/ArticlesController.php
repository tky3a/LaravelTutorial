<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class ArticlesController extends Controller
{
    public function index() {
      $articles = Article::all();
      return view('articles.index',['articles' => $articles]);
    }

    public function create() {
      return view('articles.create');
    }

    public function store(Request $request) {
      $article = new Article;
      $article->title = $request->title;
      $article->body = $request->body;
      $article->save();

      return view('articles.store');
    }

    public function edit(Request $request, $id) {
      $article = Article::find($id);
      return view('articles.edit', ['article' => $article]);
    }

    public function update(Request $request) {
      $article = Article::find($request->id);
      $article->title = $request->title;
      $article->body = $request->body;
      $article->save();

      return view('articles.update');
    }

    public function show(Request $request, $id) {
      $article = Article::find($id);
      return view('articles.show', ['article' => $article]);
    }

    public function delete(Request $request) {
      Article::destroy($request->id);
      return view('articles.delete');
    }
}
