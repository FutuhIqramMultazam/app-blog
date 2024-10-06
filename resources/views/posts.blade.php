@extends('layouts.main')

@section('title','Posts Blog')
    
@section('content')
<div class="container mt-5">
    <div class="row mt-5">
        <div class="col">

            @foreach ($post as $p)
            <h2><a href="/post/{{ $p->slug }}" class="text-decoration-none">{{ $p->title }}</a></h2>
            <h6>By : <a href="/authors/{{ $p->user->username }}" class="text-decoration-none">{{ $p->user->name }}</a> | Category : <a class="text-decoration-none" href="/categories/{{ $p->category->slug }}">{{ $p->category->name }}</a></h6>
            <p>{{ $p->excerpt }}</p>
            <a href="/post/{{ $p->slug }}" class="text-decoration-none">Read More....</a>
            <hr class="mb-5">
            @endforeach

        </div>
    </div>
</div>
@endsection