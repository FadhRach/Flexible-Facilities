<?php

namespace App\Http\Controllers\Inventaris;

use App\Http\Controllers\Controller;
use App\Models\kibdview;
use Illuminate\Http\Request;


class InvDController extends Controller
{
    public function index()
    {
        $kibd = kibdview::orderBy('id_kib_d')->where('disetujui', 'disetujui')->paginate(15);
        return  view("pages.inventaris.kibinv.kibd")->with("kibd", $kibd);
    }

    public function edit($id_kib_d)
    {
        $kibd = kibdview::find($id_kib_d);
        return view("pages.inventaris.edit.kib-d",compact('kibd'));
    }

    public function update($id_kib_d, request $request)
    {
        $kibd = kibdview::find($id_kib_d);
        $kibd->update($request->except(['_token','submit']));
        return redirect('/kibdinv')->with('success', 'Data berhasil Diupdate.');
    }
}
