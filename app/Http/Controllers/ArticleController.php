<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    public function show() {
        $articles = Article::all();
        return view('articles', ['articles'=>$articles]);
    }

    public function one($id) {
        $article = Article::find($id);
        return view('article', ['article'=>$article]);
    }
}
