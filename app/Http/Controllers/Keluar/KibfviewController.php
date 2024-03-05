<?php

namespace App\Http\Controllers\Keluar;

use App\Http\Controllers\Controller;
use App\Models\kibfview;
use App\Models\penghapusan;
use App\Models\User;
use Illuminate\Http\Request;

class KibfviewController extends Controller
{
    public function indexkibf()
    {
        $kib_f = kibfview::orderBy('id_ruangan')->paginate(5);
        return  view("pages.keluar.viewkib.kibf")->with("kib_f", $kib_f);
    }

    public function create()
    {
        return view("pages.keluar.kib.kibf");
    }

    public function store(Request $request)
    {
        $request->validate([
            'kode_ruangan' => 'required',
            'nama_ruangan' => 'required',
            'statpinjam' => 'required',
            'foto_ruang' => 'image|mimes:jpeg,png,jpg,gif|max:10240', // Max 10MB
        ]);

        $ruangan = new kibfview;
        $ruangan->kode_ruangan = $request->kode_ruangan;
        $ruangan->nama_ruangan = $request->nama_ruangan;
        $ruangan->statpinjam = $request->statpinjam;

        if ($request->hasFile('foto_ruang')) {
            $foto = $request->file('foto_ruang');
            $filename = time() . '_' . $foto->getClientOriginalName();
            $foto->move(public_path('image'), $filename);
            $ruangan->foto_ruang = $filename;
        }

        $ruangan->save();

        return redirect('/kib-f')->with('success', 'Data berhasil disimpan.');
    }



    // Index Keluar KIB

    public function index()
    {
        $kib_f = kibfview::orderBy('id_ruangan')->paginate(10);
        return  view("pages.keluar.viewdelete.kib_f")->with("kib_f", $kib_f);
    }

    public function indexhapus()
    {
        $kib_f = kibfview::orderBy('id_ruangan', 'desc')->paginate(15);
        return  view("pages.keluar.hapusv.kibf", compact('kib_f'));
    }

    // Pemutahiran

    public function pemutahiran($id_ruangan)
    {
        $kibf = kibfview::find($id_ruangan);
        return view("pages.keluar.delete.pemutahiran-kibf",compact(['kibf']));
    }

    public function update($id_ruangan, request $request)
    {
        $kibf = kibfview::find($id_ruangan);
        $kibf->update($request->except(['_token','submit']));
        return redirect('/kibfviewklr')->with('success', 'Data berhasil Diupdate.');
    }

    // Delete Data

    public function hapusform($id_ruangan)
    {
        $user = User::all();
        $kibf = kibfview::find($id_ruangan);
        return view("pages.keluar.delete.hapus-kibf", compact("kibf", "user"));
    }

    public function hapusstore(Request $request)
    {
        penghapusan::create($request->except(["_token","submit"]));
        return back()->with('success', 'Data form berhasil ditambahkan, click button hapus data untuk menghapus.');
    }

    public function truehapus($id_ruangan)
    {
        $kibf = kibfview::find($id_ruangan);
        return view("pages.keluar.delete.truehapus-kibf",compact(['kibf']));

    }

    public function delete($id_ruangan)
    {
        $kibf = kibfview::find($id_ruangan);
        $kibf->delete();
        return redirect('/keluarmasukdash')->with('successdl', 'Data berhasil Dihapus.');

    }




    // Restore Data
    //Index
    public function trash()
    {
        $kibf = kibfview::onlyTrashed()->get();
        return view('pages.inventaris.restore.kib-f' , compact('kibf'));
    }
    // Restore
    public function restore($id_ruangan = null)
    {
        if($id_ruangan != null)
        {
            $kibf = kibfview::onlyTrashed()
             ->where('id_ruangan',$id_ruangan)
             ->restore();
        }
        else
        {
            $kibf = kibfview::onlyTrashed()->restore();
        }

        return redirect('/kibfinv')->with('successres', 'Data berhasil Di Restore.');
    }
    // Delete
    public function deletesoft($id_ruangan = null)
    {

        if($id_ruangan != null)
        {
            $kibf = kibfview::onlyTrashed()
             ->where('id_ruangan',$id_ruangan)
             ->forceDelete();
        }
        else
        {
            $kibf = kibfview::onlyTrashed()->forceDelete();
        }

        return redirect('/kibfinv')->with('successdel', 'Data berhasil Di Hapus Permanen.');

    }
}
