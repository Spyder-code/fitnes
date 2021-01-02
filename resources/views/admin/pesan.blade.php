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
            <div class="col col-sm-12 mt-5">
                <div class="card">
                    <div class="card-body">
                        <table class="table data-table table-responsive-sm">
                            <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Subjek</th>
                                <th scope="col">Email</th>
                                <th scope="col">Pesan</th>
                                <th scope="col">Aksi</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($data as $item)
                            <tr>
                                <th scope="row">{{$loop->iteration}}</th>
                                <td>{{ $item->nama}}</td>
                                <td>{{$item->subjek}}</td>
                                <td>{{$item->email}}</td>
                                <td>{{ $item->pesan }}</td>
                                <td class="d-flex flex-row">
                                    <form action="{{url('deletePesan')}}" method="post">
                                        @csrf
                                        <input type="hidden" name="id" value="{{$item->id}}">
                                        <button type="submit" onclick="return confirm('Are You Sure?')" class="ml-2 btn btn-danger btn-sm mr-2"><i class="mdi mdi-trash-can"></i></button>
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

    {{-- Modal --}}
    <div class="modal fade kategoriModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 id="judulImage"></h1>
                    <button class="close" type="button" data-dismiss="modal" aria-label="close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{url('addKategori')}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="Nama">Nama Kategori</label>
                            <input type="text" name="nama" id="nama" class="form-control" autofocus>
                            <button type="submit" class="btn btn-success mt-3">Tambahkan</button>
                        </div>
                    </form>
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
