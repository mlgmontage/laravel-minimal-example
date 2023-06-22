<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
    </head>
    <body>
        <h1>Create article</h1>
        <form action="{{url('create')}}" method="POST">
            @csrf
            <input name="title" />
            <input name="text" />
            <button type="submit">submit</button>
        </form>
    </body>
</html>