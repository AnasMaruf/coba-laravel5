@extends('layouts.main')
@section('container')
<div class="row justify-content-center">
<div class="col-md-4">
  <main class="form-registration">
    <form method="POST" action="/register">
      @csrf
      <h1 class="h3 mt-5 mb-3 fw-normal text-center">Register Form</h1>
      <div class="form-floating">
        <input type="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="name" name="name">
        <label for="name">Name</label>
        @error('name')
        <div class="invalid-feedback">
          {{ $message }}
        </div>  
        @enderror
      </div>
      <div class="form-floating">
        <input type="username" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="username " name="username">
        <label for="username">username </label>
        @error('username')
        <div class="invalid-feedback">
          {{ $message }}
        </div>  
        @enderror
      </div>
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
      <button class="w-100 btn btn-lg btn-primary mt-2" type="submit">Register</button>
      <small class="d-block text-center mt-3">Not Registered? <a class="text-decoration-none" href="/login"> login Now!</a></small>
  </form>
  </main> 
</div>
</div>    
@endsection