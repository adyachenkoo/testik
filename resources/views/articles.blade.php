@foreach ($articles as $article)
    <div style="border: 3px solid red;">
        <h3>{{ $article->title }}</h3>
        <p>{{ substr($article->text, 0, 100) }}...</p>
        <a href="/articles/{{$article->id}}">Подробнее...</a>
        <br><br>
    </div>
    <br>
@endforeach