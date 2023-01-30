@extends('layouts.main')
@section('container')
<div class="row justify-content-center">
<div class="col-md-4">
  <main class="form-signin">
    @if (session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      {{ session('success') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    @if (session()->has('loginError'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
      {{ session('loginError') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    <form method="POST" action="/login">
      @csrf
      <h1 class="h3 mt-5 mb-3 fw-normal text-center">Login Form</h1>
      <div class="form-floating">
        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Email Address" name="email">
        <label for="email">Email address</label>
        @error('email')
        <div class="invalid-feedback">
          {{ $message }}
        </div>  
        @enderror
      </div>
      <div class="form-floating">
        <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="Password">
        <label for="password">Password</label>
        @error('password')
        <div class="invalid-feedback">
          {{ $message }}
        </div>  
        @enderror
      </div>
      <button class="w-100 btn btn-lg btn-primary mt-2" type="submit">Login</button>
      <small class="d-block text-center mt-3">Not Registered? <a class="text-decoration-none" href="/register"> Register Now!</a></small>
  </form>
  </main> 
</div>
</div>    
@endsection