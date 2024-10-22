<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\ArticleTag;
use App\Models\Category;
use App\Models\Tag;

class ArticleController extends Controller
{
    public function main() 
    {
        $articles = Article::all()->sortByDesc('id')->take(6);
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
        $categories = Category::all();
        $tags = Tag::all();
        return view('articles.create', compact('categories', 'tags'));
        
    }

    public function store()
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

    public function edit(int $id) 
    {
        $article = Article::find($id);
        $categories = Category::all();
        $tags = Tag::all();
        // $articleTags = ArticleTag::where('article_id', $article->id)->get();
        
        return view('articles.edit', compact('article', 'categories', 'tags'));
        
    }
    
    public function update(int $id) 
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
    
    public function delete(int $id) 
    {
        $article = Article::find($id);
        $article->delete();
        return redirect()->route('articles.index');
    }
}
