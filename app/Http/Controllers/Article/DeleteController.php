<?php

namespace App\Http\Controllers\Article;

use App\Models\Article;
use Illuminate\Routing\Controller;


class DeleteController extends Controller
{
    public function __invoke(int $id)
    {
        $article = Article::find($id);
        $article->delete();
        return redirect()->route('articles.index');
    }
}
