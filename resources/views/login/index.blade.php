@extends('layouts.main')

@section('container')

<div class="row justify-content-center">
    <div class="col-md-4">
      @if (session()->has('loginError'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          {{ session('loginError') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      @endif

        <main class="form-signin">
            <h1 class="h3 mb-3 fw-normal text-center">Please Login</h1>
            <form action="/login" method="POST">
              @csrf
              
              <div class="form-floating">
                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Email">
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
          
              <button class="btn btn-primary w-100 py-2" type="submit">Login</button>
            </form>

            <small class="d-block text-center pt-3">Not Register Yet ?<a href="/register"> Register Now  </a></small>
          </main>
    </div>
</div>

@endsection