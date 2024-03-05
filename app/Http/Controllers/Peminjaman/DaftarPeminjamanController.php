<?php

namespace App\Http\Controllers\Peminjaman;

use App\Http\Controllers\Controller;
use App\Models\barang;
use App\Models\kibbview;
use App\Models\kibfview;
use App\Models\pinjam_barang;
use App\Models\pinjam_tempat;
use App\Models\ruangan;
use Illuminate\Http\Request;

class DaftarPeminjamanController extends Controller
{   
    public function indexdash()
    {
        $pinjam_tempat = pinjam_tempat::where('status_acc','diterima')->get();
        $ruangan = kibfview::all();
        return view("pages.pinjam.admin.pinjamdash", compact('pinjam_tempat','ruangan'));
    }
    public function indextempat()
    {
        $ruangan = kibfview::all();
        return view("pages.pinjam.admin.pinjamdaftarsarpras",["ruangan"=> $ruangan]);
    }
    
    public function edittempat($id_ruangan)
    {
        $ruangan = kibfview::find($id_ruangan);
        return view("pages.pinjam.admin.pinjamdaftartempatedit",["ruangan"=> $ruangan]);
    }

    public function updatetempat(Request $request, $id_ruangan)
    {
        $ruangan = kibfview::find($id_ruangan);
        $ruangan->statpinjam = $request->statpinjam;
        $ruangan->save();

        return redirect('/pinjamdaftarsarpras');
    }

    public function indexbarang()
    {
        $barang = kibbview::all();
        $ruangan = kibfview::all();
        return view('pages/pinjam/admin/pinjamdaftarbarang',compact('barang','ruangan'));
    }
    
    public function editbarang($id_barang)
    {
        $barang = kibbview::find($id_barang);
        $ruangan = kibfview::all();
        return view("pages.pinjam.admin.pinjamdaftarbarangedit",compact('barang','ruangan'));
    }

    public function updatebarang(Request $request, $id_barang)
    {
        $barang = kibbview::find($id_barang);
        $barang->status_barang = $request->status_barang;
        $barang->save();

        return redirect('/pinjamdaftarsarprasbarang');
    }
    
}
