<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/app.css">
    <title>Document</title>
</head>
<body>
    <div class="article__card">
        <h3>{{ $article->title }}</h3>
        <p>{{ $article->text }}</p>
    </div>  
    <a href="/articles">Вернуться назад...</a>
</body>
</html>

