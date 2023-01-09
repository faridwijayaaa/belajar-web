@extends('home')
@section('title', 'HomePage')
@section('content')
    <div class="grid-container">
        <div class="grid">
            @foreach ($posts as $post)
                <div class="grid__item">
                    <div class="card"><img class="card__img" src="{{ $post->imgUrl }}" alt="Snowy Mountains">
                        <div class="card__content">
                            <h1 class="card__header">{{ $post->title }}</h1>
                            <h3 class="card_user">By {{ $post->author }} | {{ $post->created_at }}</h3>
                            <p class="card__text">{{ \Illuminate\Support\Str::limit($post->content, 100) }}
                            </p>
                            <a href="/post/detail/{{ $post->id }}"><button class="card__btn"> Read More
                                    <span>&rarr;</span></button></a>
                        </div>
                    </div>
                </div>
            @endforeach
            <div class="grid__item">
                <div class="card"><img class="card__img"
                        src="https://images.unsplash.com/photo-1623057000049-e220f79c7051?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=704&q=80">
                    <div class="card__content">
                        <a href="/post/create/"> <button class="card_new">Add new content <span>&rarr;</span></button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- partial -->
@endsection
