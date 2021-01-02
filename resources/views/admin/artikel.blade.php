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
                <div class="card-body">
                    <form action="{{ url('addArtikel') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="pembayaran">Judul</label>
                            <input type="text" name="judul" class="form-control" autofocus>
                        </div>
                        <div class="form-group">
                            <label for="pembayaran">Konten</label>
                            <input type="text" name="konten" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="pembayaran">Isi</label>
                            <textarea name="isi" class="form-control" cols="30" rows="10"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="file" name="image">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('custom-script')
<script src="{{asset('admin/js/dashboard.js')}}"></script>
@endsection
