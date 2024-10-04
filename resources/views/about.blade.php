@extends('layouts.main')

@section('title','About Me')
    
@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-6">
            <h1>Halaman About</h1>
            <h2>Nama : {{ $nama }}</h2>
            <h5>Email : {{ $email }}</h5>
            <img src="{{ asset('assets/img/foto.jpg') }}" width="150" alt="{{ $nama }}" class="img-fluid rounded-4">
        </div>
    </div>
</div>
@endsection