<?php

namespace App\Http\Controllers\Inventaris;

use App\Exports\UserBarang;
use App\Exports\UserRuangan;
use App\Http\Controllers\Controller;
use App\Models\kibbview;
use App\Models\kibfview;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class InsertController extends Controller
{
   public function index()
   {
        $kib_b = kibbview::orderBy('id_barang', 'desc')->where('disetujui', 'belum disetujui')->paginate(15);
        return view("pages.inventaris.inventarisinsert")->with("kib_b", $kib_b);
   }

   public function form($id_barang)
   {
        $kibb = kibbview::find($id_barang);
        return view("pages.inventaris.insertdata",compact('kibb'));
   }

   public function store($id_barang ,request $request)
   {
        $kibb = kibbview::find($id_barang);
        $kibb->update($request->except(['_token','submit']));
        return redirect('/insertdata')->with('success', 'Data berhasil Di Verifikasi.');
   }

   public function dashboard()
   {
        $alert = kibbview::where('disetujui', 'belum disetujui')->get();
        $dash = kibbview::orderBy('created_at', 'asc')->paginate(15);
        return view("pages.inventaris.inventarisdash",compact('dash','alert'));
   }

   public function dash()
   {
        $barang = kibbview::orderBy('id_barang', 'desc')->paginate(15);
        $ruangan = kibfview::orderBy('id_ruangan', 'desc')->paginate(15);
        return view('pages.inventaris.user.dash',compact('barang','ruangan'));
   }

   public function exportbarang()
    {
        return Excel::download(new UserBarang, "data-barang.xlsx");
    }

    public function exportruangan()
    {
        return Excel::download(new UserRuangan, "data-ruagan.xlsx");
    }

}
