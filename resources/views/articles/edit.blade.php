@extends('layouts.main')
@section('main')
    




<div class="d-flex flex-column align-items-center justify-content-center min-vh-90">
  <div class="container w-50">
    <h1 class="text-center mb-4">Редактирование статьи</h1>
    <form class="" method="POST" action="{{ route('articles.update', $article->id) }}">
      @csrf
      @method('patch')
      <div class="mb-4">
        <label class="form-label" for="username">
          Title
        </label>
        <input value="{{$article->title}}" name="title" class="form-control" id="username" type="text" placeholder="Title">
      </div>
      <div class="mb-4">
        <label class="form-label" for="password">
          Content
        </label>
        <textarea name="content" class="form-control" id="password" type="textarea" placeholder="Content">{{$article->content}}</textarea>
      </div>
      <div class="mb-4">
        <label class="form-label" for="password">
          Image
        </label>
        <input value="{{$article->image}}" name="image" class="form-control" id="password" type="text" placeholder="Image">
      </div>
      <div class="mb-4">
        <label class="form-label" for="categoryForm">
          Category
        </label>
        <select id="categoryForm" name="category_id" class="form-select">
          @foreach ($categories as $category)
            <option 
              {{$category->id === $article->category->id ? 'selected' : ''}}
            value="{{$category->id}}">{{ $category->title }}</option>
          @endforeach
        </select>
      </div>
      <label class="form-label" for="categoryForm">
        Tags
      </label>
      
      <div class="mb-4">
        <select multiple id="tags" name="tags[]" class="form-select">
          @foreach ($tags as $tag)
            <option 
            @foreach ($article->tags as $articleTag)
                {{ $tag->id === $articleTag->id ? 'selected' : ''}}
            @endforeach
              
            value="{{$tag->id}}">{{ $tag->title }}</option>
          @endforeach
        </select>
      </div>
      <div class="mb-4">
        <p class="block text-gray-700 text-sm font-bold mb-2" for="username">
          ID: {{$article->id}}
        </p>
      </div>
      <div class="d-flex justify-content-center gap-3">
        <a class="btn btn-outline-primary" href="{{route('articles.index')}}">Вернуться к каталогу статей</a>
        <button class="btn btn-outline-success" type="submit">
          Подтвердить редактирование
        </button>
      </div>
    </form>
  </div>
</div>
  
  

@endsection