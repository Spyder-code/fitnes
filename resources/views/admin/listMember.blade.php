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
                    <div class="card-header bg-primary text-white">Semua Member</div>
                    <div class="card-body">
                        <table class="table data-table table-responsive-sm">
                            <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">No. ID</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Status</th>
                                <th scope="col">Aksi</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($data as $item)
                            <tr>
                                <th scope="row">{{$loop->iteration}}</th>
                                <td>{{ $item->no_id}}</td>
                                <td>{{$item->name}}</td>
                                <td>{{$item->email}}</td>
                                <td>
                                    @if ($item->status == 0)
                                        <span class="badge badge-danger">Belum Bayar</span>
                                    @elseif($item->status == 1)
                                        <span class="badge badge-warning">Menuggu Konfirmasi</span>
                                    @elseif($item->status == 2)
                                        <span class="badge badge-success">Aktif</span>
                                    @elseif($item->status == 3)
                                        <span class="badge badge-secondary">Tidak Aktif</span>
                                    @endif
                                </td>
                                <td class="d-flex flex-row">
                                    <form action="{{url('deleteMember')}}" method="post">
                                        @csrf
                                        <input type="hidden" name="id" value="{{$item->id}}">
                                        <input type="hidden" name="judul" value="{{$item->nama}}">
                                        <button type="submit" onclick="return confirm('Are You Sure?')" class="ml-2 btn btn-danger btn-sm mr-2"><i class="mdi mdi-trash-can"></i></button>
                                    </form>
                                    <a href="{{url()->current().'/'.$item->id}}" class="btn btn-info btn-sm mr-2"><i class="mdi mdi-search-web"></i></a>
                                    {{-- @if ($item->status ==0)
                                    <form action="{{ url('updateStatusMember') }}" method="post">
                                        @csrf
                                        <input type="hidden" name="id" value="{{ $item->id }}">
                                        <button type="submit" onclick="return confirm('Are You Sure?')" class="btn btn-warning btn-sm mr-2"><i class="mdi mdi-cash"></i></button>
                                    </form>
                                    @endif --}}
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
