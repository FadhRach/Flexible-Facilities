<?php

namespace App\Http\Controllers\Inventaris;

use App\Http\Controllers\Controller;
use App\Models\kibcview;
use Illuminate\Http\Request;

class InvCController extends Controller
{
    public function index()
    {
        $kibc = kibcview::orderBy('id_kib_c')->where('disetujui', 'disetujui')->paginate(15);
        return  view("pages.inventaris.kibinv.kibc")->with("kibc", $kibc);
    }

    public function edit($id_kib_c)
    {
        $kibc = kibcview::find($id_kib_c);
        return view("pages.inventaris.edit.kib-c",compact('kibc'));
    }

    public function update($id_kib_c, request $request)
    {
        $kibc = kibcview::find($id_kib_c);
        $kibc->update($request->except(['_token','submit']));
        return redirect('/kibcinv')->with('success', 'Data berhasil Diupdate.');
    }
}
