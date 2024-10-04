@extends('layouts.main')

@section('title') {{ $category->name }} @endsection
    
@section('content')
<div class="container mt-5">
    <h1>Category : "{{ $category->name }}"</h1>
    <div class="row mt-5">
        <div class="col">

            @foreach ($category->posts as $c)
            <article>
            <h2>Judul : <a href="/post/{{ $c->slug }}">{{ $c->title }}</a></h2>
            <p>{{ $c->excerpt }}</p>
            <a href="/post/{{ $c->slug }}">Read More....</a>
            </article>
            <hr class="mb-5">
            @endforeach

        </div>
    </div>
</div>
@endsection