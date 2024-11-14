@extends('layouts.main')

@section('title','Posts Blog')
    
@section('content')
<div class="container mt-5">
        <h1 class="text-center">All Posts</h1>

        <form action="/posts" method="get">
        <div class="row justify-content-center mt-5">
            <div class="col-md-6">
                <div class="input-group mb-3">
                        <input type="text" name="search" class="form-control" placeholder="Search..." value="{{ request('search') }}">
                        <button class="btn btn-danger" type="submit" id="button-addon2">Search</button>
                    </div>
                </div>
            </div>
        </form>

    <div class="row mt-5">
        <div class="col">

            @if ($post->count())
            <div class="card mb-5">

                @if ($post[0]->image)
                <div style="max-height: 400px; overflow: hidden;">
                <img src="{{ asset("storage/".$post[0]->image) }}" class="card-img-top">
                </div>
                @else
                <img  src="https://unsplash.it/1200/400/?{{ $post[0]->category->name }}" class="card-img-top">
                @endif

                <div class="card-body text-center">
                  <h3 class="card-title">{{ $post[0]->title }}</h3>
                  <small class="text-body-secondary">By : <a href="/authors/{{ $post[0]->user->username }}" class="text-decoration-none">{{ $post[0]->user->name }}</a> | Category : <a class="text-decoration-none" href="/categories/{{ $post[0]->category->slug }}">{{ $post[0]->category->name }}</a> | {{ $post[0]->created_at->diffForHumans() }}</small>
                  <p class="card-text">{{ $post[0]->excerpt }}</p>
                  <a href="/post/{{ $post[0]->slug }}" class="text-decoration-none btn btn-primary">Read More....</a>
                </div>
            </div>
            
            <div class="container">
                <div class="row">
                    @foreach ($post->skip(1) as $p)
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <div class="position-absolute text-white px-3 py-2 " style="background-color: rgba(0, 0, 0, 0.7)"><a class="text-white text-decoration-none" href="/categories/{{ $p->category->slug }}">{{ $p->category->name }}</a></div>

                            @if ($p->image)
                            <div style="max-height: 200px; overflow: hidden;">
                            <img src="{{ asset("storage/".$p->image) }}" class="card-img-top">
                            </div>
                            @else
                            <img src="https://unsplash.it/400/200/?{{ $p->category->slug }}" class="card-img-top">
                            @endif

                            <div class="card-body">
                              <h5 class="card-title">{{ $p->title }}</h5>
                              <small class="text-body-secondary">By : <a href="/authors/{{ $p->user->username }}" class="text-decoration-none">{{ $p->user->name }}</a> | {{ $p->created_at->diffForHumans() }}</small>
                              <p class="card-text">{{ $p->excerpt }}</p>
                              <a href="/post/{{ $p->slug }}" class="btn btn-primary">Read more</a>
                            </div>
                          </div>
                        </div>
                        @endforeach
                    </div>
            </div>

            @else
            <p class="text-center fs-4">Not found post.</p>
            @endif

            <div class="d-flex justify-content-center mt-5">
                {{ $post->links() }}
            </div>

        </div>
    </div>
</div>
@endsection