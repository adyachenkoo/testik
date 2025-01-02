<?php

namespace App\Http\Controllers\Article;

use App\Models\Article;
use App\Http\Requests\Article\FilterRequest;
use App\Http\Resources\Article\ArticleResource;
use App\Http\Controllers\Article\BaseController;


class ShowController extends BaseController
{
    public function __invoke(FilterRequest $request, int $id)
    {
        $article = Article::findOrFail($id);
        return $request->is('api/*') ? new ArticleResource($article) : view('articles.show', ['article'=>$article]);
    }
}
