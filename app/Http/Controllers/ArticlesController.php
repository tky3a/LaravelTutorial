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
}
