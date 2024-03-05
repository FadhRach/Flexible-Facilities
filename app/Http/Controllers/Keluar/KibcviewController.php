<?php

namespace App\Http\Controllers\Keluar;

use App\Http\Controllers\Controller;
use App\Models\kibcview;
use App\Models\penghapusan;
use App\Models\User;
use Illuminate\Http\Request;

class KibcviewController extends Controller
{
    public function indexkibc()
    {
        $kib_c = kibcview::orderBy('id_kib_c')->paginate(15);
        return  view("pages.keluar.viewkib.kibc")->with("kib_c", $kib_c);
    }

    public function create()
    {
        return view("pages.keluar.kib.kibc");
    }

    public function store(Request $request)
    {
        kibcview::create($request->except(["_token","submit"]));
        return redirect('/kib-c')->with('success', 'Data berhasil disimpan.');
    }

    // Index Keluar KIB

    public function index()
    {
        $kib_c = kibcview::orderBy('id_kib_c', 'desc')->paginate(15);
        return  view("pages.keluar.viewdelete.kib_c")->with("kib_c", $kib_c);
    }

    public function indexhapus()
    {
        $kib_c = kibcview::orderBy('id_kib_c', 'desc')->paginate(15);
        return  view("pages.keluar.hapusv.kibc", compact('kib_c'));
    }

    // Pemutahiran

    public function pemutahiran($id_kib_c)
    {
        $kibc = kibcview::find($id_kib_c);
        return view("pages.keluar.delete.pemutahiran-kibc",compact(['kibc']));
    }

    public function update($id_kib_c, request $request)
    {
        $kibc = kibcview::find($id_kib_c);
        $kibc->update($request->except(['_token','submit']));
        return redirect('/kibcviewklr')->with('success', 'Data berhasil Diupdate.');
    }

    // Delete Data

    public function hapusform($id_kib_c)
    {
        $user = User::all();
        $kibc = kibcview::find($id_kib_c);
        return view("pages.keluar.delete.hapus-kibc", compact('kibc', 'user'));
    }

    public function hapusstore(Request $request)
    {
        penghapusan::create($request->except(["_token","submit"]));
        return back()->with('success', 'Data form berhasil ditambahkan, click button hapus data untuk menghapus.');
    }

    public function truehapus($id_kib_c)
    {
        $kibc = kibcview::find($id_kib_c);
        return view("pages.keluar.delete.truehapus-kibc",compact(['kibc']));

    }

    public function delete($id_kib_c)
    {
        $kibc = kibcview::find($id_kib_c);
        $kibc->delete();
        return redirect('/keluarmasukdash')->with('successdl', 'Data berhasil Dihapus.');

    }





    // Restore Data
    //Index
    public function trash()
    {
        $kibc = kibcview::onlyTrashed()->get();
        return view('pages.inventaris.restore.kib-c' , compact('kibc'));
    }
    // Restore
    public function restore($id_kib_c = null)
    {
        if($id_kib_c != null)
        {
            $kibc = kibcview::onlyTrashed()
             ->where('id_kib_c',$id_kib_c)
             ->restore();
        }
        else
        {
            $kibc = kibcview::onlyTrashed()->restore();
        }

        return redirect('/kibcinv')->with('successres', 'Data berhasil Di Restore.');
    }
    // Delete
    public function deletesoft($id_kib_c = null)
    {

        if($id_kib_c != null)
        {
            $kibc = kibcview::onlyTrashed()
             ->where('id_kib_c',$id_kib_c)
             ->forceDelete();
        }
        else
        {
            $kibc = kibcview::onlyTrashed()->forceDelete();
        }

        return redirect('/kibcinv')->with('successdel', 'Data berhasil Di Hapus Permanen.');

    }


}
