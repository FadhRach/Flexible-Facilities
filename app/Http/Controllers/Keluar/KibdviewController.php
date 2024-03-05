<?php

namespace App\Http\Controllers\Keluar;

use App\Http\Controllers\Controller;
use App\Models\kibdview;
use App\Models\penghapusan;
use App\Models\User;
use Illuminate\Http\Request;

class KibdviewController extends Controller
{
    public function indexkibd()
    {
        $kib_d = kibdview::orderBy('id_kib_d')->paginate(5);
        return  view("pages.keluar.viewkib.kibd")->with("kib_d", $kib_d);
    }

    public function create()
    {
        return view("pages.keluar.kib.kibd");
    }

    public function store(Request $request)
    {
        kibdview::create($request->except(["_token","submit"]));
        return redirect('/kib-d')->with('success', 'Data berhasil disimpan.');
    }



     // Index Keluar KIB

     public function index()
     {
         $kib_d = kibdview::orderBy('id_kib_d', 'desc')->paginate(5);
         return  view("pages.keluar.viewdelete.kib_d")->with("kib_d", $kib_d);
     }

     public function indexhapus()
    {
        $kib_d = kibdview::orderBy('id_kib_d', 'desc')->paginate(15);
        return  view("pages.keluar.hapusv.kibd", compact('kib_d'));
    }

     // Pemutahiran

     public function pemutahiran($id_kib_d)
     {
         $kibd = kibdview::find($id_kib_d);
         return view("pages.keluar.delete.pemutahiran-kibd",compact(['kibd']));
     }

     public function update($id_kib_d, request $request)
     {
         $kibd = kibdview::find($id_kib_d);
         $kibd->update($request->except(['_token','submit']));
         return redirect('/kibdviewklr')->with('success', 'Data berhasil Diupdate.');
     }

     // Delete Data

     public function hapusform($id_kib_d)
     {
        $user = User::all();
        $kibd = kibdview::find($id_kib_d);
        return view("pages.keluar.delete.hapus-kibd", compact('kibd', 'user'));
     }

     public function hapusstore(Request $request)
     {
         penghapusan::create($request->except(["_token","submit"]));
         return back()->with('success', 'Data form berhasil ditambahkan, click button hapus data untuk menghapus.');
     }

     public function truehapus($id_kib_d)
     {
         $kibd = kibdview::find($id_kib_d);
         return view("pages.keluar.delete.truehapus-kibd",compact(['kibd']));

     }

     public function delete($id_kib_d)
     {
         $kibd = kibdview::find($id_kib_d);
         $kibd->delete();
         return redirect('/keluarmasukdash')->with('successdl', 'Data berhasil Dihapus.');

     }




    // Restore Data
    //Index
    public function trash()
    {
        $kibd = kibdview::onlyTrashed()->get();
        return view('pages.inventaris.restore.kib-d' , compact('kibd'));
    }
    // Restore
    public function restore($id_kib_d = null)
    {
        if($id_kib_d != null)
        {
            $kibd = kibdview::onlyTrashed()
             ->where('id_kib_d',$id_kib_d)
             ->restore();
        }
        else
        {
            $kibd = kibdview::onlyTrashed()->restore();
        }

        return redirect('/kibdinv')->with('successres', 'Data berhasil Di Restore.');
    }
    // Delete
    public function deletesoft($id_kib_d = null)
    {

        if($id_kib_d != null)
        {
            $kibd = kibdview::onlyTrashed()
             ->where('id_kib_d',$id_kib_d)
             ->forceDelete();
        }
        else
        {
            $kibd = kibdview::onlyTrashed()->forceDelete();
        }

        return redirect('/kibdinv')->with('successdel', 'Data berhasil Di Hapus Permanen.');

    }
}
