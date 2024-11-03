<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\ArticleTag;
use App\Models\Category;
use App\Models\Tag;

class MainController extends Controller
{
    public function main() 
    {
        $articles = Article::all()->sortByDesc('id')->take(6);
        return view('welcome', ['articles'=>$articles]);
    }
}
