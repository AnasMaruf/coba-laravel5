@extends('dashboard.layouts.main')
@section('container')
<div class="col-lg-6">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h2 class="h2">Create New Categories</h2>
    </div>
    <form action="/dashboard/categories" method="POST">
        @csrf
        <div class="mb-3">
          <label for="name" class="form-label @error('name') is-invalid @enderror">Category Name</label>
          <input type="text" class="form-control" id="name" name="name" {{ old('name') }}>
          @error('name')
            <div class="invalid-feedback">
              {{ $message }}
            </div>   
          @enderror
        </div>
        <div class="mb-3">
          <label for="slug" class="form-label">Slug</label>
          <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" {{ old('slug') }}>
          @error('slug')
            <div class="invalid-feedback">
              {{ $message }}
            </div>   
          @enderror
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
</div>
<script>
  const name = document.querySelector('#name');
  const slug = document.querySelector('#slug');

  name.addEventListener('change', function() {
    fetch('/dashboard/categories/checkSlug?name=' + name.value)
    .then(response => response.json())
    .then(data => slug.value = data.slug)
  })
</script>
@endsection
