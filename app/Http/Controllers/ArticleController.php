<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    public function index() {
        $articles = Article::all()->take(6);
        return view('welcome', ['articles'=>$articles]);
    }
 
    public function show() {
        $articles = Article::paginate(10);
        return view('articles', ['articles'=>$articles]);
    }

    public function one($id) {
        $article = Article::find($id);
        return view('article', ['article'=>$article]);
    }
}
