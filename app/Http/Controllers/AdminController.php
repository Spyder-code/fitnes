<?php

namespace App\Http\Controllers;

use App\Absen;
use App\Artikel;
use App\Perpanjangan;
use App\Pesan;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

/*
    status
        0 = daftar belum bayar
        1 = bayar belum di acc
        2 = aktif
        3 = tenggat
*/

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function profile()
    {
        $user = User::where('id',Auth::user()->id)->first();
        return view('admin.profile',compact('user'));
    }

    public function listTransaksi()
    {
        $listPembayaran = Perpanjangan::all();
        return view('admin.listTransaksi',compact('listPembayaran'));
    }

    public function listMember()
    {
        $data = User::role('member')->get();
        return view('admin.listMember',compact('data'));
    }

    public function listArtikel()
    {
        $data = Artikel::all()->sortByDesc('created_at');
        return view('admin.listArtikel',compact('data'));
    }

    public function absensi()
    {
        $data = Absen::all()->sortByDesc('created_at');
        return view('admin.absensi',compact('data'));
    }

    public function storeAbsen(Request $request)
    {
        $id = 'FN'.$request->id;
        $user = User::where('no_id', $id)->first();
        if($user==null){
            return back()->with('danger','ID tidak ditemukan');
        }else{
            Absen::create([
                'id_member' => $user->id
            ]);
            return back()->with('success','Absensi member '.$user->name.' berhasil!');
        }
    }

    public function destroyAbsen(Request $request)
    {
        Absen::destroy($request->id);
        return back()->with('success','Hapus data berhasil!');
    }

    public function pesan()
    {
        $data = Pesan::all()->sortByDesc('created_at');
        return view('admin.pesan',compact('data'));
    }

    public function deletePesan(Request $request)
    {
        Pesan::destroy($request->id);
        return back()->with('success','Hapus Data Berhasil!');
    }

    public function konfirmasiPembayaran(Request $request)
    {
        User::where('id',$request->id_member)->update([
            'status' => 2,
        ]);

        Perpanjangan::where('id',$request->id)->update([
            'status' => 1,
        ]);

        return back()->with('success','Pembayaran Suksess!');
    }

    public function detailMember($id)
    {
        $user = User::find($id);
        $pembayaran = Perpanjangan::where('id_member',$id)->where('status',0)->first();
        $aktif = Perpanjangan::where('id_member',$id)->where('status',1)->orderBy('created_at','desc')->first();
        $listPembayaran = Perpanjangan::all()->where('id_member',$id)->sortByDesc('created_at');
        return view('admin.detailMember', compact('user','pembayaran','listPembayaran','aktif'));
    }

    public function deleteMember(Request $request)
    {
        User::destroy($request->id);
        return back()->with('success','Delete member berhasil!');
    }

    public function artikel()
    {
        return view('admin.artikel');
    }

    public function artikelPost(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'konten' => 'required',
            'isi' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);
        if ($files = $request->file('image')) {
            $profileImage = $files->getClientOriginalName();
            $path = $files->storeAs('public/images/', $profileImage);
            $url = Storage::url($path);
            $imgUrl = url($url);
            Artikel::create([
                'judul' => $request->judul,
                'kontent' => $request->konten,
                'text' => $request->isi,
                'image' => $profileImage,
                'image_path' => $imgUrl,
            ]);
        }

        return redirect('admin/list-artikel')->with('success','Artikel berhasil ditambahkan!');
    }

    public function deleteArtikel(Request $request)
    {
        Artikel::destroy($request->id);
        return back()->with('success','Delete Artikel berhasil!');
    }

    public function changeImage(Request $request)
    {
        $request->validate([
            // 'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        if($request->oldImage!="default.jpg"){
            if (file_exists(public_path('images/user/',$request->oldImage))) {
                unlink(storage_path('app/public/images/user/'.$request->oldImage));
                    if ($files = $request->file('image')) {
                        $profileImage = $files->getClientOriginalName();
                        $path = $files->storeAs('public/images/user', $profileImage);
                        $url = Storage::url($path);
                        $imgUrl = url($url);
                        User::where('id',$request->id)
                            ->update([
                            'image' =>  $profileImage,
                            'image_path' =>  $imgUrl,
                        ]);
                    }
            }
        }else{
            if ($files = $request->file('image')) {
                $profileImage = $files->getClientOriginalName();
                $path = $files->storeAs('public/images/user', $profileImage);
                $url = Storage::url($path);
                $imgUrl = url($url);
                User::where('id',$request->id)
                    ->update([
                    'image' =>  $profileImage,
                    'image_path' =>  $imgUrl,
                ]);
            }
        }
        return back()->with('success','Foto profil berhasil di ubah!');
    }

    public function changePassword(Request $request)
    {
        $request->validate([
            'oldPassword'  => 'required',
            'newPassword'  => 'required'
        ]);
        $password = Auth::user()->password;
        if(Hash::check($request->oldPassword, $password)){
            User::where('id',$request->id)
            ->update([
            'password' => Hash::make($request->newPassword)
            ]);
            return back()->with('success','Password berhasil di ubah!');
        } else {
            return back()->with('danger','Password gagal di ubah!');
        }
    }
    public function changeEmail(Request $request)
    {
        $request->validate([
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        ]);
        User::where('id',$request->id)->update([
            'email' => $request->email
        ]);
        return back()->with('success','Email berhasil di ubah!');
    }

}
