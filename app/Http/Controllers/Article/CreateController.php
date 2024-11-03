<?php

namespace App\Http\Controllers\Article;

use App\Models\Tag;
use App\Models\Category;
use Illuminate\Routing\Controller;


class CreateController extends Controller
{
    public function __invoke()
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('articles.create', compact('categories', 'tags'));
    }
}
