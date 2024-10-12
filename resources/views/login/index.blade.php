@extends('layouts.main')

@section('title','Login Page')

@section('content')

<div class="container mt-5">

        @if (session('status'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong> {{ session('status') }}</strong>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Success!',
                text: "{{ session('status') }}",
                iconColor:'green',
                timer: 1500,
                showConfirmButton: false,
            });
          </script>
        @endif

        @if (session('loginError'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong> {{ session('loginError') }}</strong>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

    <h2 class="text-center mb-4">Login Page</h2>

    <div class="row justify-content-center">
        <div class="col-md-6">
            <form action="/login" method="POST">
                @csrf
                <!-- Email -->
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input required type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" placeholder="Masukkan email" value="{{ old('email') }}">
                    @error('email') <div class="invalid-feedback">{{ $message  }}</div> @enderror
                </div>
        
                <!-- Password -->
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input required type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password" placeholder="Masukkan password">
                    @error('password') <div class="invalid-feedback">{{ $message  }}</div> @enderror
                </div>
        
                <!-- Tombol Submit -->
                <button type="submit" class="mt-3 btn w-100" style="background-color: #2C0B0E">login</button>
            </form>
            <div class="text-center mt-4">
                <a href="/register" class="text-decoration-none" >Create An Account?</a>
            </div>
        </div>
    </div>
</div>

@endsection