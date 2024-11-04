<?php

namespace App\Http\Controllers\Article;

use App\Models\Article;
use App\Http\Controllers\Article\BaseController;


class IndexController extends BaseController
{
    public function __invoke()
    {
        $articles = Article::paginate(10);
        return view('articles.index', ['articles'=>$articles]);
    }
}
