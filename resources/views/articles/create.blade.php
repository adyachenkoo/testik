@extends('layouts.main')
@section('main')
    




<div class="d-flex flex-column align-items-center justify-content-center min-vh-90 bg-light">
  <div class="container w-50">
  <h1 class="text-center mb-4">Создание статьи</h1>
    <form class="" method="POST" action="{{ route('articles.store') }}">
      @csrf
      <div class="mb-4">
        <label class="form-label" for="username">
          Title
        </label>
        <input name="title" value="{{old('title')}}" class="form-control" id="username" type="text" placeholder="Title">
        @error('title')
        <p class="text-danger">{{$message}}</p>
        @enderror
      </div>
      <div class="mb-4">
        <label class="form-label" for="password">
          Content
        </label>
        <input name="content" value="{{old('content')}}" class="form-control" id="password" type="text" placeholder="Content">
        @error('content')
        <p class="text-danger">{{$message}}</p>
        @enderror
      </div>
      <div class="mb-4">
        <label class="form-label" for="password">
          Image
        </label>
        <input name="image" value="{{old('image')}}" class="form-control" id="password" type="text" placeholder="Image">
      </div>
      <div class="mb-4">
        <label class="form-label" for="category">
          Category
        </label>
        <select id="category" name="category_id" class="form-select">
          @foreach ($categories as $category)
            <option 
            {{$category->id == old('category_id') ? 'selected' : ''}}
            value="{{$category->id}}">{{ $category->title }}</option>
          @endforeach
        </select>
      </div>
      <label class="form-label" for="tags">
        Tags
      </label>
      <div class="mb-4">
        <select multiple id="tags" name="tags[]" class="form-select">
          @foreach ($tags as $tag)
            <option 
            @if (old('tags'))
              @foreach (old('tags') as $oldTag)
                {{$tag->id == $oldTag ? 'selected' : ''}} 
              @endforeach
            @endif
            value="{{$tag->id}}">{{ $tag->title }}</option>
          @endforeach
        </select>
        @error('tags')
        <p class="text-danger">{{$message}}</p>
        @enderror
      </div>
      
      <div class="d-flex justify-content-center gap-3">
        <a class="btn btn-outline-primary" href="{{route('articles.index')}}">Вернуться к каталогу статей</a>
        <button class="btn btn-outline-success" type="submit">
          Добавить статью
        </button>
      </div>
    </form>
  </div>
</div>
  
  

@endsection