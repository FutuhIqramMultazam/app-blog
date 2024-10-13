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
            <a class="nav-link d-flex align-items-center gap-2 {{ Request::is('dashboard/posts*') ? 'text-white text-decoration-underline' : '' }}" href="/dashboard/posts">
            <i class="fa-solid fa-file-lines"></i>
              My Posts
            </a>
          </li>
        </ul>

        @can('admin')
        <hr class="my-3">

        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-body-secondary text-uppercase">
          <span>Administrator</span>
        </h6>

        <ul class="nav flex-column mb-auto">
          <li class="nav-item">
            <a class="nav-link d-flex align-items-center gap-2 {{ Request::is('dashboard/categories*') ? 'text-white text-decoration-underline' : '' }}" href="/dashboard/categories">
              <i class="fa-solid fa-table-cells-large"></i>
              Post Categories
            </a>
          </li>
        </ul>
        @endcan

        <hr class="my-3">
          
        <ul class="nav flex-column mb-auto" >
          <li class="nav-item">
            <a id="setting" class="nav-link d-flex align-items-center gap-2" href="#">
              <i class="fa-solid fa-gear"></i>
              Settings
            </a>
          </li>
          <li class="nav-item">
            <form id="logout-form" action="/logout" method="post">
              @csrf
            <button type="button" id="logout-button" class="logout-button nav-link d-flex align-items-center gap-2" href="#">
              <i class="fa-solid fa-arrow-right-from-bracket"></i>
              Sign out
            </button>
          </form>
          </li>
        </ul>

      </div>
    </div>
  </div>