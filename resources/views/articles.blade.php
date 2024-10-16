@extends('layouts.main')
@section('main')

    <div class="flex content-center flex-col w-1080 ">
        <div class="flex content-center flex-col py-8 flex-wrap bg-gray-200">
            <h1 class="text-gray-800 text-3xl font-extrabold sm:text-4xl text-center">Статьи:</h1>
            <div class="flex content-center justify-center pt-6 gap-6 flex-wrap">
                @foreach ($articles as $article)
                <div class="w-1/6 p-8 bg-white rounded-md shadow-md order-1 flex flex-col content-center justify-start">
                    <img src="{{$article->image}}" alt="image" class=" mx-auto my-0">
                    <h3 class="text-xl text-gray-900 font-semibold hover:underline mt-2">{{ $article->title }}</h3>
                    <p class="text-gray-400 mt-1 leading-relaxed mt-1">{{ mb_substr($article->content, 0, 100, 'utf-8') }}...</p>
                    <a class="mt-2 outline-none flex items-center text-[14px] text-blue-600 decoration-blue-600 hover:underline" href="/articles/{{$article->id}}">Подробнее...</a>
                </div>
                @endforeach
            </div>
        </div>
        
        {{ $articles->links('components/pagination', ['articles'=>$articles]) }}
        

    </div>
    
@endsection

