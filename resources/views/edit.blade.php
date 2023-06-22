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
        <h1 class="my-3">Create article</h1>
        <form action="{{ url('edit/' . $article->id) }}" method="POST">
            @method('PUT')
            @csrf

            <div class="mb-3">
                <input type="text" class="form-control" name="title" placeholder="title"
                    value="{{ $article->title }}">
            </div>

            <div class="mb-3">
                <textarea class="form-control" name="text" rows="3" placeholder="write your blog">{{ $article->text }}</textarea>
            </div>
            <button class="btn btn-primary" type="submit">save</button>

        </form>
    </div>
</body>

</html>
