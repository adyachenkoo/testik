<?php

namespace App\Http\Controllers\Article;

use App\Models\Article;
use Illuminate\Routing\Controller;


class UpdateController extends Controller
{
    public function __invoke(int $id)
    {
        $data = request()->validate([
            'title'=>'string',
            'content'=>'string',
            'image'=>'string',
            'category_id'=>'',
            'tags'=>''
        ]);
        $tags = $data['tags'];
        unset($data['tags']);

        $article = Article::find($id);

        $article->update($data);
        $article->tags()->sync($tags);
        
        return redirect()->route('articles.show', ['id'=>$id]);
    }
}
