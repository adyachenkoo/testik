<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    public function index() 
    {
        $articles = Article::all()->take(6);
        return view('welcome', ['articles'=>$articles]);
    }
 
    public function show() 
    {
        $articles = Article::paginate(10);
        return view('articles', ['articles'=>$articles]);
    }

    public function card(int $id)
    {
        $article = Article::find($id);
        return view('article', ['article'=>$article]);
    }

    public function create() 
    {
        $articlesArr = [
            [
                'title'=>'Загадочная вселенная: тайны космоса 2',
                'content'=>'На просторах бескрайних вод, где свет играет на поверхности, существует удивительный мир. Глубины океана, словно неведомый космос, полны тайных обитателей, каждый из которых имеет свою историю. Рыбы, как главные герои этой подводной симфонии, плавно скользят среди волновых движений. Их чешуя сверкает, отражая солнечные лучи, и иногда кажется, что они танцуют под водной мелодией.',
            ],
            [
                'title'=>'Другая загадочная вселенная: тайны космоса 3',
                'content'=>'На просторах бескрайних вод, где свет играет на поверхности, существует удивительный мир. Глубины океана, словно неведомый космос, полны тайных обитателей, каждый из которых имеет свою историю. Рыбы, как главные герои этой подводной симфонии, плавно скользят среди волновых движений. Их чешуя сверкает, отражая солнечные лучи, и иногда кажется, что они танцуют под водной мелодией.',
            ],

        ];

        foreach($articlesArr as $article){
            Article::create($article);
        }
        
    }

    public function update(int $id) 
    {
        $article = Article::find($id);
        
        $article->update([
            'title'=>'updated'
        ]);
    }
    
    public function delete(int $id) 
    {
        $article = Article::withTrashed()->find($id);
        
        $article->delete();
    }
}
