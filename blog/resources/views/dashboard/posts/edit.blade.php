@extends('dashboard.layouts.main') @section('container')
<div
    class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom"
>
    <h1 class="h2">Create New Posts</h1>
</div>

<div class="col-lg-8">
    <form method="POST" action="/dashboard/posts/{{ $post->slug }}" class="mb-5" enctype="multipart/form-data">
        @method('put')
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Masukan Judul</label>
            <input required autofocus name="title" type="text" class="form-control 
            @error('title')
                is-invalid
            @enderror" id="title" value="{{ old('title', $post->title) }}"/>
            @error('title')
            <div class="invalid-feedback">
                {{ $message }}.
            </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="slug" class="form-label">Masukan Slug</label>
            <input name="slug" value="{{ old('slug',$post->slug) }}" required type="text" class="form-control 
            @error('slug')
            is-invalid
            @enderror"id="slug" readonly/>

            @error('slug')
            <div class="invalid-feedback">
                {{ $message }}.
            </div>
            @enderror
        </div>


        <div class="mb-3">
            <label for="category" class="form-label">Pilih Category</label>
            <select class="form-select" name="category_id">
                @foreach ($categories as $category)
                    @if (old('category_id', $post->category->id) == $category->id)
                    <option selected value="{{ $category->id }}">{{ $category->name }}</option>
                    @else
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endif
                @endforeach
            </select>        
        </div>


        <div class="mb-3">
            <label for="image" class="form-label">Masukan Gambar Post</label>
            <input type="hidden" name="oldImage" value="{{ $post->image }}" id="">
            <input name="image" class="form-control 
            @error('image')
            is-invalid
            @enderror" type="file" id="image" onchange="loadFile(event)">

            @error('image')
            <div class="invalid-feedback">
                {{ $message }}.
            </div>
            @enderror
            <div class="mt-3 mb-3">
                <h5>Preview Gambar: </h5>

                @if ($post->image)
                    <img class="img-fluid" style="max-height: 300px;max-width: 600px" src="{{ asset('storage/'. $post->image) }}" id="output"/>                                        
                @else
                    <img class="img-fluid" style="max-height: 300px;max-width: 600px" src="https://www.kliknusae.com/img/404.jpg" id="output"/>                    
                @endif


            </div>
        </div>


        <div class="mb-3">
            <label for="body" class="form-label">Pilih Category</label>
            @error('body')
                <p class="text-danger">{{ $message }}</p>
            @enderror
            <input id="body" type="hidden" name="body" value="{{ old('body',$post->body) }}">
            <trix-editor input="body"></trix-editor>
        </div>
        <button type="submit" class="btn btn-dark">Submit</button>
    </form>
</div>

<script>
    const title = document.querySelector('#title');
    const slug = document.querySelector('#slug');

    title.addEventListener('change', function() {
        fetch('/dashboard/posts/checkSlug?title=' + title.value)
        .then(response => response.json())
        .then (data => slug.value = data.slug)
    })

    document .addEventListener( 'trix-file-accept', function(e) {
        e.preventDefault();
    })
</script>

<script>
    var loadFile = function(event) {
      var output = document.getElementById('output');
      output.src = URL.createObjectURL(event.target.files[0]);
      output.onload = function() {
        URL.revokeObjectURL(output.src) // free memory
      }
    };
  </script>

@endsection
