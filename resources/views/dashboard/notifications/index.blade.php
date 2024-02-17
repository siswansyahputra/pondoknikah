@extends('dashboard/template')
@section('content')
<div class="page-header">
    <h1>
        Notifications
        <small>
            <i class="ace-icon fa fa-angle-double-right"></i>
            All
        </small>
    </h1>
</div><!-- /.page-header -->
<div class="row">
    <div class="col-xs-12">
        <div class="table-responsive">
            <table class="table table-striped">
                <tr>
                    <th>#</th>
                    <th>Member</th>
                    <th>Deskripsi</th>
                    <th>Tipe</th>
                    <th>Jenis</th>
                    <th>Status</th>
                    <th></th>
                </tr>
                @foreach($notifi as $no=>$notifi)
                <tr>
                    <td>{{ $no+1 }}</td>
                    <td>{{ $notifi->user_id }}</td>
                    <td>{{ $notifi->data }}</td>
                    <td>{{ $notifi->type }}</td>
                    <td>{{ $notifi->notifiable_type }}</td>
                    <td></td>
                    <td></td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection