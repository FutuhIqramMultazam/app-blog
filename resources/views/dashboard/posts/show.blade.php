@extends('dashboard.layouts.main')

@section('title','Detail Post')

@section('content')

<div class="container mt-3">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2 class="mb-2 text-center p-2 ">{{ $post->title }}</h2>

            @if ($post->image)
            <div class="d-flex justify-content-center">
                <div style="max-height: 400px; overflow: hidden;">
                    <img src="{{ asset("storage/".$post->image) }}" class="img-fluid my-3">
                </div>
            </div>
            @else
            <img src="https://unsplash.it/1200/500" class="img-fluid my-3">
            @endif

            <article class="mt-2">
                <h6>By : {{ $post->user->name }} in Category : <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></h6>
                {!! $post->body !!}
            </article>

            <div class="d-flex justify-content-center mt-4 mb-5">
                <a href="/dashboard/posts" class="btn btn-sm btn-secondary"><i class="fa-solid fa-arrow-left"></i> back to my posts</a>
                <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn mx-3 btn-sm btn-warning"><i class="fa-solid fa-pen-to-square"></i> edit</a>
                <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline" id="delete-form-{{ $post->slug }}">
                    @method('delete')
                    @csrf
                    <button type="button" onclick="confirmDelete('{{ $post->slug }}')" class="btn btn-sm btn-danger"><i class="fa-solid fa-trash-can"></i> delete</button>
                </form>
            </div>

        </div>
    </div>
</div>

@endsection