@extends('dashboard.layouts.main') 
@section('container')
<div
    class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">My Categories</h1>
</div>

@if (session()->has('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>{{ session('success') }}</strong>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

@if (session()->has('delete'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>{{ session('delete') }}</strong>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

<div class="table-responsive">
    <a href="/dashboard/categories/create" class="btn btn-primary mb-3">Create New Category</a>
    <table class="table table-striped table-sm">
        <thead>
            <tr >
                <th scope="col">#</th>
                <th scope="col">Nama Category</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $category->name }}</td>
                <td>
                    <a class="badge bg-info" href="/dashboard/posts/{{ $category->slug }}"><span data-feather="eye"class="align-text-bottom"></span></a>
                    <a class="badge bg-success" href="/dashboard/posts/{{ $category->slug }}/edit"><span data-feather="edit"class="align-text-bottom"></span></a>

                    <form action="/dashboard/posts/{{ $category->slug }}" method="POST" class="d-inline">
                        @method('delete')
                        @csrf
                        <button onclick="return confirm('Yakin Ingin Menghapus Post {{ $category->name }} ?')" class="badge bg-danger border-0"><span data-feather="trash-2"class="align-text-bottom"></span></button>
                    </form>

                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
