<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel Blog</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1 class="my-3">{{ $article->title }}</h1>
        <p>{{ $article->text }}</p>
        <a href="/articles">go back</a>
        <form action="{{ url('delete/' . $article->id) }}" method="POST">
            @method('DELETE')
            @csrf
            <button class="btn btn-danger my-3">delete</button>
        </form>
    </div>
</body>

</html>
