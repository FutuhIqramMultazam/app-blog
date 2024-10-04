@extends('layouts.main')

@section('title','Posts Blog')

@section('content')
<div class="container">
<h1 class="mb-5 mt-5">Post category</h1>    

@foreach ($categories as $category)
<ul>
    <li>
        <h2><a href="/categories/{{ $category->slug }}">{{ $category->name }}</a></h2>
    </li>
</ul>
@endforeach
</div>

@endsection