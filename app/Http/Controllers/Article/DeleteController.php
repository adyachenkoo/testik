<?php

namespace App\Http\Controllers\Article;

use App\Models\Article;
use App\Http\Controllers\Article\BaseController;


class DeleteController extends BaseController
{
    public function __invoke(int $id)
    {
        $article = Article::find($id);
        $article->delete();
        return redirect()->route('articles.index');
    }
}
