<?php

namespace App\Http\Controllers\Article;

use App\Models\Tag;
use App\Models\Article;
use App\Models\Category;
use App\Http\Controllers\Article\BaseController;


class EditController extends BaseController
{
    public function __invoke(int $id)
    {
        $article = Article::find($id);
        $categories = Category::all();
        $tags = Tag::all();
        
        return view('articles.edit', compact('article', 'categories', 'tags'));
    }
}
