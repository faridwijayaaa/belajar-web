<!DOCTYPE html>
<html lang="en">
@foreach ($posts as $post)

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>{{ $post->title }}</title>
        <link rel="stylesheet" href="/css/main.css">
    </head>

    <body>
        <div class="container">
            <img class="main__img" src="{{ $post->imgUrl }}">

            <div class="content">
                <h1>{{ $post->title }}</h1>
                <h3>{{ $post->author }} | {{ $post->created_at }} </h3>
                <p>{{ $post->content }}</p>
            </div>  
        </div>
    </body>
@endforeach

</html>
