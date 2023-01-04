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
<div class="profile-user-info profile-user-info-striped">
    <div class="profile-info-row">
        <div class="profile-info-name"> Username </div>

        <div class="profile-info-value">
            {{ auth()->user()->username }}
        </div>
    </div>

    <div class="profile-info-row">
        <div class="profile-info-name"> Nama Lengkap </div>

        <div class="profile-info-value">
            {{ auth()->user()->name }}
        </div>
    </div>

    <div class="profile-info-row">
        <div class="profile-info-name"> No. Whatsapp </div>

        <div class="profile-info-value">
            {{ auth()->user()->nowa }}
        </div>
    </div>

    <div class="profile-info-row">
        <div class="profile-info-name"> Kode Referral </div>

        <div class="profile-info-value">

        </div>
    </div>
    <div class="profile-info-row">
        <div class="profile-info-name"> Referral </div>

        <div class="profile-info-value">
            {{ auth()->user()->referral }}
        </div>
    </div>
    <div class="profile-info-row">
        <div class="profile-info-name"> Level </div>

        <div class="profile-info-value">
            {{ auth()->user()->level }}
        </div>
    </div>
</div>

@endsection