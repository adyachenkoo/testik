@extends('layouts.main')
@section('main')
    




<div class="w-full w-3/5 mx-auto mt-5">
    <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" method="POST" action="{{ route('articles.update', $article->id) }}">
      @csrf
      @method('patch')
      <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
          Title
        </label>
        <input value="{{$article->title}}" name="title" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text" placeholder="Title">
      </div>
      <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
          Content
        </label>
        <textarea name="content" class="shadow appearance-none border rounded h-32 w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="password" type="textarea" placeholder="Content">{{$article->content}}</textarea>
      </div>
      <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
          Image
        </label>
        <input value="{{$article->image}}" name="image" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="password" type="text" placeholder="Image">
      </div>
      <label class="block text-gray-700 text-sm font-bold mb-2" for="categoryForm">
        Category
      </label>
      <div class="inline-block relative w-64">
        <select id="categoryForm" name="category_id" class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
          @foreach ($categories as $category)
            <option 
              {{$category->id === $article->category->id ? 'selected' : ''}}
            value="{{$category->id}}">{{ $category->title }}</option>
          @endforeach
        </select>
        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
          <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
        </div>
      </div>
      <label class="block text-gray-700 text-sm font-bold mb-2" for="categoryForm">
        Tags
      </label>
      
      <div class="inline-block relative w-64">
        <select multiple id="tags" name="tags[]" class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
          @foreach ($tags as $tag)
            <option 
            @foreach ($article->tags as $articleTag)
                {{ $tag->id === $articleTag->id ? 'selected' : ''}}
            @endforeach
              
            value="{{$tag->id}}">{{ $tag->title }}</option>
          @endforeach
        </select>
      </div>
      <div class="my-6">
        <p class="block text-gray-700 text-sm font-bold mb-2" for="username">
          ID: {{$article->id}}
        </p>
      </div>
      <div class="flex items-center justify-center">
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
          Подтвердить редактирование
        </button>
      </div>
    </form>
    
  </div>
  
  

@endsection