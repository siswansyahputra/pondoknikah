@extends('dashboard/template')
@section('content')
<div class="page-header">
    <h1>
        Form Password
        <small>
            <i class="ace-icon fa fa-angle-double-right"></i>
            {{ auth()->user()->name }}
        </small>
    </h1>
</div><!-- /.page-header -->
<form action="/change-password" method="post">
    @csrf
    <div class="row">
        <div class="col-xs-12">
            <label for="current_password">Password Lama</label>
            <div class="input-group">
                <input class="form-control @error('current_password') is-invalid @enderror" id="current_password" name="current_password" type="password" placeholder="password lama" required />
                <span class="input-group-addon" id="show-password1">
                    <i id="icon-eye" class="fa fa-eye  bigger-110"></i>
                </span>
            </div>
            @error('current_password')
            <div class="text-danger">
                {{ $message }}
            </div>
            @enderror
            <div class="text-danger" id="warning1"></div>
            <div class="space-4"></div>
            <label for="new_password">Password Baru</label>
            <div class="input-group">
                <input class="form-control @error('new_password') is-invalid @enderror" id="new_password" name="new_password" type="password" placeholder="password baru" required />
                <span class="input-group-addon" id="show-password2">
                    <i id="icon-eye" class="fa fa-eye  bigger-110"></i>
                </span>
            </div>
            @error('new_password')
            <div class="text-danger">
                {{ $message }}
            </div>
            @enderror
            <div class="text-danger" id="warning2"></div>
            <div class="space-4"></div>
            <label for="password_confirmation">Ulangi Password</label>
            <div class="input-group">
                <input class="form-control @error('password_confirmation') is-invalid @enderror" id="password_confirmation" name="password_confirmation" type="password" placeholder="ulangi password" required disabled />
                <span class="input-group-addon" id="show-password3">
                    <i id="icon-eye" class="fa fa-eye  bigger-110"></i>
                </span>
            </div>
            @error('password_confirmation')
            <div class="text-danger">
                {{ $message }}
            </div>
            @enderror
            <div class="text-danger" id="warning3"></div>
            <div class="space-4"></div>
            <div class="pull-right">
                <button class="btn btn-sm" data-dismiss="modal">
                    <i class="ace-icon fa fa-times"></i>
                    Cancel
                </button>

                <button type="submit" id="update_password" class="btn btn-sm btn-primary" disabled>
                    <i class="ace-icon fa fa-check"></i>
                    Simpan
                </button>
            </div>
        </div>
    </div>
</form>
@endsection