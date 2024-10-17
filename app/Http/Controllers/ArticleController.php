<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    public function main() 
    {
        $articles = Article::all()->take(6);
        return view('welcome', ['articles'=>$articles]);
    }
 
    public function index() 
    {
        $articles = Article::paginate(10);
        return view('articles.index', ['articles'=>$articles]);
    }

    public function show(int $id)
    {
        $article = Article::findOrFail($id);
        return view('articles.show', ['article'=>$article]);
    }

    public function create() 
    {
        
        return view('articles.create');
        
    }

    public function store()
    {
        $data = request()->validate([
            'title'=>'string',
            'content'=>'string',
            'image'=>'string',
        ]);
        Article::create($data);
        return redirect()->route('articles.index');
        
    }

    public function edit(int $id) 
    {
        $article = Article::find($id);
        
        return view('articles.edit', compact('article'));
        
    }
    
    public function update(int $id) 
    {
        $data = request()->validate([
            'title'=>'string',
            'content'=>'string',
            'image'=>'string',
        ]);

        $article = Article::find($id);

        $article->update($data);
        
        return redirect()->route('articles.show', ['id'=>$id]);
        
    }
    
    public function delete(int $id) 
    {
        $article = Article::find($id);
        $article->delete();
        return redirect()->route('articles.index');
    }
}
