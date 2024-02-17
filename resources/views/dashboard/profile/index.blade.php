@extends('dashboard/template')
@section('content')
<div class="page-header">
    <h1>
        Profile
        <small>
            <i class="ace-icon fa fa-angle-double-right"></i>
            {{ auth()->user()->name }}
        </small>
    </h1>
</div><!-- /.page-header -->
<div class="row">
    <div class="col-xs-12">
        @if(session()->has('Profilesuccess'))
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert">
                <i class="ace-icon fa fa-times"></i>
            </button>
            <strong>Berhasil...</strong>
            Profile anda telah diubah
            <br />
        </div>
        @endif
        @if(session()->has('submitSuccess'))
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert">
                <i class="ace-icon fa fa-times"></i>
            </button>
            <strong>Berhasil...</strong>
            Pengajuan reseller telah berhasil diajukan, manager akan segera menilainya...
            <br />
        </div>
        @endif
        <form class="form-horizontal" method="get" action="/update-profile" role="form">
            <div class="form-group">
                <label class="col-sm-2 control-label no-padding-right" for="username"> Username </label>
                <div class="col-sm-10">
                    <input type="text" id="username" name="username" value="{{ auth()->user()->username}}" readonly class="form-control" />
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label no-padding-right" for="name"> Nama Lengkap </label>
                <div class="col-sm-10">
                    <input type="text" id="name" name="name" value="{{ auth()->user()->name}}" class="form-control" required />
                    @error('name')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label no-padding-right" for="nowa"> No. Whatsapp </label>
                <div class="col-sm-10">
                    <input type="text" id="nowa" name="nowa" value="{{ auth()->user()->nowa}}" class="form-control" required />
                    @error('nowa')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label no-padding-right" for="referral_link"> Link Referral </label>
                <div class="col-sm-10">
                    @if(empty(auth()->user()->referral_code))
                    <label class="control-label text-warning"> {{ "empty" }}</label>
                    @else
                    <label class="control-label text-info">{{ route('registrasi') }}?reff={{ auth()->user()->referral_code  }}</label>
                    @endif
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label no-padding-right" for="referral_code"> Kode Referral </label>
                <div class="col-sm-10">
                    @if(empty(auth()->user()->referral_code))
                    <label class="control-label text-warning"> {{ "empty" }}</label>
                    @else
                    <label class="control-label text-info">{{ auth()->user()->referral_code }}</label>
                    @endif

                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label no-padding-right" for="referral"> Referral </label>
                <div class="col-sm-10">
                    @if(empty(auth()->user()->referral))
                    <label class="control-label text-warning">{{ "empty" }}</label>
                    @else
                    <label class="control-label text-info">{{ $data['reff']->name }}</label>
                    @endif
                </div>
            </div>
            <div class=" form-group">
                <label class="col-sm-2 control-label no-padding-right" for="level"> Level </label>
                <div class="col-sm-10">
                    <label class="control-label">
                        <span class="label label-lg label-yellow arrowed-in arrowed-in-right">
                            {{ auth()->user()->level}}
                        </span>
                    </label>
                    @if(auth()->user()->level=='customer')
                    <a class="blue" href="#modal-reseller" data-toggle="modal">
                        <i class="ace-icon fa fa-hand-o-right"></i>
                        Ajukan menjadi reseller
                    </a>
                    @elseif(auth()->user()->level=='reseller')
                    <a class="blue" href="#modal-manager" data-toggle="modal">
                        <i class="ace-icon fa fa-hand-o-right"></i>
                        Ajukan menjadi manager
                    </a>
                    @endif
                </div>
            </div>
            <div class="space-4"></div>
            <div class="pull-right">
                <button type="submit" id="update_password" class="btn btn-sm btn-primary">
                    <i class="ace-icon fa fa-pencil-square-o"></i>
                    Update
                </button>
            </div>
        </form>
    </div>
</div>
<div id="modal-reseller" class="modal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="blue bigger">Konfirmasi</h4>
            </div>

            <div class="modal-body">
                <div class="row">
                    <div class="col-xs-12 col-sm-12">
                        @if(auth()->user()->level=='customer')
                        Apakah anda yakin akan mengajukan menjadi reseller?
                        @else
                        Apakah anda yakin akan mengajukan menjadi manager?
                        @endif
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-sm" data-dismiss="modal">
                    <i class="ace-icon fa fa-times"></i>
                    Cancel
                </button>
                @if(auth()->user()->level=='customer')
                <a href="/submit-reseller" class="btn btn-sm btn-primary">
                    <i class="ace-icon fa fa-check"></i>
                    Ajukan
                </a>
                @else
                <a href="/submit-manager" class="btn btn-sm btn-primary">
                    <i class="ace-icon fa fa-check"></i>
                    Ajukan
                </a>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection