
@extends('layouts.main')


@section('container')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 col-12">
                <article class="mb-3">
                    <h1>{{ $post->title }}</h1>
                    <h5>By : <a class="text-decoration-none" href="../authors/{{ $post->author->username }}">{{ $post->author->name }}</a> in <a class="text-decoration-none" href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></h5>
                    <img src="https://source.unsplash.com/1200x400/?{{ $post->category->name }}" class="img-fluid" alt="...">
                    <p>{!! $post->body !!}</p>
                </article>
                <a class="btn btn-dark" href="../blog">Back to Blog</a>
                <hr>
            </div>
        </div>
    </div>

@endsection




