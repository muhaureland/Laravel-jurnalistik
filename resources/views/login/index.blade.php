@extends('template_regsign.main')
@section('title', 'Login')
@section('container')
<div class="row justify-content-center">
    <div class="col-md-5">
        {{-- @if (session('status'))
        <div class="alert alert-success mb-1">
            {{ session('status') }}
        </div>
        @endif --}}
        {{-- @if (session('gagal'))
        <div class="alert alert-danger mb-1">
            {{ session('gagal') }}
        </div>
        @endif --}}
        <main class="form-signin">
            <h1 class="h3 mb-3 fw-normal">Please sign in</h1>
            {{-- <form action="{{ route('login.authenticate') }}" method="POST">
                @csrf
                <div class="form-floating">
                    <input type="email" class="form-control" @error('email') is-invalid @enderror name="email" id="email" placeholder="name@example.com" required autofocus value="{{ old('email') }}">
                    <label for="email">Email address</label>
                    @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-floating">
                    <input type="password" class="form-control" @error('password') is-invalid @enderror name="password" id="password" placeholder="Password" required>
                    <label for="password">Password</label>
                    @error('password')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
            </form> --}}
            <form method="POST" action="{{ route('login.authenticate') }}" class="needs-validation" novalidate="">
                @csrf
                <div class="form-group">
                  <label for="email">Email</label>
                  <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" tabindex="1" required autofocus>
                  @error('email')
                      <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>

                <div class="form-group">
                  <div class="d-block">
                      <label for="password" class="control-label">Password</label>
                    <div class="float-right">
                      <a href="auth-forgot-password.html" class="text-small">
                        Forgot Password?
                      </a>
                    </div>
                  </div>
                  <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required tabindex="2">
                  @error('password')
                    <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>

                <div class="form-group">
                  <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                    Login
                  </button>
                </div>
              </form>
            <small class="d-block text-center mt-3">not register ? <a href="{{ url('register') }}">registrasi sekarang</a></small>
        </main>
    </div>
</div>
@endsection