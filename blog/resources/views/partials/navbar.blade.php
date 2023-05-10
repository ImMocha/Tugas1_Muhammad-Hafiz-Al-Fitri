<nav class="navbar navbar-expand-lg bg-dark navbar-dark">
    <div class="container">
        <a class="navbar-brand" href="#">Mocha Blog</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="/">Home</a>
            <a class="nav-link {{ Request::is('about') ? 'active' : '' }}" href="/about">About</a>
            <a class="nav-link {{ Request::is('blog') ? 'active' : '' }}" href="/blog">Blog</a>   
            <a class="nav-link {{ Request::is('categories') ? 'active' : '' }}" href="/categories">Categories</a>
        </div>

        @auth
        <div class="navbar-nav ms-auto">
            <div class="dropdown d-flex">
                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Selamat Datang, {{ Auth::user()->name }}
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-speedometer2"></i> My Dashboard</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <form action="/logout" method="POST">
                        @csrf
                        <li><button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-left"></i> Log-Out</button></li>
                    </form>
                </ul>
            </div>
        </div>
        @else
        <div class="navbar-nav ms-auto">
            <a href="/login" class="nav-link active"><b><i class="bi bi-box-arrow-in-right"></i> Login</b></a>
        </div>
        @endauth
    </div>
    </div>
</nav>