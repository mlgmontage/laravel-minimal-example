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
        <a href="/create" class="btn btn-primary my-2">create</a>
        <h1>Articles</h1>

        @foreach ($articles as $item)
            <a href="/article/{{ $item->id }}">
                <h2>{{ $item->title }}</h2>
            </a>
        @endforeach
    </div>
</body>

</html>
