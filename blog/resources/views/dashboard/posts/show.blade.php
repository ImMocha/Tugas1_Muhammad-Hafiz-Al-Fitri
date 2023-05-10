@extends('dashboard.layouts.main') 
@section('container')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-10 col-12">
            <article class="mb-3">
                <h1 class="mb-3">{{ $post->title }}</h1>
                <a class="btn btn-dark" href="/dashboard/posts"><span data-feather="arrow-left"class="align-text-bottom"></span>Kembali Ke Semua Post</a>
                <a class="btn btn-success" href="/dashboard/posts/{{ $post->slug }}/edit"><span data-feather="edit"class="align-text-bottom"></span>Edit Post</a>

                <form action="/dashboard/posts/{{ $post->slug }}" method="POST" class="d-inline">
                    @method('delete')
                    @csrf
                    <button onclick="return confirm('Yakin Ingin Menghapus Post {{ $post->title }} ?')" class="btn btn-danger"><span data-feather="trash-2"class="align-text-bottom"></span>Delete Post</button>
                </form>

                @if ($post->image)
                    <div style="max-height: 350px;overflow: hidden;">
                        <img src="{{ asset('storage/' . $post->image) }}" class="img-fluid mt-3" alt="...">                    
                    </div>
                @else
                    <img src="https://source.unsplash.com/1200x400/?{{ $post->category->name }}" class="img-fluid mt-3" alt="...">
                @endif


                <p>{!! $post->body !!}</p>
            </article>
            <hr>
        </div>
    </div>
</div>



@endsection




