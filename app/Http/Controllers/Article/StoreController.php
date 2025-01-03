<?php

namespace App\Http\Controllers\Article;

use App\Models\Article;
use App\Http\Requests\Article\StoreRequest;
use App\Http\Resources\Article\ArticleResource;
use App\Http\Controllers\Article\BaseController;


class StoreController extends BaseController
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();

        $article = $this->service->store($data);
        
        return $request->is('api/*') ? new ArticleResource($article) : redirect()->route('articles.index');
    }
}
