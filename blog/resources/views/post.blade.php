@extends('layouts.main')


@section('container')
    @foreach ($posts as $post)
        <article>
            <h1>{{ $post['title'] }}</h1>
            <h5>By : {{ $post['author'] }}</h5>
            <p>{{ $post['content'] }}</p>
        </article>
        <hr>
    @endforeach
@endsection
