@extends('layouts.main')

@section('title','Posts Blog')
    
@section('content')
<div class="container mt-5">
    <div class="row mt-5">
        <div class="col">

            @foreach ($post as $p)
            <h2>Judul : <a href="/post/{{ $p->slug }}">{{ $p->title }}</a></h2>
            <p>{{ $p->excerpt }}</p>
            <a href="/post/{{ $p->slug }}">Read More....</a>
            <hr class="mb-5">
            @endforeach

        </div>
    </div>
</div>
@endsection