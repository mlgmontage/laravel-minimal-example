<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
    </head>
    <body>
        <a href="/create">create</a>
        <h1>Articles</h1>

        @foreach ($articles as $item)
            <a href="/article/{{ $item->id }}">
                <h1>{{ $item->title }}</h1> 
            </a>
        @endforeach
    </body>
</html>