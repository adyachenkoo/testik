<?php

namespace App\Http\Controllers\Article;

use App\Models\Article;
use Illuminate\Routing\Controller;


class IndexController extends Controller
{
    public function __invoke()
    {
        $articles = Article::paginate(10);
        return view('articles.index', ['articles'=>$articles]);
    }
}
