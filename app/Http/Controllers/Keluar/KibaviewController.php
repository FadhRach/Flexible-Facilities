<?php

namespace App\Http\Controllers\Keluar;

use App\Http\Controllers\Controller;
use App\Models\kibaview;
use App\Models\penghapusan;
use App\Models\User;
use Illuminate\Http\Request;

class KibaviewController extends Controller
{
    public function indexkiba()
    {
        $kib_a = kibaview::orderBy('id_kib_a', 'desc')->paginate(15);
        return  view("pages.keluar.keluarmasukdash")->with("kib_a", $kib_a);
    }

    public function create()
    {
        return view("pages.keluar.kib.kiba");
    }

    public function store(Request $request)
    {
        kibaview::create($request->except(["_token","submit"]));
        return redirect('/kib-a')->with('success', 'Data berhasil disimpan.');
    }

    // Index Keluar KIB

    public function index()
    {
        $kib_a = kibaview::orderBy('id_kib_a', 'desc')->paginate(15);
        return  view("pages.keluar.keluarmasukout")->with("kib_a", $kib_a);
    }

    public function indexhapus()
    {
        $user = User::get();
        $kib_a = kibaview::orderBy('id_kib_a', 'desc')->paginate(15);
        return  view("pages.keluar.hapusv.kiba", compact('user', 'kib_a'));
    }

    // Pemutahiran

    public function pemutahiran($id_kib_a)
    {
        $kiba = kibaview::find($id_kib_a);
        return view("pages.keluar.delete.pemutahiran-kiba",compact(['kiba']));
    }

    public function update($id_kib_a, request $request)
    {
        $kiba = kibaview::find($id_kib_a);
        $kiba->update($request->except(['_token','submit']));
        return redirect('/keluarmasukdash')->with('success', 'Data berhasil Diupdate.');
    }

    // Delete Data

    public function hapusform($id_kib_a)
    {
        $user = User::all();
        $kiba = kibaview::find($id_kib_a);
        return view("pages.keluar.delete.hapus-kiba", compact('kiba', 'user'));
    }

    public function hapusstore(Request $request)
    {
        penghapusan::create($request->except(["_token","submit"]));
        return back()->with('success', 'Data form berhasil ditambahkan, click button hapus data untuk menghapus.');
    }

    public function truehapus($id_kib_a)
    {
        $kiba = kibaview::find($id_kib_a);
        return view("pages.keluar.delete.truehapus-kiba",compact(['kiba']));

    }

    public function delete($id_kib_a)
    {
        $kiba = kibaview::find($id_kib_a);
        $kiba->delete();
        return redirect('/keluarmasukdash')->with('successdl', 'Data berhasil Dihapus.');

    }




    // Restore Data
    //Index
    public function trash()
    {
        $kiba = kibaview::onlyTrashed()->get();
        return view('pages.inventaris.restore.kib-a' , compact('kiba'));
    }
    // Restore
    public function restore($id_kib_a = null)
    {
        if($id_kib_a != null)
        {
            $kiba = kibaview::onlyTrashed()
             ->where('id_kib_a',$id_kib_a)
             ->restore();
        }
        else
        {
            $kiba = kibaview::onlyTrashed()->restore();
        }

        return redirect('/inventarisdata')->with('successres', 'Data berhasil Di Restore.');
    }
    // Delete
    public function deletesoft($id_kib_a = null)
    {

        if($id_kib_a != null)
        {
            $kiba = kibaview::onlyTrashed()
             ->where('id_kib_a',$id_kib_a)
             ->forceDelete();
        }
        else
        {
            $kiba = kibaview::onlyTrashed()->forceDelete();
        }

        return redirect('/inventarisdata')->with('successdel', 'Data berhasil Di Hapus Permanen.');

    }

}
