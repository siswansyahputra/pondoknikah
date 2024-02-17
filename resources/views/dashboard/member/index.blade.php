@extends('dashboard/template')
@section('content')
<div class="page-header">
    <h1>
        Member
        <small>
            <i class="ace-icon fa fa-angle-double-right"></i>
            Customer
        </small>
    </h1>
</div><!-- /.page-header -->
<div class="row">
    <div class="col-xs-12">
        <div class="table-responsive">
            <table class="table table-striped">
                <tr>
                    <th>#</th>
                    <th>Username</th>
                    <th>Nama Lengkap</th>
                    <th>No. Whatsapp</th>
                    <th>Kode Referral</th>
                    <th>Aktif</th>
                    <th></th>
                </tr>
                @foreach($data['user'] as $no=>$user)
                <tr>
                    <td>{{ $no+1 }}</td>
                    <td>{{ $user->username }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->nowa }}</td>
                    <td>{{ $user->referral_code }}</td>
                    <td>
                        @if($user->active == 'y')
                        active
                        @else
                        not-active
                        @endif
                    </td>
                    <td>
                        <a href="#" data-toggle="modal" class="btn btn-xs btn-info">
                            <i class="ace-icon fa fa-pencil bigger-120"></i>
                        </a>
                        <a href="#" data-toggle="modal" class="btn btn-xs btn-danger">
                            <i class="ace-icon fa fa-trash-o bigger-120"></i>
                        </a>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection