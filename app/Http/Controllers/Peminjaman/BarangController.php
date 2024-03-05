<?php

namespace App\Http\Controllers\Peminjaman;

use App\Http\Controllers\Controller;
use App\Models\barang;
use App\Models\kibbview;
use App\Models\kibfview;
use App\Models\pinjam_barang;
use App\Models\ruangan;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $barang = kibbview::where("status_barang","baik")->get();
        $ruangan = kibfview::all();
        return view("pages.pinjam.user.userpinjambarang", compact("barang","ruangan"));
    }

    public function indexform($id_barang) {
        $barang = kibbview::findOrFail($id_barang);
        $ruangan = kibfview::all();
        return view("pages.pinjam.user.userpinjambarangform", ['id_barang' => $id_barang, 'barang' => $barang, 'ruangan'=> $ruangan]);
    }

    public function barangsave(Request $request) {
        pinjam_barang::create([
            'id_user' => $request->id_user,
            'id_barang' => $request->id_barang, 
            'time_from' => $request->time_from,
            'time_to' => $request->time_to,
            'deskripsi' => $request->deskripsi,
        ]);
        
        return redirect('/suksespinjam');
     }
}
