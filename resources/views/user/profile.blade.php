@extends('layouts.user')
@section('content')
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
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Ganti Password</a>
                </li>
            </ul>
            <div class="tab-content bg-light" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <div class="row">
                        <div class="col-8 p-3">
                            <div class="card text-dark">
                                <div class="card-header text-white bg-info">
                                    Biodata
                                </div>
                                <div class="card-body">
                                    <ul class="list-group text-left">
                                        <li class="list-group-item">
                                            <div class="row">
                                                <div class="col col-4">
                                                    <label for="address">N0. ID</label>
                                                </div>
                                                <div class="col col-2">
                                                    <label for="">:</label>
                                                </div>
                                                <div class="col">
                                                    {{$user->no_id}}
                                                </div>
                                            </div>
                                        </li>
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
                                                    <label for="address">Alamat</label>
                                                </div>
                                                <div class="col col-2">
                                                    <label for="">:</label>
                                                </div>
                                                <div class="col">
                                                    {{$user->alamat}}
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="row">
                                                <div class="col col-4">
                                                    <label for="address">Phone</label>
                                                </div>
                                                <div class="col col-2">
                                                    <label for="">:</label>
                                                </div>
                                                <div class="col">
                                                    {{$user->phone}}
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
                                                    @if ($user->status == 0)
                                                        <span class="badge badge-danger">Belum Bayar</span>
                                                    @elseif($user->status == 1)
                                                        <span class="badge badge-warning">Menuggu Konfirmasi Admin</span>
                                                    @elseif($user->status == 2)
                                                        <span class="badge badge-success">Aktif</span>
                                                    @elseif($user->status == 3)
                                                        <span class="badge badge-secondary">Tidak Aktif</span>
                                                    @endif
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="row">
                                                <div class="col col-4">
                                                    <label for="address">Aktif Sampai</label>
                                                </div>
                                                <div class="col col-2">
                                                    <label for="">:</label>
                                                </div>
                                                <div class="col">
                                                    @if ($waktu!=null)
                                                        <strong class="badge badge-success">{{date('d F Y', strtotime($waktu->tenggat))}}</strong>
                                                    @endif
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card mt-3">
                                <div class="card-header text-white bg-secondary">
                                    List Transaksi
                                </div>
                                <div class="card-body">
                                    <table class="table data-table table-responsive-sm">
                                        <thead>
                                        <tr>
                                            <th scope="col">No</th>
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
                        <div class="col-4 p-3">
                            <div class="card">
                                <div class="card-header text-white bg-warning">
                                    Pemberitahuan
                                </div>
                                <div class="card-body">
                                    @if ($user->status==0)
                                        <div class="alert alert-danger alert-block">
                                            <strong>Silahkan Melakukan Pembayaran</strong>
                                        </div>
                                    @elseif($user->status==1)
                                        <div class="alert alert-warning alert-block">
                                            <strong>Pembayaran Menuggu Konfirmasi Admin</strong>
                                        </div>
                                    @elseif($user->status==2)
                                        <div class="alert alert-success alert-block">
                                            <p>Aktif Sampai tanggal</p>
                                            <strong>{{date('d F Y', strtotime($waktu->tenggat))}}</strong>
                                            <p>Harap perpanjang sebelum tanggal tersebut</p>
                                        </div>
                                    @endif
                                </div>
                            </div>

                            <div class="card mt-3">
                                <div class="card-header bg-success text-white">Pembayaran</div>
                                <div class="card-body">
                                    @if ($user->status==0)
                                        <div class="alert alert-danger alert-block">
                                            <strong>Silahkan Melakukan Pembayaran Pilih Opsi dibawah ini</strong>
                                            <hr>
                                            <ol class="text-left">
                                                <li>Transfer Bank BCA (4680205189) an. fitnes uinsa</li>
                                                <li>GO PAY (789685236548) an. fitnes uinsa </li>
                                                <li>Shoope Pay (08125236525) an. fitnes uinsa</li>
                                            </ol>
                                            <strong>Upload Bukti Pembayaran Pada form dibawah ini</strong><br>
                                            <hr>
                                            <form action="{{ url('pembayaran') }}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                <input type="file" name="image"><br>
                                                <div class="input-group my-2 mr-sm-2">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text text-dark">Rp.</div>
                                                    </div>
                                                    <input type="text" class="form-control text-center" name="uang" value="150.000" readonly>
                                                </div>
                                                <button type="submit" class="btn btn-success">Kirim</button>
                                            </form>
                                        </div>
                                    @elseif($user->status==1)
                                        <div class="alert alert-warning alert-block">
                                            <strong>Pembayaran Menuggu Konfirmasi Admin</strong>
                                        </div>
                                    @elseif($user->status==2)
                                        <div class="alert alert-success alert-block">
                                            <p>Aktif Sampai tanggal</p>
                                            <strong>{{date('d F Y', strtotime($waktu->tenggat))}}</strong><br>
                                            <hr>
                                            <strong>Silahkan Melakukan Pembayaran Sebelum masuk tanggal tersebut Pilih Opsi dibawah ini</strong>
                                            <hr>
                                            <ol class="text-left">
                                                <li>Transfer Bank BCA (4680205189) an. fitnes uinsa</li>
                                                <li>GO PAY (789685236548) an. fitnes uinsa </li>
                                                <li>Shoope Pay (08125236525) an. fitnes uinsa</li>
                                            </ol>
                                            <strong>Upload Bukti Pembayaran Pada form dibawah ini</strong><br>
                                            <hr>
                                            <form action="{{ url('pembayaran') }}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                <input type="file" name="image"><br>
                                                <div class="input-group my-2 mr-sm-2">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text text-dark">Rp.</div>
                                                    </div>
                                                    <input type="text" class="form-control text-center" value="100.000" name="uang" readonly>
                                                </div>
                                                <button type="submit" class="btn btn-success">Kirim</button>
                                            </form>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <div class="row">
                        <div class="col mt-3 p-5">
                            <div class="card">
                                <div class="card-header bg-primary text-dark">Update Profile</div>
                                <div class="card-body">
                                    <form method="POST" action="{{ route('updateProfile') }}">
                                        @csrf

                                        <div class="form-group row">
                                            <label for="name" class="col-md-4 col-form-label text-md-right text-dark">{{ __('Name') }}</label>

                                            <div class="col-md-6">
                                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $user->name }}" required autocomplete="name" autofocus>

                                                @error('name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="name" class="col-md-4 col-form-label text-md-right text-dark">{{ __('Alamat') }}</label>

                                            <div class="col-md-6">
                                                <input id="alamat" type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat" value="{{ $user->alamat }}" required autocomplete="alamat" autofocus>

                                                @error('alamat')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="phone" class="col-md-4 col-form-label text-md-right text-dark">{{ __('Phone') }}</label>

                                            <div class="col-md-6">
                                                <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{$user->phone }}" required autocomplete="phone" autofocus>

                                                @error('phone')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row mb-0">
                                            <div class="col-md-6 offset-md-4">
                                                <button type="submit" class="btn btn-primary">
                                                    {{ __('Update') }}
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ url('updatePasswordUser') }}" method="POST">
                                @csrf
                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right text-dark">{{ __('Password Lama') }}</label>

                                    <div class="col-md-6">
                                        <input id="password" type="password" class="form-control @error('oldPassword') is-invalid @enderror" name="oldPassword" required>

                                        @error('oldPassword')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="password" class="col-md-4 col-form-label text-md-right text-dark">{{ __('Password Baru') }}</label>

                                    <div class="col-md-6">
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="password-confirm" class="col-md-4 col-form-label text-md-right text-dark">{{ __('Confirm Password') }}</label>

                                    <div class="col-md-6">
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-success">Ganti Password</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
