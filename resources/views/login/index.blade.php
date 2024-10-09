@extends('layouts.main')

@section('title','Login Page')

@section('content')

<div class="container mt-5">

        @if (session('status'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong> {{ session('status') }}</strong>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

    <h2 class="text-center mb-4">Login Page</h2>

    <div class="row justify-content-center">
        <div class="col-md-6">
            <form>

                <!-- Email -->
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="Masukkan email">
                </div>
        
                <!-- Password -->
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" placeholder="Masukkan password">
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