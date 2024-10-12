@extends('dashboard.layouts.main')

@section('title','My Posts')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">My Posts</h1>
  </div>


   @if (session('status'))
  {{-- <div class="w-50 text-center position-absolute top-50 start-50 translate-middle">
  <div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong> {{ session('status') }}</strong>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
</div> --}}
<script>
  Swal.fire({
      icon: 'success',
      title: 'Success!',
      text: "{{ session('status') }}",
      iconColor:'green',
      timer: 1200,
      showConfirmButton: false,
  });
</script>
  @endif 

  <div class="table-responsive small">

    <a href="/dashboard/posts/create" class="btn btn-success mb-3">Create New Post</a>

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
            <a href="/dashboard/posts/{{ $post->slug }}/edit" class="badge bg-warning text-dark mx-2"><i class="fa-solid fa-pen-to-square"></i></a>

            <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline" id="delete-form-{{ $post->slug }}">
              @method('delete')
              @csrf
            <button type="button" onclick="confirmDelete('{{ $post->slug }}')" class="badge border-0 bg-danger"><i class="fa-solid fa-trash-can"></i></button>
          </form>

          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>

@endsection
   