<?php

namespace App\Http\Controllers\Inventaris;

use App\Exports\ExportKibB;
use App\Http\Controllers\Controller;
use App\Models\kibbview;
use App\Models\kibfview;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;


class InvBController extends Controller
{
    public function index()
    {
        $kibb = kibbview::where('inven_brg', 'kib_b')->where('disetujui', 'disetujui')->paginate(10);
        return  view("pages.inventaris.kibinv.kibb")->with("kibb", $kibb);
    }

    public function edit($id_barang)
    {
        $relkibf = kibfview::all();
        $kibb = kibbview::with('relkibf')->find($id_barang);
        return view("pages.inventaris.edit.kib-b",compact('kibb', 'relkibf'));
    }

    public function update($id_barang, request $request)
    {
        $kibb = kibbview::find($id_barang);
        $kibb->update($request->except(['_token','submit']));
        return redirect('/kibbinv')->with('success', 'Data berhasil Diupdate.');
    }

    public function export()
    {
        return Excel::download(new ExportKibB, "data-kib-b.xlsx");
    }


}
