<?php

namespace App\Http\Controllers\Inventaris;

use App\Http\Controllers\Controller;
use App\Models\kibaview;
use App\Models\kibbview;
use App\Models\kibcview;
use App\Models\kibdview;
use App\Models\kibeview;
use App\Models\kibfview;
use Illuminate\Http\Request;

class InvAController extends Controller
{
    public function index()
    {
        $kiba = kibaview::orderBy('id_kib_a')->where('disetujui', 'disetujui')->paginate(15);
        return  view("pages.inventaris.inventarisdata")->with("kiba", $kiba);
    }

    public function edit($id_kib_a)
    {
        $kiba = kibaview::find($id_kib_a);
        return view("pages.inventaris.edit.kib-a",compact(['kiba']));
    }

    public function update($id_kib_a, request $request)
    {
        $kiba = kibaview::find($id_kib_a);
        $kiba->update($request->except(['_token','submit']));
        return redirect('/inventarisdata')->with('success', 'Data berhasil Diupdate.');
    }





    // Rekaptiluasi
    public function rekap()
    {
        $rekapa = kibaview::where('disetujui', 'disetujui')->paginate(15);
        $rekapb = kibbview::where('inven_brg', 'kib_b')->where('disetujui', 'disetujui')->paginate(15);
        $rekapc = kibcview::where('disetujui', 'disetujui')->paginate(15);
        $rekapd = kibdview::where('disetujui', 'disetujui')->paginate(15);
        $rekape = kibeview::where('inven_brg', 'kib_e')->where('disetujui', 'disetujui')->paginate(15);
        $rekapf = kibfview::where('disetujui', 'disetujui')->paginate(15);

        return view("pages.inventaris.inventarispemutahiran")->with([
            "rekapa" => $rekapa,
            "rekapb" => $rekapb,
            "rekapc" => $rekapc,
            "rekapd" => $rekapd,
            "rekape" => $rekape,
            "rekapf" => $rekapf
        ]);
    }
}
