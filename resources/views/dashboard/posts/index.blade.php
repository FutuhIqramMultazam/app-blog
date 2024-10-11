@extends('dashboard.layouts.main')

@section('title','My Posts')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">My Posts</h1>
  </div>

  <div class="table-responsive small">
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">title</th>
          <th scope="col">category</th>
          <th scope="col">action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($posts as $post)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $post->title }}</td>
          <td>{{ $post->category->name }}</td>
          <td>
            <a href="/dashboard/posts/{{ $post->slug }}" class="badge bg-info text-dark"><i class="fa-solid fa-eye"></i></a>
            <a href="" class="badge bg-warning text-dark"><i class="fa-solid fa-pen-to-square"></i></a>
            <a href="" class="badge bg-danger"><i class="fa-solid fa-trash-can"></i></a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>

@endsection
   