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
                <label class="col-sm-2 control-label no-padding-right" for="kode_referral"> Kode Referral </label>
                <div class="col-sm-10">
                    @if(empty(auth()->user()->kode_referral))
                    <label class="control-label"> {{ "empty" }}</label>
                    @else
                    <label class="control-label">{{ auth()->user()->kode_referral }}</label>
                    @endif

                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label no-padding-right" for="referral"> Referral </label>
                <div class="col-sm-10">
                    @if(empty(auth()->user()->referral))
                    <label class="control-label">{{ "empty" }}</label>
                    @else
                    <label class="control-label">{{ auth()->user()->referral }}</label>
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
                </div>
            </div>
            <div class="space-4"></div>
            <div class="pull-right">
                <button class="btn btn-sm" data-dismiss="modal">
                    <i class="ace-icon fa fa-times"></i>
                    Cancel
                </button>

                <button type="submit" id="update_password" class="btn btn-sm btn-primary">
                    <i class="ace-icon fa fa-pencil-square-o"></i>
                    Update
                </button>
            </div>
        </form>
    </div>
</div>
@endsection