@extends('layouts.main')



@section('container')
<h1 class="text-center">{{ $title }}</h1> <br>


<div class="row justify-content-center">
    <div class="col-md-6">
        <form action="/blog" method="GET">
            @if (request('category'))
                <input type="hidden" name="category" value="{{ request('category') }}" id="">
            @elseif(request('author'))
                <input type="hidden" name="author" id="" value="{{ request('author') }}">
            @endif
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">🔎</span>
                <input autocomplete="none" type="text" class="form-control" placeholder="Search Post" name="search" value="{{ request('search') }}">
                <button class="btn btn-dark" type="submit">Search</button>
            </div>
        </form>
    </div>
</div>



@if ( $posts->count() )
<a class="text-decoration-none" href="posts/{{ $posts[0]->slug }}">
    <div class="card mb-3 text-center">

        @if ($posts[0]->image)
            <div style="max-height: 450px;overflow: hidden;">
                <img src="{{ asset('storage/' . $posts[0]->image) }}" class="img-fluid" alt="...">                    
            </div>
        @else
            <img src="https://source.unsplash.com/1200x400/?{{ $posts[0]->category->name }}" class="img-fluid mt-3" alt="...">
        @endif

        <div class="card-body">
            <h3 class="card-title">{{ $posts[0]->title }}</h3>
            <p>By : <a class="text-decoration-none" href="blog?author={{ $posts[0]->author->username }}">{{ $posts[0]->author->name }}</a> in <a class="text-decoration-none" href="/blog?category={{ $posts[0]->category->slug }}">{{ $posts[0]->category->name }}</a> | <small class="text-body-secondary">{{ $posts[0]->created_at->diffForHumans() }}</small></p>
            <p class="card-text">{{ $posts[0]->excerpt }}</p>
            <a class="text-decoration-none btn btn-dark" href="../posts/{{ $posts[0]->slug }}">Read More</a>
        </div>
    </div>
</a>

<div class="row">
    @foreach ($posts->skip(1) as $post)
    <div class="d-flex col-lg-3 col-6 mb-5 justify-content-center">
        <div class="card" style="width: 18rem;">

            @if ($post->image)
                <div style="max-height: 350px;overflow: hidden;">
                    <img src="{{ asset('storage/' . $post->image) }}" class="card-img-top" alt="...">
                </div>
            @else
                <img src="https://source.unsplash.com/800x500/?{{ $post->category->name }}" class="card-img-top" alt="...">
            @endif

            <div class="card-body position-relative pb-5">
                <h5 class="card-title"><a class="text-decoration-none" href="../posts/{{ $post->slug }}">{{ $post->title }}</a></h5>
                <p class="card-text">By : <a class="text-decoration-none" href="/blog?author={{ $post->author->username }}">{{ $post->author->name }}</a> in <a class="text-decoration-none" href="/blog?category={{ $post->category->slug }}">{{ $post->category->name }}</a></p>
                <p class="card-text">{{ $post->excerpt }}</p>
                <a class="position-absolute btn btn-dark mb-2" style="bottom: 0" href="../posts/{{ $post->slug }}" >Read More</a>
            </div>
        </div>
    </div>
    @endforeach
</div>


@else
    <h2 class="text-center">Post Not Found.</h2>
@endif

{{ $posts->links() }}

@endsection


