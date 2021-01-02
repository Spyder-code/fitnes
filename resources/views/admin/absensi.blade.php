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

    <div class="row">
        <div class="col-8">
            <div class="card">
                <div class="card-header text-white bg-success">
                    Absen
                </div>
                <div class="card-body">
                    <form action="{{ url('storeAbsen') }}" method="POST">
                        @csrf
                        <label class="sr-only" for="inlineFormInputGroupUsername2">Username</label>
                        <div class="input-group mb-2 mr-sm-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text text-dark">FN</div>
                            </div>
                            <input type="text" class="form-control text-center" name="id" autofocus>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="card">
                <div class="card-header text-white bg-warning">
                    Tanggal hari ini
                </div>
                <div class="card-body text-center">
                    <div class="alert alert-warning">
                        <strong>{{date('d F Y')}}</strong>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col">
            <div class="card">
                <div class="card-header text-white bg-info">
                    List Absensi
                </div>
                <div class="card-body">
                    <table class="table data-table table-responsive-sm">
                        <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Tanggal</th>
                            <th scope="col">Waktu</th>
                            <th scope="col">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($data as $item)
                        <tr>
                            <th scope="row">{{$loop->iteration}}</th>
                            <td>{{$item->member->name}}</td>
                            <td>{{date('d F Y', strtotime($item->created_at))}}</td>
                            <td>{{date('H', strtotime($item->created_at))}}:{{date('i', strtotime($item->created_at))}}</td>
                            <td class="d-flex flex-row">
                                <form action="{{url('destroyAbsen')}}" method="post">
                                    @csrf
                                    <input type="hidden" name="id" value="{{$item->id}}">
                                    <button type="submit" onclick="return confirm('Are You Sure?')" class="ml-2 btn btn-danger">Hapus</button>
                                </form>
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
<script src="{{asset('admin/js/dashboard.js')}}"></script>
<script>
    $(function(){
        var table = $('.data-table').DataTable();
    });
</script>
@endsection
