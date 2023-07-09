@extends('layouts.main')

@section('container')
  <div class="row justify-content-center">
    <div class="col-md-6">
        <main class="form-register">
            <form action="{{ url('/register') }}" method="POST">
                @csrf

                <h1 class="h3 mb-3 fw-normal text-center">Registration Form</h1>
            
                <div class="form-floating">
                  <input type="text" class="form-control rounded-0 rounded-top @error('name') is-invalid @enderror" id="name" placeholder="input name.." name="name" value="{{ old('name') }}" required>
                  <label for="name">Name</label>
                  @error('name')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>

                <div class="form-floating">
                  <input type="text" class="form-control rounded-0  @error('username') is-invalid @enderror" id="username" placeholder="input username.." name="username" value="{{ old('username') }}" required>
                  <label for="username">Username</label>
                  @error('username')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>

                <div class="form-floating">
                  <input type="text" class="form-control rounded-0  @error('email') is-invalid @enderror" id="email" placeholder="input email.." name="email" value="{{ old('email') }}" required>
                  <label for="email">Email</label>
                  @error('email')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>

                <div class="form-floating">
                  <input type="password" class="form-control rounded-0 rounded-bottom  @error('password') is-invalid @enderror" id="password" placeholder="input password.." name="password" required>
                  <label for="password">Password</label>
                  @error('password')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
            
                <button class="w-100 btn btn-lg btn-primary mt-4" type="submit">Register</button>
            </form>

            <p class="mt-3">Already register? <a href="{{ url('/login') }}">Login</a></p>
        </main>
    </div>
  </div>
@endsection