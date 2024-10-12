@extends('dashboard.layouts.main')

@section('title','Create New Post')
    

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit Post</h1>
  </div>

  <div class="row">
    <div class="col-md-8 offset-md-1">
        <form action="/dashboard/posts/{{ $post->slug }}" method="POST" enctype="multipart/form-data">
            @method('put')
            @csrf

          <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input required type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" placeholder="Breaking news...." value="{{ old('title',$post->title) }}">
            @error('title') <div class="invalid-feedback">{{ $message  }}</div> @enderror
          </div>

          <div class="mb-3">
            <label for="category" class="form-label">Category</label>
            <select required id="category" class="form-select @error('category_id') is-invalid @enderror" name="category_id" >
                <option disabled selected>-- Choose Categories --</option>
                @foreach ($categories as $category)
                <option value="{{ $category->id }}" {{ old('category_id',$post->category_id) == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                @endforeach
            </select>
            @error('category_id') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>
        
        <div class="mb-3">
          <label for="image" class="form-label">Post Image</label>
          <input type="hidden" name="oldImage" value="{{ $post->image }}">
          @if ($post->image)
          <img src="{{ asset("storage/".$post->image) }}" class="img-preview img-fluid mb-3 col-sm-5 d-block">
          @else
          <img class="img-preview img-fluid mb-3 col-sm-5">
          @endif
          <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" onchange="previewImage()">
          @error('image') <div class="invalid-feedback">{{ $message  }}</div> @enderror
        </div>

          <div class="mb-3">
            <label for="body" class="form-label">Body</label>
            @error('body') <p class="text-danger text-center">{{ $message }}</p>  @enderror
            <div class="bg-light p-3 rounded-3 text-dark">
                <input required id="body" type="hidden" name="body" value="{{ old('body',$post->body) }}">
                <trix-editor input="body"></trix-editor>
            </div>
        </div>

        
          <div class="d-flex justify-content-between mt-5">
              <a href="/dashboard/posts" class="btn btn-danger"><i class="fa-solid fa-arrow-left"></i> back</a>
              <button type="submit" class="btn btn-success"><i class="fa-solid fa-paper-plane"></i> Submit</button>
            </div>
        </form>
    </div>
  </div>

   
@endsection