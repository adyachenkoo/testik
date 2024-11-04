<?php

namespace App\Http\Controllers\Article;

use App\Models\Tag;
use App\Models\Category;
use App\Http\Controllers\Article\BaseController;


class CreateController extends BaseController
{
    public function __invoke()
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('articles.create', compact('categories', 'tags'));
    }
}
