@extends('login/template')
@section('content')
<form method="get" action="/registrasi/validasi">
    @csrf
    <p>Masukkan data anda untuk mendaftar</p>

    <div class="form-floating mb-4">
        <input type="text" id="username" name="username" class="form-control @error('username') is-invalid @enderror" placeholder="Masukkan username" value="{{ old('username')}}" required autofocus />
        <label class="form-label" for="username">Username</label>
        @error('username')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="form-floating mb-4">
        <input type="text" id="name" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Masukkan nama lengkap" value="{{ old('name')}}" required />
        <label class="form-label" for="name">Nama Lengkap</label>
        @error('name')
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
    <div class="form-floating mb-4">
        <input type="password" id="password_confirmation" name="password_confirmation" class=" form-control @error('password_confirmation') is-invalid @enderror" placeholder="Ulangi password" required />
        <label class="form-label" for="password_confirmation">Ulangi Password</label>
        @error('password_confirmation')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="form-floating mb-4">
        <input type="text" id="nowa" name="nowa" class=" form-control @error('nowa') is-invalid @enderror" placeholder="Masukkan nomor whatsapp" value="{{ old('nowa')}}" required />
        <label class="form-label" for="nowa">Nomor Whatsapp</label>
        @error('nowa')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="form-floating mb-4">
        <input type="text" id="referral" name="referral" class=" form-control" placeholder="Masukkan kode referral jika ada" @if(!empty($data['reff'])) value="{{ $data['reff'] }}" readonly @endif />
        <label class="form-label" for="referral">Kode Referral</label>
        @error('referral')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>

    <div class="text-left pt-1 mb-1 pb-1">
        <button type="reset" class="btn btn-light btn-block fa-lg  mb-3">
            Reset
        </button>
        <button type="submit" class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3">
            Daftar
        </button>
    </div>
    <div class="text-left pt-1 mb-1 pb-1 text-center">
        <a class="text-muted" href="/login">Kembali ke halaman login</a>
    </div>
</form>
@endsection