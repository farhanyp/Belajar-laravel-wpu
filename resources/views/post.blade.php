@extends('layouts.main')

@section('container')
    <article class="mb-5">
        <h2>
           {{ $post->title }}
        </h2>
        <p>by: <a href="#" class="text-decoration-none">{{ $post->user->name }}</a> in <a href="/category/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
        {!! $post->body !!}
    </article>

    <a href="/blog">Back</a>
@endsection
