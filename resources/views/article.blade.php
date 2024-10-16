@extends('layouts.main')
@section('main')
    
<div class="flex content-center flex-col w-1080 ">
    <div class="flex content-center flex-col py-8 flex-wrap px-8">
        <img src="{{$article->image}}" alt="image" class=" mr-auto my-0">
        <h1 class="text-gray-800 text-3xl font-extrabold sm:text-4xl mt-5">{{ $article->title }}</h1>
        <span class="text-gray-400 mt-3">Просмотров: {{ $article->views }}</span>
        <span class="text-gray-400 mt-1">Лайков: {{ $article->likes }}</span>
        <p class="text-gray-400 mt-1 leading-relaxed mt-4 w-4/5">{{ $article->content }}</p>
        <a class="mt-5 outline-none flex items-center text-[14px] text-blue-600 decoration-blue-600 hover:underline" href="/articles/">Вернуться к каталогу статей</a>
    </div>
</div>

@endsection


