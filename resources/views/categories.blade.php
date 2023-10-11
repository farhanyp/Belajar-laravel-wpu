@extends('layouts.main')

@section('container')
    @foreach ($categories as $category)
        <ul>
            <li>
                <h3>
                    <a href="/category/{{ $category->slug }}">{{ $category->name }}</a>
                </h3>
            </li>
        </ul>
    @endforeach
@endsection
