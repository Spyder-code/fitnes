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
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <ul class="list-group text-left">
                        <li class="list-group-item">
                            <div class="row">
                                <div class="col col-4">
                                    <label for="address">Name</label>
                                </div>
                                <div class="col col-2">
                                    <label for="">:</label>
                                </div>
                                <div class="col">
                                    {{$user->name}}
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="row">
                                <div class="col col-4">
                                    <label for="address">Email</label>
                                </div>
                                <div class="col col-2">
                                    <label for="">:</label>
                                </div>
                                <div class="col">
                                    {{$user->email}}
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="row">
                                <div class="col col-4">
                                    <label for="address">Jenis Kelamin</label>
                                </div>
                                <div class="col col-2">
                                    <label for="">:</label>
                                </div>
                                <div class="col">
                                    {{$user->jenis_kelamin}}
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="row">
                                <div class="col col-4">
                                    <label for="address">Tanggal Daftar</label>
                                </div>
                                <div class="col col-2">
                                    <label for="">:</label>
                                </div>
                                <div class="col">
                                    {{date('d F Y', strtotime($user->created_at))}}
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="row">
                                <div class="col col-4">
                                    <label for="address">Status</label>
                                </div>
                                <div class="col col-2">
                                    <label for="">:</label>
                                </div>
                                <div class="col">
                                    {{$user->status}}
                                </div>
                            </div>
                        </li>
                    </ul>
                    <form action="{{ url('updateStatusMember') }}" method="post">
                        @csrf
                        <input type="hidden" name="id" value="{{ $user->id }}">
                        <button class="btn btn-primary btn-block mt-3">Lunas</button>
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
