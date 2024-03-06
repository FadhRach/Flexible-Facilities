<?php

namespace App\Http\Controllers\Peminjaman;

use App\Http\Controllers\Controller;
use App\Models\barang;
use App\Models\kibbview;
use App\Models\kibfview;
use App\Models\pinjam_barang;
use App\Models\pinjam_tempat;
use App\Models\ruangan;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ResponsePeminjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function indexsarana()
    {   
        $pinjam_tempat = pinjam_tempat::all();
        $user = User::all();
        $ruangan = kibfview::all();

        return view("pages.pinjam.admin.pinjamresponsetempat", compact("pinjam_tempat","user","ruangan"));
    }

    public function saranaterima($id_pinjamtempat) {
        $pinjamtempat = pinjam_tempat::findOrFail($id_pinjamtempat);
        $pinjamtempat->status_acc = 'diterima';
        $pinjamtempat->save();

        return redirect('/pinjamresponse/sarana');
    }

    public function saranatolak($id_pinjamtempat) {
        $pinjamtempat = pinjam_tempat::findOrFail($id_pinjamtempat);        
        $pinjamtempat->status_acc = 'ditolak';
        $pinjamtempat->save();

        return redirect('/pinjamresponse/sarana');
    }

    public function saranaedit($id_pinjamtempat) {
        $pinjam_tempat = pinjam_tempat::findOrFail($id_pinjamtempat);
        $users = User::all();
        $ruangan = kibfview::all();

        return view("pages.pinjam.admin.pinjamresponsetempatedit", compact("pinjam_tempat","users","ruangan"));
    }    

    public function saranaupdate(request $request,$id_pinjamtempat) {

        $pinjamtempat = pinjam_tempat::findOrFail($id_pinjamtempat);
        $pinjamtempat->time_from = $request->time_from;
        $pinjamtempat->time_to = $request->time_to;
        $pinjamtempat->save();

        return redirect('/pinjamresponse/sarana');
    }

    public function saranadelete($id_pinjamtempat) {
        $pinjamtempat = pinjam_tempat::findOrFail($id_pinjamtempat);
        $pinjamtempat->delete();

        return redirect('/pinjamresponse/sarana');
    }

    //PRASARANA SESSION
    public function indexprasarana()
    {
        $pinjam_barang = pinjam_barang::all();
        $user = User::all();
        $barang = kibbview::all();
        $ruangan = kibfview::all();
        
        return view("pages.pinjam.admin.pinjamresponsebarang", compact("pinjam_barang","user","barang"));
    }

    public function prasaranaterima($id_pinjambarang) {
        $pinjamtempat = pinjam_barang::findOrFail($id_pinjambarang);        
        $pinjamtempat->status_acc = 'diterima';
        $pinjamtempat->save();

        return redirect('/pinjamresponse/prasarana');
    }
    
     
    public function prasaranatolak($id_pinjambarang) {
        $pinjambarang = pinjam_barang::findOrFail($id_pinjambarang);        
        $pinjambarang->status_acc = 'ditolak';
        $pinjambarang->save();
        return redirect('/pinjamresponse/prasarana');
    }

    public function prasaranaedit($id_pinjambarang) {
        $pinjam_barang = pinjam_barang::findOrFail($id_pinjambarang);
        $users = User::all();
        $ruangan = kibfview::all();
        $barang = kibfview::all();

        return view("pages.pinjam.admin.pinjamresponsebarangedit", compact("pinjam_barang","users","ruangan","barang"));
    }    

    public function prasaranaupdate(request $request,$id_pinjambarang) {

        $pinjambarang = pinjam_barang::findOrFail($id_pinjambarang);
        $pinjambarang->time_from = $request->time_from;
        $pinjambarang->time_to = $request->time_to;
        $pinjambarang->save();

        return redirect('/pinjamresponse/prasarana');
    }

    public function prasaranadelete($id_pinjambarang) {
        $pinjambarang = pinjam_barang::findOrFail($id_pinjambarang);
        $pinjambarang->delete();

        return redirect('/pinjamresponse/prasarana');
    }
    
}
