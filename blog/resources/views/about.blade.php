@extends('layouts.main')


@section('container')
    <h1>Halaman ABOUT</h1>
    <h2>{{ $name }}</h2>
    <p>{{ $email }}</p>
    <img class="img-thumbnail" width="200" src="img/{{ $image }}" alt="">
@endsection
