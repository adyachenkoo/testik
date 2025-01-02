<?php 

namespace App\Services\Article;

use App\Models\Article;
use Illuminate\Support\Facades\DB;

class Service 
{
    public function store($data) 
    {
        try {

            DB::beginTransaction();

            $tags = $data['tags'];
            unset($data['tags']);
    
            $article = Article::create($data);
            $article->tags()->attach($tags);

            DB::commit();
    
            return $article;

        } catch (\Exception $exception) {

            DB::rollback();

            return $exception->getMessage();
        
        }
    }

    public function update($id, $data) 
    {
        try {

            DB::beginTransaction();

            $tags = $data['tags'];
            unset($data['tags']);
            
            $article = Article::find($id);
            $article->update($data);
            $article->tags()->sync($tags);

            DB::commit();
            
            return $article->fresh();
            
        } catch (\Exception $exception) {

            DB::rollback();
            
            return $exception->getMessage();
        
        }
    }
}