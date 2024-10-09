@extends('layouts.main')

@section('title','Registration')

@section('content')

<div class="container mt-5">
    <h2 class="text-center mb-4">Registration Page</h2>

    <div class="row justify-content-center">
        <div class="col-md-6">
            <form action="/register" method="POST">
            @csrf
                <!-- name -->
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="name" class="form-control @error('name') is-invalid @enderror " id="name" name="name" placeholder="Masukkan name" value="{{ old('name') }}">
                    @error('name') <div class="invalid-feedback">{{ $message  }}</div> @enderror
                </div>

                <!-- username -->
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="username" class="form-control @error('username') is-invalid @enderror" id="username" name="username" placeholder="Masukkan username" value="{{ old('username') }}">
                    @error('username') <div class="invalid-feedback">{{ $message  }}</div> @enderror
                </div>

                <!-- Email -->
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Masukkan email" value="{{ old('email') }}">
                    @error('email') <div class="invalid-feedback">{{ $message  }}</div> @enderror
                </div>
        
                <!-- Password -->
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="Masukkan password">
                    @error('password') <div class="invalid-feedback">{{ $message  }}</div> @enderror
                </div>
        
                <!-- Tombol Submit -->
                <button type="submit" class="mt-3 btn w-100 btn-success">Create</button>
            </form>
            <div class="text-center mt-4 mb-5">
                <a href="/login" class="text-decoration-none" >Do you have an account?</a>
            </div>
        </div>
    </div>
</div>

@endsection