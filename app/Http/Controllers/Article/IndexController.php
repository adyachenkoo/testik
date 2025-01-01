<?php

namespace App\Http\Controllers\Article;

use App\Models\Article;
use App\Http\Filters\ArticleFilter;
use App\Http\Requests\Article\FilterRequest;
use App\Http\Resources\Article\ArticleResource;
use App\Http\Controllers\Article\BaseController;


class IndexController extends BaseController
{
    public function __invoke(FilterRequest $request)
    {
        $data = $request->validated();

        $page = $data['page'] ?? 1;
        $perPage = $data['per_page'] ?? 6;

        $filter = app()->make(ArticleFilter::class, ['queryParams' => array_filter($data)]);
        $articles = Article::filter($filter)->paginate($perPage, ['*'], 'page', $page);
        return ArticleResource::collection($articles);
        // return view('articles.index', ['articles'=>$articles]);
    }
}
