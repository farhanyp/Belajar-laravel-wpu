@extends('layouts.main')

@section('container')

    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8">
                <h1 class="mb-3">{{ $post->title }}</h1>

                <p>by: <a href="/posts?user={{ $post->user->username }}" class="text-decoration-none">{{ $post->user->name }}</a> in <a href="/posts/?category={{ $post->category->slug }}">{{ $post->category->name }}</a></p>
                
                <article class="my-3 fs-5">
                    {!! $post->body !!}
                </article>

                <a href="/blog" class="d-block mt-3">Back</a>
            </div>
        </div>
    </div>

@endsection
