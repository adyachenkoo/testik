<?php

namespace App\Http\Controllers\Article;

use App\Models\Article;
use App\Http\Requests\Article\FilterRequest;
use App\Http\Controllers\Article\BaseController;
use App\Http\Filters\ArticleFilter;


class IndexController extends BaseController
{
    public function __invoke(FilterRequest $request)
    {
        $data = $request->validated();
        $filter = app()->make(ArticleFilter::class, ['queryParams' => array_filter($data)]);
        $articles = Article::filter($filter)->paginate(3);

        // $articles = Article::paginate(10);
        return view('articles.index', ['articles'=>$articles]);
    }
}
