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
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <a href="{{ url('admin/tambah-artikel') }}" class="btn btn-info">Tambah Artikel</a>
                    </div>
                    <div class="card-body">
                        <table class="table table-responsive-sm">
                            <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Judul</th>
                                <th scope="col">Konten</th>
                                <th scope="col">Text</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($data as $item)
                            <tr>
                                <th scope="row">{{$loop->iteration}}</th>
                                <td>{{$item->judul}}</td>
                                <td>{{$item->kontent}}</td>
                                <td>{{$item->text}}</td>
                                <td class="d-flex flex-row">
                                    <form action="{{url('deleteArtikel')}}" method="post">
                                        @csrf
                                        <input type="hidden" name="id" value="{{$item->id}}">
                                        <input type="hidden" name="judul" value="{{$item->nama}}">
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
<script>
    $(function(){
        var table = $('.table').DataTable();
    });
</script>
@endsection
