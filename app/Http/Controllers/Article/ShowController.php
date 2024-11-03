<?php

namespace App\Http\Controllers\Article;

use App\Models\Article;
use Illuminate\Routing\Controller;


class ShowController extends Controller
{
    public function __invoke(int $id)
    {
        $article = Article::findOrFail($id);
        return view('articles.show', ['article'=>$article]);
    }
}
