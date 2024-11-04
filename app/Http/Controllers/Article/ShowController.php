<?php

namespace App\Http\Controllers\Article;

use App\Models\Article;
use App\Http\Controllers\Article\BaseController;


class ShowController extends BaseController
{
    public function __invoke(int $id)
    {
        $article = Article::findOrFail($id);
        return view('articles.show', ['article'=>$article]);
    }
}
