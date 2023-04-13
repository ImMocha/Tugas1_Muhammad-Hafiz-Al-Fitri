<nav class="navbar navbar-expand-lg bg-dark navbar-dark">
    <div class="container">
        <a class="navbar-brand" href="#">Mocha Blog</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a class="nav-link {{ ($title==='HOME') ? 'active' : '' }}" href="/">Home</a>
            <a class="nav-link {{ ($title==='ABOUT') ? 'active' : '' }}" href="/about">About</a>
            <a class="nav-link 
            @if ($title === 'POST')
                return active
            @elseif ($title === 'SINGLE POST')
                return active
            @endif" href="/blog">Blog</a>   
        </div>
    </div>
    </div>
</nav>