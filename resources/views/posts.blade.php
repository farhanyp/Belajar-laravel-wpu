
@extends('layouts.main')

@section('container')
    <h1 class="pb-4">
        {{ $title }}
    </h1>

    @if ($posts->count())
        <div class="card mb-3">
            <img src="" class="card-img-top" alt="...">
            <div class="card-body text-center">
                <h3 class="card-title"><a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none text-dark">{{ $posts[0]->title }}</a></h3>
                <small>
                    <p>by: 
                        <a href="/authors/{{ $posts[0]->user->username }}" class="text-decoration-none">{{ $posts[0]->user->name }}
                        </a> in 
                        <a href="/category/{{ $posts[0]->category->slug }}" class="text-decoration-none">{{ $posts[0]->category->name }}
                        </a>
                        {{ $posts[0]->created_at->diffForHumans() }}
                    </p>
                </small>
                <p class="card-text">{{ $posts[0]->excerpt }}</p>
                <a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none btn btn-primary">Read more</a>
            </div>
        </div>
    @else
        <p class="text-center fs-4">No post found.</p>
    @endif

    <div class="container">
        <div class="row">
            @foreach ($posts->skip(1) as $post)
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <div class="position-absolute px-3 py-2 text-white" style="background-color: rgba(0, 0, 0, 0.7)">
                            <a href="/category/{{ $post->category->slug }}" class="text-white text-decoration-none">
                                {{ $post->category->name }}
                            </a>
                        </div>
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                        <h5 class="card-title">{{ $post->title }}</h5>
                        <small>
                            <p>by: 
                                <a href="/authors/{{ $posts[0]->user->username }}" class="text-decoration-none">{{ $posts[0]->user->name }}
                                </a>
                                {{ $posts[0]->created_at->diffForHumans() }}
                            </p>
                        </small>
                        <p class="card-text">S{{ $post->excerpt }}.</p>
                        <a href="/posts/{{ $post->slug }}" class="btn btn-primary">Read More..</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
