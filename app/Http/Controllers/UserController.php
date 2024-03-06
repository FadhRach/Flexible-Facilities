<?php

namespace App\Http\Controllers;

use App\Models\kibbview;
use App\Models\kibfview;
use App\Models\pinjam_barang;
use App\Models\pinjam_tempat;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    function profileadmin ($id)
    {
        $userid = auth()->user();
        $user = User::where('id_user',$userid->id_user)->get();
        return view("pages.admin.profile",["user"=> $user]);

    }

    function profileuser ($id)
    {
        $userid = auth()->user();
        $user = User::where('id_user',$userid->id_user)->get();
        return view("pages.user.profile",["user"=> $user]);

    }

    function registrasi()
    {
        return view("pages.admin.registrasi");
    }

    function simpanregist(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'role' => ['required', function ($attribute, $value, $fail) {
                if ($value !== 'user' && $value !== 'admin' && $value !== 'operator' && $value !== 'superadmin') {
                    $fail('Role harus admin atau user');
                }
            }],
            'jabatan' => 'required',
            'profile_image' => 'required',
        ],[
           'name.required' => 'Nama Tempat Harus Diisi',
           'email.required' => 'Email Tempat Harus Diisi',
           'password'=> 'Password harus diisi',
           'role.required' => 'Role Harus Diisi',
           'jabatan.required' => 'Jabatan Tempat Harus Diisi',
           'profile_image'=> 'Gambar harus diisi',
        ]);

       $file = $request->file('profile_image');
       $profile_image = time() . "_" . $file->getClientOriginalName();
       $tujuanupload = 'image';
       $file->move($tujuanupload, $profile_image);

       User::create([
           'name' => $request->name,
           'email' => $request->email,
           'password' => $request->password,
           'role'=> $request->role,
           'jabatan'=> $request->jabatan,
           'profile_image' => $profile_image,
       ]);

       return redirect('/profileadmin/' . Auth::user()->id_user);
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);

        return view('pages.admin.edit', compact('user'));
    }

    function profiledit($id, Request $request)
    {
        $user = User::findOrFail($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->jabatan = $request->jabatan;
        $user->profile_image = $request->profile_image;
        if ($request->hasFile('profile_image')) {
            $file = $request->file('profile_image');
            $profile_image = time() . "_" . $file->getClientOriginalName();
            $tujuanupload = 'image';
            $file->move($tujuanupload, $profile_image);
            $user->profile_image = $profile_image;
        }
        $user->save();

        return redirect('/profileadmin/' . Auth::user()->id_user);
    }

    function infouser() {
        $user = User::orderBy('created_at', 'desc')->get();
        return view("pages.admin.infouser",["user"=> $user]);
    }

    public function historypinjam($id_user)
    {   
        $pinjam_tempat = pinjam_tempat::where('id_user', $id_user)->get();
        $pinjam_barang = pinjam_barang::where('id_user', $id_user)->get();
        $ruangan = kibfview::all();
        $barang = kibbview::all();
        $user = User::all();
        return view("pages.pinjam.user.historypinjam", compact('pinjam_tempat', 'pinjam_barang','barang', 'ruangan', 'user'));
    }
}
