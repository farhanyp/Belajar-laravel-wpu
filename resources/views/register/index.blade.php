@extends('layouts.main')

@section('container')

<div class="row justify-content-center">
    <div class="col-md-4">
        <main class="form-signin">
            <h1 class="h3 mb-3 fw-normal text-center">Please Register</h1>
            <form action="/register" method="post">
              @csrf
              
              <div class="form-floating">
                <input type="name" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="name">
                <label for="name">Name</label>
                @error('name')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
              </div>

              <div class="form-floating">
                <input type="username" class="form-control @error('username') is-invalid @enderror" id="username" name="username" placeholder="username">
                <label for="username">Username</label>
                @error('username')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
              </div>

              <div class="form-floating">
                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="email">
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
          
              <button class="btn btn-primary w-100 py-2" type="submit">Register</button>
            </form>

            <small class="d-block text-center pt-3">Already Register ?<a href="/login"> Login  </a></small>
          </main>
    </div>
</div>

@endsection