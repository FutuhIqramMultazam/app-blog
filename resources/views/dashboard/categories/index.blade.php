@extends('dashboard.layouts.main')

@section('title','Post Categories')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Post Categories </h1>
  </div>

  @if (session('status'))
  <script>
    Swal.fire({
        icon: 'success',
        title: 'Success!',
        text: "{{ session('status') }}",
        iconColor:'green',
        timer: 1500,
        showConfirmButton: false,
    });
  </script>
    @endif

  <div class="table-responsive small col-sm-6">

    <a href="/dashboard/categories/create" class="btn btn-success mb-3">Create New Categories</a>

    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Category Name</th>
          <th scope="col">action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($categories as $category)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $category->name }}</td>
          <td>
            <a href="/dashboard/categories/{{ $category->slug }}" class="badge bg-info text-dark"><i class="fa-solid fa-eye"></i></a>
            <a href="/dashboard/categories/{{ $category->slug }}/edit" class="badge bg-warning text-dark mx-2"><i class="fa-solid fa-pen-to-square"></i></a>

            <form action="/dashboard/categories/{{ $category->slug }}" method="post" class="d-inline" id="delete-form-{{ $category->slug }}">
              @method('delete')
              @csrf
            <button type="button" onclick="confirmDelete('{{ $category->slug }}')" class="badge border-0 bg-danger"><i class="fa-solid fa-trash-can"></i></button>
          </form>

          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>

@endsection
   