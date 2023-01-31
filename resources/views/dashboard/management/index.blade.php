@extends('dashboard.layouts.main')
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h2 class="h2">Management User</h2>
</div>
      <div class="table-responsive col-lg-8">
        @if (session()->has('success'))
        <div class="alert alert-success" role="alert">
          {{ session('success') }}
        </div>
        @endif
        <a class="btn btn-primary text-decoration-none mb-3" href="/dashboard/posts/create">Create New Post</a>
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Name</th>
              <th scope="col">Role</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach($users as $user)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $user->name}}</td>
              <td>{{ $user->is_admin }}</td>
              <td>
                <a href="/dashboard/users/{{ $user->slug }}" class="badge bg-warning"><span data-feather="eye"></span></a>
                <a class="badge bg-success" href="/dashboard/users/{{ $user->slug }}/edit"><span data-feather="edit"></span></a>
                <form action="/dashboard/users/{{ $user->slug }}" method="POST" class="d-inline">
                  @method('delete')
                  @csrf
                  <button class="badge bg-danger border-0" type="submit" onclick="return confirm('Are you sure?')"><span data-feather="x-circle"></span></button>
                </form>
              </td>
            </tr>
            @endforeach
            
          </tbody>
        </table>
      </div>
@endsection