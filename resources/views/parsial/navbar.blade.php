<nav class="navbar navbar-expand-lg " style="background-color: #2C0B0E;">
    <div class="container-fluid">
      <a class="navbar-brand ms-5" href="/"><i class="fa-brands fa-laravel"></i> Icam</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="me-4">
      <div class="collapse navbar-collapse justify-content-end me-5" id="navbarNavAltMarkup">
        <div class="navbar-nav ">
          <a class="nav-link" href="/">Home</a>
          <a class="nav-link" href="/about">About</a>
          <a class="nav-link" href="/posts">Blog</a>
          <a class="nav-link" href="/categories">Categories</a>
          <p class="nav-link"> | </p>
          @auth
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Welcome back, {{ auth()->user()->name  }}
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="/dashboard"><i class="fa-solid fa-gauge-high"></i> My Dashboard</a></li>
              <li><hr class="dropdown-divider"></li>
              <li>
                <form action="/logout" method="post">
                  @csrf
                  <button type="submit" class="dropdown-item"><i class="fa-solid fa-arrow-right-from-bracket"></i> Logout</button>
                </form>
            </ul>
          </li>
          @else
          <a class="nav-link" href="/login"><i class="fa-solid fa-right-to-bracket"></i> Login</a>
          @endauth
        </div>
      </div>
    </div>
    </div>
  </nav>