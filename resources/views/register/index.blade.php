@extends('layouts.main')

@section('container')

<div class="row justify-content-center">
    <div class="col-md-4">
        <main class="form-signin">
            <h1 class="h3 mb-3 fw-normal text-center">Please Register</h1>
            <form>
              <div class="form-floating">
                <input type="email" class="form-control" id="name" placeholder="name">
                <label for="name">Name</label>
              </div>
              <div class="form-floating">
                <input type="email" class="form-control" id="username" placeholder="username">
                <label for="username">Username</label>
              </div>
              <div class="form-floating">
                <input type="email" class="form-control" id="email" placeholder="email">
                <label for="email">Email address</label>
              </div>
              <div class="form-floating">
                <input type="password" class="form-control" id="password" placeholder="Password">
                <label for="password">Password</label>
              </div>
          
              <button class="btn btn-primary w-100 py-2" type="submit">Login</button>
            </form>

            <small class="d-block text-center pt-3">Already Register ?<a href="/login"> Login  </a></small>
          </main>
    </div>
</div>

@endsection