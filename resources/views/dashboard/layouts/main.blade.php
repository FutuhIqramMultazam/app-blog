<!doctype html>
<html lang="en" data-bs-theme="dark">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link href="{{ asset('assets/css/dashboard.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/all.css') }}">

    {{-- trix editor --}}
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.8/dist/trix.css">
    <script type="text/javascript" src="https://unpkg.com/trix@2.0.8/dist/trix.umd.min.js"></script>
    
    @include('dashboard.layouts.style')
    
    <!-- Custom styles for this template -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->

    <script src="{{ asset('assets/js/sweetalert2.all.min.js') }}"></script>
  </head>
  <body>

@include('dashboard.layouts.header')

<div class="container-fluid">
  <div class="row">
   
    @include('dashboard.layouts.sidebar')

    <main style="height: 800px" class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

      @yield('content')

    </main>
    
  </div>
</div>

@include('alertLogout')

<script src="{{ asset('assets/js/sweetalert2.all.min.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></>
<script src="{{ asset('assets/js/dashboard.js') }}"></script>

</body>
</html>
