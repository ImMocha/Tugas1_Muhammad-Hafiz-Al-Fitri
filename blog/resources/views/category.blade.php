@extends('layouts.main')


@section('container')
    <h2><a class="text-decoration-none" href="../categories">Category </a> : {{ $title }}</h2>
    
    @foreach ($posts as $post)
    <article class="mb-3">
        <h1><a class="text-decoration-none" href="../posts/{{ $post->slug }}">{{ $post->title }}</a></h1>
        <h5>By : Muhammad Hafiz Al Fitri in <a class="text-decoration-none" href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></h5>
        <p>{{ $post->excerpt }}</p>
    </article>
    <hr>
    @endforeach



@endsection


