@extends('login/template')
@section('content')
<form method="POST" action="/login/auth">
    @csrf
    @if(session()->has('loginError'))
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Login Gagal!</strong> username atau password yang anda input salah.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    <p>Please login to your account</p>
    <div class="form-floating mb-4">
        <input type="text" id="username" name="username" class="form-control @error('username') is-invalid @enderror" placeholder="Masukkan username" value="{{ old('username') }}" autofocus required />
        <label class="form-label" for="username">Username</label>
        @error('username')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>

    <div class="form-floating mb-4">
        <input type="password" id="password" name="password" class=" form-control @error('password') is-invalid @enderror" placeholder="Masukkan password" required />
        <label class="form-label" for="password">Password</label>
        @error('password')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>

    <div class="text-center pt-1 mb-5 pb-1">
        <button type="submit" class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3">Log
            in</button>
        <a class="text-muted" href="/login/message">Forgot password?</a>
    </div>

    <div class="d-flex align-items-center justify-content-center pb-4">
        <p class="mb-0 me-2">Don't have an account?</p>
        <a href="/registrasi" class="btn btn-outline-danger">Create new</a>
    </div>

</form>
@endsection