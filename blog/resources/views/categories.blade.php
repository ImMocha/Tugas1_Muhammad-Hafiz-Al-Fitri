@extends('layouts.main')

<style>
    .col-4 {
        transition: .6s
    }
    .col-4:hover {
        transform: scale(1.1)
    }
</style>


@section('container')
    <h1>{{ $title }}</h1> <br> <br>
    <div class="container">
        <div class="row">
                @foreach ($categories as $category)
                <div class="col-4 mb-3">
                    <a href="/blog?category={{ $category->slug }}">
                    <div class="card text-bg-dark">
                        <img  src="https://source.unsplash.com/800x500/?{{ $category->name }}" class="card-img" alt="...">
                        <div class="card-img-overlay">
                            <h5 class="card-title">{{ $category->name }}</h5>
                        </div>
                    </div>
                </a>
                </div>
                @endforeach
            </div>
        </div>



@endsection


