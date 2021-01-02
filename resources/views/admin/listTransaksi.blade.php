@extends('layouts.admin')
@section('role', "Admin")
@section('content')
    <div class="container">
        @if ($message = Session::get('success'))
        <div class="row">
            <div class="col mt-3">
                <div class="alert alert-success alert-block">
                    <button type="button" class="close" data-dismiss="alert">x</button>
                    <strong>{{ $message }}</strong>
                </div>
            </div>
        </div>
    @endif
    @if ($message = Session::get('danger'))
        <div class="row">
            <div class="col mt-3">
                <div class="alert alert-danger alert-block">
                    <button type="button" class="close" data-dismiss="alert">x</button>
                    <strong>{{ $message }}</strong>
                </div>
            </div>
        </div>
    @endif
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

        <div class="row">
            <div class="col col-sm-12">
                <div class="card">
                    <div class="card-header bg-primary text-white">Semua Transaksi</div>
                    <div class="card-body">
                        <table class="table data-table table-responsive-sm">
                            <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama Member</th>
                                <th scope="col">Uang</th>
                                <th scope="col">Tanggal Bayar</th>
                                <th scope="col">Waktu</th>
                                <th scope="col">Status</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($listPembayaran as $item)
                            <tr>
                                <th scope="row">{{$loop->iteration}}</th>
                                <td>{{$item->member->name}}</td>
                                <td>{{$item->uang}}</td>
                                <td>{{date('d F Y', strtotime($item->created_at))}}</td>
                                <td>{{date('H', strtotime($item->created_at))}}:{{date('i', strtotime($item->created_at))}}</td>
                                <td>
                                    @if ($item->status == 0)
                                    <span class="badge badge-warning">Menuggu Konfirmasi Admin</span>
                                    @elseif($item->status == 1)
                                        <span class="badge badge-success">Suksess</span>
                                    @endif
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('custom-script')
<script>
    $(function(){
        var table = $('.data-table').DataTable();
    });
</script>
@endsection
