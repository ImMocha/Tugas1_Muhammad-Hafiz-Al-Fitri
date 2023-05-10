@extends('layouts.main')


@section('container')

<div class="row justify-content-center">
    <div class="col-10 col-lg-5">
        
        <h1 class="h3 mb-3 fw-bold text-center mt-5">LOGIN</h1>
        
        @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Selamat Anda Berhasil Mendaftar!</strong> {{ session('success') }}.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        
        @if (session()->has('LoginError'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>{{ session('LoginError') }}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        <main class="form-signin w-100 m-auto">
            <form action="/login" method="POST">
                @csrf
                <div class="form-floating">
                    <input value="{{ old('email') }}" autofocus name="email" type="email" class="form-control 
                    @error('email')
                        is-invalid
                    @enderror" id="email" placeholder="name@example.com">
                    <label for="email">Email address</label>
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}.
                        </div>
                    @enderror
                </div>
                <div class="form-floating">
                    <input name="password" type="password" class="form-control 
                    @error('password')
                        is-invalid
                    @enderror" id="password" placeholder="Password">
                    <label for="password">Password</label>
                    @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}.
                        </div>
                    @enderror
                </div>
                <div class="checkbox mb-3">
                    <label>
                        <input type="checkbox" value="remember-me"> Remember me
                    </label>
                </div>
                <button class="w-100 btn btn-lg btn-dark" type="submit">Sign in</button>
            </form>
            <small>Not Registered? Please <a class="text-decoration-none" href="/register"><b>Register Now</b></a></small>
            <p class="mt-5 mb-3 text-body-secondary">&copy; Mocha Blog</p>
        </main>
    </div>
</div>



@endsection