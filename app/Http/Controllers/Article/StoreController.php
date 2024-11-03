<?php

namespace App\Http\Controllers\Article;

use App\Models\Article;
use Illuminate\Routing\Controller;


class StoreController extends Controller
{
    public function __invoke()
    {
        $data = request()->validate([
            'title'=>'required|string',
            'content'=>'required|string',
            'image'=>'',
            'category_id'=>'',
            'tags'=>'required',
        ]);
        $tags = $data['tags'];
        unset($data['tags']);
        
        $article = Article::create($data);
        $article->tags()->attach($tags);

        return redirect()->route('articles.index');
    }
}
