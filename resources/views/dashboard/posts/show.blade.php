@extends('dashboard.layouts.main')
@section('container')
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <h1>{{ $posts->title }}</h1>
            <a href="/dashboard/posts" class="text-decoration-none btn btn-success mb-3"><span data-feather="arrow-left"></span> Back to all my post</a>
            <a href="/dashboard/posts/{{ $posts->slug }}/edit" class=" text-decoration-none btn btn-warning mb-3"><span data-feather="edit"></span> Edit</a>
            <form action="/dashboard/posts/{{ $posts->slug }}" method="POST" class="d-inline">
                @csrf
                @method('delete')
                <button class="btn btn-danger border-0 mb-3" type="submit" onclick="return confirm('Are you sure?')"><span data-feather="x-circle"></span> Delete</button>
            </form>
            @if ($posts->image)
            <div style="max-height: 350px; overflow:hidden; ">
                <img src="{{ asset('storage/'. $posts->image) }}" class="card-img-top img-fluid mb-3" alt="{{ $posts->category->name }}">
            </div>
            @else
            <img src="https://source.unsplash.com/1200x400?{{ $posts->category->slug }}" class="card-img-top img-fluid mb-3" alt="{{ $posts->category->name }}">                
            @endif
            {!!$posts->body!!}
        </div>
    </div>
</div>
@endsection()

