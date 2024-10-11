<header class="navbar sticky-top bg-dark flex-md-nowrap p-0 shadow" data-bs-theme="dark">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6 text-white" href="#"><i class="fa-brands fa-laravel"></i> app-blog</a>
  
     <input class="form-control w-100 rounded-0 border-0 border-end" type="text" placeholder="Search...." aria-label="Search">
     
     <span class="nav-item dropdown px-5 text-info">
      <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        {{ auth()->user()->name  }}
      </a>
      <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="/"><i class="fa-solid fa-globe"></i> Back to Public </a></li>
        <li><hr class="dropdown-divider"></li>
        <li>
          <form id="logout-form" action="/logout" method="post">
            @csrf
            <button type="submit" class="logout-button dropdown-item"><i class="fa-solid fa-arrow-right-from-bracket"></i> Logout</button>
          </form>
      </ul>
    </span>

    {{-- <div class="navbar-nav">
      <div class="nav-item text-nowrap"> --}}
          {{-- <a href="" class="nav-link px-3"> Logout</a> --}}
          {{-- <form action="/logout" method="post">
              @csrf
              <button type="submit" class="nav-link px-3"><i class="fa-solid fa-arrow-right-from-bracket"></i> Logout</button>
            </form>
      </div>
    </div> --}}
  </header>