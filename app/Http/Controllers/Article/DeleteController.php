<?php

namespace App\Http\Controllers\Article;

use App\Models\Article;
use App\Http\Requests\Article\FilterRequest;
use App\Http\Controllers\Article\BaseController;


class DeleteController extends BaseController
{
    public function __invoke(FilterRequest $request, int $id)
    {
        $article = Article::find($id);
        $article->delete();
        return $request->is('api/*') ? 'The article has been deleted' : redirect()->route('articles.index');
    }
}
