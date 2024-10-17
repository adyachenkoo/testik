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
      <div class="mb-6">
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