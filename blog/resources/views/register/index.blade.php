@extends('layouts.main')


@section('container')

<div class="row justify-content-center">
    <div class="col-10 col-md-5">


        <main class="form-signin w-100 m-auto">
            <form action="/register" method="POST">
                @csrf
                <h1 class="h3 mb-3 fw-bold text-center mt-5">REGISTRATION FORM</h1>
        
                <div class="form-floating">
                    <input required autocomplete="none" type="text" name="name" class="form-control 
                    @error('name')
                        is-invalid    
                    @enderror" id="name" placeholder="Masukan Nama Anda" value="{{ old('name') }}">
                    @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}.
                        </div>
                    @enderror
                    <label for="name">Masukan Nama Anda</label>
                </div>
                <div class="form-floating">
                    <input required autocomplete="none" type="text" name="username" class="form-control 
                    @error('username')
                        is-invalid
                    @enderror" id="username" placeholder="name@example.com" value="{{ old('username') }}">
                    @error('username')
                        <div class="invalid-feedback">
                            {{ $message }}.
                        </div>
                    @enderror
                    <label for="username">Masukan Username Anda</label>
                </div>
                <div class="form-floating">
                    <input required name="email" autocomplete="none" type="email" class="form-control 
                    @error('email')
                        is-invalid
                    @enderror" id="email" placeholder="name@example.com" value="{{ old('email') }}">
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}.
                        </div>
                    @enderror
                    <label for="email">Masukan Alamat Email Anda</label>
                </div>
                <div class="form-floating">
                    <input required name="password" type="password" class="form-control 
                    @error('password')
                        is-invalid
                    @enderror" id="password" placeholder="Password">
                    @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}.
                        </div>
                    @enderror
                    <label for="password">Masukan Password</label>
                </div>
                <button class="w-100 btn btn-lg btn-dark" type="submit">Register</button>
            </form>
            <small>Already Register? Please <a class="text-decoration-none" href="/login"><b>Login</b></a></small>
            <p class="mt-5 mb-3 text-body-secondary">&copy; Mocha Blog</p>
        </main>
    </div>
</div>



@endsection