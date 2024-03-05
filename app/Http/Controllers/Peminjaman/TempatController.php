<?php

namespace App\Http\Controllers\Peminjaman;

use App\Http\Controllers\Controller;
use App\Models\pinjam_tempat;
use App\Models\ruangan;
use App\Models\User;
use Illuminate\Http\Request;

class TempatController extends Controller
{
    public function index() {
        $ruangan = ruangan::where("statpinjam","bisa dipinjam")->get();
        return view("pages.pinjam.user.userpinjamsarana", ["ruangan"=> $ruangan]);
    }

    public function indexform($id_ruangan) {
        $ruangan = Ruangan::findOrFail($id_ruangan);
        return view("pages.pinjam.user.pinjamsaranaform", ['id_ruangan' => $id_ruangan, 'ruangan' => $ruangan]);
    }

    public function saranasave(Request $request) {
       pinjam_tempat::create([
           'id_user' => $request->id_user,
           'id_ruangan' => $request->id_ruangan, 
           'time_from' => $request->time_from,
           'time_to' => $request->time_to,
           'deskripsi' => $request->deskripsi,
       ]);
       
       return redirect('/suksespinjam');
    }
     
    
}
