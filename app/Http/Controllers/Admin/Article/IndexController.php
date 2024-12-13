<?php

namespace App\Http\Controllers\Admin\Article;

use App\Models\Article;
use App\Http\Requests\Article\FilterRequest;
use App\Http\Controllers\Controller;
use App\Http\Filters\ArticleFilter;


class IndexController extends Controller
{
    public function __invoke(FilterRequest $request)
    {
        $data = $request->validated();
        $filter = app()->make(ArticleFilter::class, ['queryParams' => array_filter($data)]);
        $articles = Article::filter($filter)->paginate(10);

        return view('admin.articles.index', ['articles'=>$articles]);
    }
}
