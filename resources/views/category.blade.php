
@extends('layouts.main')

@section('container')
<h1>
    {{ $category->name }}
</h1>
@foreach ($category->posts as $post)
    <article class="mb-5 mt-5">
        <h3>
            <a href="/posts/{{ $post->slug }}">{{ $post->title }}</a>
        </h3>
        <p>{{ $post->excerpt }}</p>
    </article>
@endforeach

    <a href="/blog">Back</a>
@endsection
