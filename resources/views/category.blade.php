@extends('layouts.main')

@section('title') {{ $category->name }} @endsection
    
@section('content')
<div class="container mt-5">
    <h1>Category By : "{{ $category->name }}"</h1>
    <div class="row mt-5">
        <div class="col">

            @foreach ($category->posts->load('category','user') as $c)
            <article>
            <h2 class="pb-3 "><a class="text-decoration-none" href="/post/{{ $c->slug }}">{{ $c->title }}</a></h2>
            <h6>By : <a href="" class="text-decoration-none">{{ $c->user->name }}</a> | Category : <a class="text-decoration-none" href="/categories/{{ $c->category->slug }}">{{ $c->category->name }}</a></h6>
            <p>{{ $c->excerpt }}</p>
            <a href="/post/{{ $c->slug }}">Read More....</a>
            </article>
            <hr class="mb-5">
            @endforeach

        </div>
    </div>
</div>
@endsection