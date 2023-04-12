

@extends('layouts.main')


@section('container')

        <article class="mb-3">
            <h1>{{ $post ['title'] }}</h1>
            <h5>By : {{ $post ['author'] }}</h5>
            <p>{{ $post ['content'] }}</p>
        </article>
        <hr>

@endsection
