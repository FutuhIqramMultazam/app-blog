@extends('dashboard.layouts.main')

@section('title','Dashboard')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Welcome back, {{ auth()->user()->name }} </h1>
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

@endsection
   