<div class="sidebar col-md-3 col-lg-2 p-0 bg-body-tertiary">
    <div class="offcanvas-md offcanvas-end bg-body-tertiary" tabindex="-1" id="sidebarMenu" aria-labelledby="sidebarMenuLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="sidebarMenuLabel"><i class="fa-brands fa-laravel"></i> app-blog</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#sidebarMenu" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body d-md-flex flex-column p-0 pt-lg-3 overflow-y-auto">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link d-flex align-items-center gap-2 {{ Request::is('dashboard') ? 'text-white text-decoration-underline' : '' }}" aria-current="page" href="/dashboard">
              {{-- <svg class="bi"><use xlink:href="#house-fill"/></svg> --}}
              <i class="fa-solid fa-home"></i>
              Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link d-flex align-items-center gap-2 {{ Request::is('dashboard/posts') ? 'text-white text-decoration-underline' : '' }}" href="/dashboard/posts">
            <i class="fa-solid fa-file-lines"></i>
              My Posts
            </a>
          </li>
        <hr class="my-3">

        <ul class="nav flex-column mb-auto">
          <li class="nav-item">
            <a class="nav-link d-flex align-items-center gap-2" href="#">
              <i class="fa-solid fa-gear"></i>
              Settings
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link d-flex align-items-center gap-2" href="#">
              <i class="fa-solid fa-arrow-right-from-bracket"></i>
              Sign out
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>