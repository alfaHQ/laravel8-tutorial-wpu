@extends('layouts.main')

@section('container')

  <div class="row justify-content-center">
    <div class="col-md-4">
          @if ( session()->has('success') )
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              {{ session('success') }}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
          @endif

          @if ( session()->has('loginError') )
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
              {{ session('loginError') }}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
          @endif
          
        <main class="form-signin">
            <form action="{{ url('/login') }}" method="post">
                @csrf

                <h1 class="h3 mb-3 fw-normal text-center">Login Form</h1>
            
                <div class="form-floating">
                  <input type="text" class="form-control rounded-0 rounded-top @error('email') is-invalid @enderror" id="email" placeholder="name@gmail.com" name="email" required autofocus>
                  <label for="email">Email</label>
                </div>
                @error('email')
                  <span class="text-danger">{{ $message }}</span>
                @enderror

                <div class="form-floating">
                  <input type="password" class="form-control rounded-0 rounded-bottom" id="password" placeholder="Password" name="password" required>
                  <label for="password">Password</label>
                </div>
                @error('password')
                  <span class="text-danger">{{ $message }}</span>
                @enderror
            
                <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Login</button>
            </form>

            <p class="mt-3">Not registered? <a href="{{ url('/register') }}">Register Now!</a></p>
        </main>
    </div>
  </div>
@endsection