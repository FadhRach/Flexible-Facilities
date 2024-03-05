<?php

namespace App\Http\Controllers;


use App\Models\penghapusan;
use App\Models\User;
use App\Models\gudang;
use Illuminate\Http\Request;

use App\Models\kibaview;
use App\Models\kibbview;
use App\Models\kibcview;
use App\Models\kibdview;
use App\Models\kibeview;
use App\Models\kibfview;

use View;


class SuperController extends Controller
{
    public function inv()
    {

        $rekapa = kibaview::where('disetujui', 'disetujui')->paginate(15);
        $rekapb = kibbview::where('inven_brg', 'kib_b')->where('disetujui', 'disetujui')->paginate(15);
        $rekapc = kibcview::where('disetujui', 'disetujui')->paginate(15);
        $rekapd = kibdview::where('disetujui', 'disetujui')->paginate(15);
        $rekape = kibbview::where('inven_brg', 'kib_e')->where('disetujui', 'disetujui')->paginate(15);
        $rekapf = kibfview::where('disetujui', 'disetujui')->paginate(15);

        return view("pages.superadmin.inv")->with([
            "rekapa" => $rekapa,
            "rekapb" => $rekapb,
            "rekapc" => $rekapc,
            "rekapd" => $rekapd,
            "rekape" => $rekape,
            "rekapf" => $rekapf
        ]);

    }

    public function klr(Request $request)
    {

        $keluar = kibbview::orderBy('created_at', 'desc')->paginate(15);
        $masuk = penghapusan::orderBy('created_at', 'desc')->where('kib_barang', 'kib_b')->orwhere('kib_barang', 'kib_e')->paginate(15);
        $keyword = $request->input('keyword');
        $results = Gudang::search($keyword)->get();

        return view('pages.superadmin.klr', compact('results', 'keyword', 'keluar', 'masuk'));
    }

    public function pnj()
    {

    }

    public function user()
    {
        $user = User::orderBy('created_at', 'desc')->get();
        return view("pages.superadmin.infouser",["user"=> $user]);
    }

}
