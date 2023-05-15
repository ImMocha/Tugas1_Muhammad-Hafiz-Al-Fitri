
@extends('layouts.main')


@section('container')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 col-12">
                <article class="mb-3">
                    <h1>{{ $post->title }}</h1>
                    @if ($post->category)
                        <h5>By : <a class="text-decoration-none" href="/blog?author={{ $post->author->username }}">{{ $post->author->name }}</a> in <a class="text-decoration-none" href="/blog?category={{ $post->category->slug }}">{{ $post->category->name }}</a></h5>
                    @else    
                        <h5>By : <a class="text-decoration-none" href="/blog?author={{ $post->author->username }}">{{ $post->author->name }}</a> in <span class="text-muted fst-italic">Undifined</span></h5>
                    @endif
                    @if ($post->image)
                        <div style="max-height: 350px;overflow: hidden;">
                            <img src="{{ asset('storage/' . $post->image) }}" class="img-fluid mt-3" alt="...">                    
                        </div>
                    @elseif($post->category)
                        <img src="https://source.unsplash.com/1200x400/?{{ $post->category->name }}" class="img-fluid mt-3" alt="...">
                    @else
                        <img src="https://source.unsplash.com/1200x400/?random" class="img-fluid mt-3" alt="...">
                    @endif
                    <p>{!! $post->body !!}</p>
                </article>
                <a class="btn btn-dark" href="../blog">Back to Blog</a>
                <hr>
            </div>
        </div>
    </div>

@endsection




