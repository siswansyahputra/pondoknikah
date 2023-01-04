@extends('dashboard/template')
@section('content')
@if(session()->has('success'))
<div class="alert alert-info">
    <button type="button" class="close" data-dismiss="alert">
        <i class="ace-icon fa fa-times"></i>
    </button>
    <strong>Berhasil...</strong>
    Password anda telah diubah
    <br />
</div>
@endif
@if(session()->has('failed'))
<div class="alert alert-danger">
    <button type="button" class="close" data-dismiss="alert">
        <i class="ace-icon fa fa-times"></i>
    </button>
    <strong>
        <i class="ace-icon fa fa-times"></i>
        Gagal!
    </strong>
    Password yang anda input tidak sesuai
    <br />
</div>
@endif
Selamat datang
@endsection