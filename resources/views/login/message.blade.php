@extends('login/template')
@section('content')
<p class="text-center">{{ $data['description'] }}</p>
<div class="text-left pt-1 mb-5 pb-1 text-center">
    <a href="/login" class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3">
        Kembali ke halaman login
    </a>
</div>
@endsection