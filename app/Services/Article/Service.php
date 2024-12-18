<?php 

namespace App\Services\Article;

use App\Models\Article;

class Service 
{
    public function store($data) 
    {
        $tags = $data['tags'];
        unset($data['tags']);

        $article = Article::create($data);
        $article->tags()->attach($tags);
    }

    public function update($id, $data) 
    {
        $tags = $data['tags'];
        unset($data['tags']);

        $article = Article::find($id);
        $article->update($data);
        $article->tags()->sync($tags);
    }
}