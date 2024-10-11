@extends('dashboard.layouts.main')

@section('title','Detail Post')

@section('content')

<div class="container mt-5">
    <div class="row mt-5 mb-5 justify-content-center">
        <div class="col-md-8">
            <h2 class="mb-3 text-center p-3 " >Judul : "{{ $post->title }}"</h2>
            <article>
            <h6>By : {{ $post->user->name }} in Category : <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></h6>
            {{ $post->body }}
        </article>
    </div>
</div>
<a href="/dashboard/posts" class="btn btn-sm btn-secondary"><i class="fa-solid fa-arrow-left"></i> back to my posts</a>
<a href="/dashboard/posts" class="btn btn-sm btn-warning"><i class="fa-solid fa-pen-to-square"></i> edit</a>
<a href="/dashboard/posts" class="btn btn-sm btn-danger"><i class="fa-solid fa-trash-can"></i> delete</a>
</div>

@endsection
   