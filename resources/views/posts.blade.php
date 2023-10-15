
@extends('layouts.main')

@section('container')
    <h1 class="mb-3 text-center">
        {{ $title }}
    </h1>

    <div class="row justify-content-center mb-3">
        <div class="col-md-6">
            <form action="/posts" method="GET">
                @if (request('category'))
                    <input type="hidden" class="form-control" name="category" value={{ request('category') }}>
                @endif

                @if (request('user'))
                    <input type="hidden" class="form-control" name="user" value={{ request('user') }}>
                @endif
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search.." name="search" value={{ request('search') }}>
                    <button class="btn btn-outline-secondary" type="submit">Button</button>
                </div>
            </form>
        </div>
    </div>

    @if ($posts->count())
        <div class="card mb-3">
            <img src="" class="card-img-top" alt="...">
            <div class="card-body text-center">
                <h3 class="card-title"><a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none text-dark">{{ $posts[0]->title }}</a></h3>
                <small>
                    <p>by: 
                        <a href="/posts?user={{ $posts[0]->user->username }}" class="text-decoration-none">{{ $posts[0]->user->name }}
                        </a> in 
                        <a href="/posts/?category={{ $posts[0]->category->slug }}" class="text-decoration-none">{{ $posts[0]->category->name }}
                        </a>
                        {{ $posts[0]->created_at->diffForHumans() }}
                    </p>
                </small>
                <p class="card-text">{{ $posts[0]->excerpt }}</p>
                <a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none btn btn-primary">Read more</a>
            </div>
        </div>

    <div class="container">
        <div class="row">
            @foreach ($posts->skip(1) as $post)
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <div class="position-absolute px-3 py-2 text-white" style="background-color: rgba(0, 0, 0, 0.7)">
                            <a href="/posts/?category={{ $post->category->slug }}" class="text-white text-decoration-none">
                                {{ $post->category->name }}
                            </a>
                        </div>
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                        <h5 class="card-title">{{ $post->title }}</h5>
                        <small>
                            <p>by: 
                                <a href="/posts?user={{ $post->user->username }}" class="text-decoration-none">{{ $post->user->name }}
                                </a>
                                {{ $post->created_at->diffForHumans() }}
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

    @else
    <p class="text-center fs-4">No post found.</p>
    @endif

    <div class="d-flex justify-content-center">
        {{ $posts->links() }}
    </div>

@endsection
