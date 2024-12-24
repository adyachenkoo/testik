@extends('layouts.main')
@section('main')
    
<div class="d-flex flex-column align-items-center justify-content-center min-vh-90 bg-light">
    <div class="container text-center">
        <img src="{{$article->image}}" alt="image" class="img-fluid rounded mb-4">
        <h1 class="mb-3">{{ $article->title }}</h1>
        <div class="mb-2">
            <span class="badge bg-secondary me-2">Просмотров: {{ $article->views }}</span>
        </div>
        <div class="mb-2">
            <span class="badge bg-primary me-2">Лайков: {{ $article->likes }}</span>
        </div>
        <div class="mb-2">
            <a href="/articles?category_id={{ $article->category->id }}" class="badge bg-success">Категория: {{ $article->category->title }}</a>
        </div>

        <div class="mb-2">
            <span class="badge bg-dark">Теги:
                @foreach ($article->tags as $tag)
                <a class="text-white" href="">{{ ($tag->title) }}</a>
                @endforeach
            </span>
        </div>
        
        <p class="lead mb-4">{{ $article->content }}</p>
        <div class="d-flex justify-content-center gap-3">
            @can('view', auth()->user())
                <a class="btn btn-outline-warning" href="{{route('articles.edit', $article)}}">Редактировать статью</a>
                <form action="{{route('articles.delete', $article->id)}}" method="POST">@csrf @method('delete')<button class="btn btn-outline-danger" type="submit">Удалить статью</button></form>
            @endcan
            <a class="btn btn-outline-primary" href="{{route('articles.index')}}">Вернуться к каталогу статей</a>
        </div>
            
    </div>
</div>

@endsection


