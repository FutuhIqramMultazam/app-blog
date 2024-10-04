@extends('layouts.main')

@section('title','Detail Post')
    
@section('content')
<div class="container mt-5">
    <div class="row mt-5 mb-5">
        <div class="col-md-6">
            <h2 class="mb-3 text-center p-3 rounded-3 border bg-danger-subtle border-danger" >Judul : "{{ $post->title }}"</h2>
            <article>
            <h6>By : Futuh Iqram Multazam in Category : <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></h6>
            {{ $post->body }}
            </article>
        </div>
    </div>
    <a href="/posts" class="btn btn-danger"><i class="fa-solid fa-arrow-left"></i> Kembali Ke Post</a>
</div>
@endsection