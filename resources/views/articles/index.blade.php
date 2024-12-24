@extends('layouts.main')
@section('main')

    
<div class="container justify-content-center">
    @can('view', auth()->user())
        <a href="{{route('articles.create')}}" class="btn btn-outline-primary btn-lg">
            Создать статью
        </a>
    @endcan
    <h1 class="h1 text-center">Статьи:</h1>
    <div class="row row-cols-1 row-cols-md-3 g-4">
        @foreach ($articles as $article)
        <div class="col">
            <div class="card h-100" >
                <img src="{{$article->image}}" class="card-img-top" alt="image">
                <div class="card-body">
                    <h3 class="card-title">{{ $article->title }}</h3>
                    <p class="card-text">{{ mb_substr($article->content, 0, 100, 'utf-8') }}...</p>

                </div>
                <div class="card-footer ">
                        <a href="{{route('articles.show', $article->id)}}" class="btn btn-primary">Подробнее...</a>
                    </div>
            </div>
        </div>
        @endforeach
    </div>
    {{ $articles->withQueryString()->links() }}
</div>


@endsection

