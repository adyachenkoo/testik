@extends('layouts.main')
@section('main')
    
<div class="flex content-center flex-col w-1080 ">
    <div class="flex content-center flex-col py-8 flex-wrap px-8">
        <img src="{{$article->image}}" alt="image" class=" mr-auto my-0">
        <h1 class="text-gray-800 text-3xl font-extrabold sm:text-4xl mt-5">{{ $article->title }}</h1>
        <span class="text-gray-400 mt-3">Просмотров: {{ $article->views }}</span>
        <span class="text-gray-400 mt-1">Лайков: {{ $article->likes }}</span>
        <p class="text-gray-400 mt-1 leading-relaxed mt-4 w-4/5">{{ $article->content }}</p>
        <div class="flex gap-3 mt-5">
            <a class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded  mb-3" href="{{route('articles.edit', $article)}}">Редактировать статью</a>
            <form action="{{route('articles.delete', $article->id)}}" method="POST">@csrf @method('delete')<button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded  mb-3" type="submit">Удалить статью</button></form>
            <a class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded  mb-3" href="{{route('articles.index')}}">Вернуться к каталогу статей</a>
        </div>
            
    </div>
</div>

@endsection


