@extends('layouts.main')



@section('container')
<h1>{{ $title }}</h1> <br>

@if ( $posts->count() )
<a class="text-decoration-none" href="posts/{{ $posts[0]->slug }}">
    <div class="card mb-3 text-center">
        <img src="https://source.unsplash.com/1200x400/?{{ $posts[0]->category->name }}" class="card-img-top" alt="...">
        <div class="card-body">
            <h3 class="card-title">{{ $posts[0]->title }}</h3>
            <p>By : <a class="text-decoration-none" href="authors/{{ $posts[0]->author->username }}">{{ $posts[0]->author->name }}</a> in <a class="text-decoration-none" href="/categories/{{ $posts[0]->category->slug }}">{{ $posts[0]->category->name }}</a> | <small class="text-body-secondary">{{ $posts[0]->created_at->diffForHumans() }}</small></p>
            <p class="card-text">{{ $posts[0]->excerpt }}</p>
            <a class="text-decoration-none btn btn-dark" href="../posts/{{ $posts[0]->slug }}">Read More</a>
        </div>
    </div>
</a>
@else
    <h2 class="text-center">Post Not Found.</h2>
@endif



<div class="row">
    @foreach ($posts as $post)
    <div class="d-flex col-lg-3 col-6 mb-5 justify-content-center">
        <div class="card" style="width: 18rem;">
            <img src="https://source.unsplash.com/800x500/?{{ $post->category->name }}" class="card-img-top" alt="...">
            <div class="card-body position-relative pb-5">
                <h5 class="card-title"><a class="text-decoration-none" href="../posts/{{ $post->slug }}">{{ $post->title }}</a></h5>
                <p class="card-text">By : <a class="text-decoration-none" href="authors/{{ $post->author->username }}">{{ $post->author->name }}</a> in <a class="text-decoration-none" href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
                <p class="card-text">{{ $post->excerpt }}</p>
                <a class="position-absolute btn btn-dark mb-2" style="bottom: 0" href="../posts/{{ $post->slug }}" >Read More</a>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection


