<?php

namespace App\Http\Controllers;

use App\Artikel;
use App\Document;
use App\Perpanjangan;
use App\Pesan;
use App\Student;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function index()
    {
        $artikel = Artikel::paginate(6);
        return view('user.index',compact('artikel'));
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'jenis_kelamin' => ['required'],
            'phone' => ['required'],
            'alamat' => ['required'],
        ]);

        $member = new User;
        $member->name = $request->name;
        $member->phone = $request->phone;
        $member->alamat = $request->alamat;
        $member->email = $request->email;
        $member->jenis_kelamin = $request->jenis_kelamin;
        $member->status = 0;
        $member->no_id = 'FN2911'.$member->getNextId();
        $member->password = Hash::make($request->password);
        $member->save();

        $member->assignRole('member');

        Auth::login($member);

        return redirect()->route('profile');
    }

    public function updateUser(Request $request)
    {
        $id = Auth::user()->id;
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'phone' => ['required'],
            'alamat' => ['required'],
        ]);

        User::where('id',$id)->update([
            'name' => $request->name,
            'phone' => $request->phone,
            'alamat' => $request->alamat,
        ]);

        return back()->with('success','Update Profile Success!');
    }

    public function profile()
    {
        $id = Auth::user()->id;
        $user = User::find($id);
        $listPembayaran = Perpanjangan::all()->where('id_member',$id)->sortByDesc('created_at');
        $waktu = Perpanjangan::where('id_member',$id)->where('status',1)->orderBy('created_at','desc')->first();
        return view('user.profile',compact('user','waktu','listPembayaran'));
    }

    public function pembayaran(Request $request)
    {
        $request->validate([
            'uang' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $id = Auth::user()->id;
        $user = User::find($id);
        $n = 30;

        if ($user->status==0) {
            $nextN = mktime(0, 0, 0, date("m"), date("d") + $n, date("Y"));
            $tenggat = date("Y-m-d", $nextN);

            if ($files = $request->file('image')) {
                $path = $files->storeAs('public/images/bukti/', $user->no_id.'.jpg');
                $url = Storage::url($path);
                $imgUrl = url($url);
                Perpanjangan::create([
                    'id_member' => $id,
                    'aktif' => date('Y-m-d-H:i:s'),
                    'tenggat' => $tenggat,
                    'bukti' =>$imgUrl,
                    'uang' =>$request->uang,
                    'status' =>0
                ]);

                User::where('id',$id)->update([
                    'status' => 1,
                ]);

                return back()->with('success','Pesan Terkirim!');
            }
        } elseif($user->status==2) {
            $waktu = Perpanjangan::where('id_member',$id)->where('status',1)->orderBy('created_at','desc')->first();
            $date = $waktu->tenggat;
            $m = date('m',strtotime($date));
            $d = date('d',strtotime($date));
            $y = date('Y',strtotime($date));

            $nextN = mktime(0, 0, 0, $m, $d + $n, $y);
            $tenggat = date("Y-m-d", $nextN);

            if ($files = $request->file('image')) {
                $path = $files->storeAs('public/images/bukti/', $user->no_id.'.jpg');
                $url = Storage::url($path);
                $imgUrl = url($url);
                Perpanjangan::create([
                    'id_member' => $id,
                    'aktif' => $date,
                    'tenggat' => $tenggat,
                    'bukti' =>$imgUrl,
                    'uang' =>$request->uang,
                    'status' =>0
                ]);

                User::where('id',$id)->update([
                    'status' => 1,
                ]);

                return back()->with('success','Pesan Terkirim!');
            }
        }

    }

    public function updatePassword(Request $request)
    {
        $id = Auth::user()->id;
        $request->validate([
            'password' => 'required|min:8|confirmed',
            'oldPassword' => 'required'
        ]);
        $password = Auth::user()->password;
        if(Hash::check($request->oldPassword, $password)){
            User::where('id',$id)
            ->update([
            'password' => Hash::make($request->password)
            ]);
            return back()->with('success','Password berhasil di ubah!');
        } else {
            return back()->with('danger','Password gagal di ubah!');
        }
    }

    public function addPesan(Request $request)
    {

        $request->validate([
            'nama' => 'required',
            'email' => 'required',
            'subjek' => 'required',
            'pesan' => 'required',
        ]);
        Pesan::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'subjek' => $request->subjek,
            'pesan' => $request->pesan,
        ]);

        return redirect('/#contact')->with('success','Pesan berhasil terkirim!');
    }
}
