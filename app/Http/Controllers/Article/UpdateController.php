<?php

namespace App\Http\Controllers\Article;

use App\Models\Article;
use App\Http\Requests\Article\UpdateRequest;
use App\Http\Resources\Article\ArticleResource;
use App\Http\Controllers\Article\BaseController;


class UpdateController extends BaseController
{
    public function __invoke(UpdateRequest $request, int $id)
    {
        $data = $request->validated();

        $article = $this->service->update($id, $data);
        

        return new ArticleResource($article);
        return redirect()->route('articles.show', ['id'=>$id]);
    }
}
