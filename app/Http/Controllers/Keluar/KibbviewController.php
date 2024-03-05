<?php

namespace App\Http\Controllers\Keluar;

use App\Http\Controllers\Controller;
use App\Models\gudang;
use App\Models\kibbview;
use App\Models\kibfview;
use App\Models\penghapusan;
use App\Models\User;
use Illuminate\Http\Request;

class KibbviewController extends Controller
{
    public function indexkibb()
    {
        $kib_b = kibbview::with('relgudins')->where('inven_brg', 'kib_b')->paginate(15);
        return  view("pages.keluar.viewkib.kibb",compact("kib_b"));
    }

    public function create()
    {
        $relkibf = kibfview::all();
        $relgud = gudang::where('status_gudang', 'belum dikeluarkan')->get();
        return view('pages.keluar.kib.kibb')->with(compact('relkibf', 'relgud'));

    }


    public function store(Request $request)
    {
        $id_ruangan = $request->input('id_ruangan');
        $nama_barang = $request->input('nama_barang');
        $tahun = $request->input('tahun');
        $nilai = $request->input('nilai');
        $akumulasi = $request->input('akumulasi');
        $keterangan = $request->input('keterangan');
        $inven_brg = $request->input('inven_brg');

        $id_gudang = (int)$request->input('id_gudang');
        $nomor_unik = (int)$request->input('nomor_unik');
        $jumlah = $request->input('jumlah');

        for ($i = 0; $i < $jumlah; $i++) {
            // Membuat instance baru dari model kibbview
            $namaBarang = new kibbview();

            // Mengatur nilai atribut sesuai dengan data yang diinputkan
            $namaBarang->id_ruangan = $id_ruangan;
            $namaBarang->nama_barang = $nama_barang;
            $namaBarang->tahun = $tahun;
            $namaBarang->nilai = $nilai;
            $namaBarang->akumulasi = $akumulasi;
            $namaBarang->keterangan = $keterangan;
            $namaBarang->inven_brg = $inven_brg;

            // Mengatur nilai atribut 'nomor_unik' dan 'id_gudang' dengan nilai yang sesuai
            $namaBarang->nomor_unik = $nomor_unik + $i;
            $namaBarang->id_gudang = $id_gudang + $i;

            // Menyimpan data ke dalam database menggunakan metode save()
            $namaBarang->save();
        }

        // Mengarahkan pengguna kembali ke halaman sebelumnya dengan pesan keberhasilan
        return redirect('/kib-b')->with('success', 'Data berhasil disimpan.');
    }




    // Index Keluar KIB

    public function index()
    {
        $kib_b = kibbview::orderBy('id_barang', 'desc')->where('inven_brg', 'kib_b')->paginate(8);
        return  view("pages.keluar.viewdelete.kib_b")->with("kib_b", $kib_b);
    }

    public function indexhapus()
    {
        $user = User::all();
        $kib_b = kibbview::orderBy('id_barang', 'desc')->where('inven_brg', 'kib_b')->paginate(15);
        return  view("pages.keluar.hapusv.kibb", compact('user', 'kib_b'));
    }

    // Pemutahiran

    public function pemutahiran($id_barang)
    {
        $relkibf = kibfview::all();
        $relgud = gudang::where('status_gudang', 'belum dikeluarkan')->get();
        $kibb = kibbview::with('relkibf')->find($id_barang);
        return view("pages.keluar.delete.pemutahiran-kibb",compact('kibb', 'relkibf', 'relgud'));
    }

    public function update($id_barang, request $request)
    {
        $kibb = kibbview::find($id_barang);
        $kibb->update($request->except(['_token','submit']));
        return redirect('/kibbviewklr')->with('success', 'Data berhasil Diupdate.');
    }

    // Delete Data

    public function hapusform($id_barang)
    {
        $user = User::all();
        $kibb = kibbview::find($id_barang);
        return view("pages.keluar.delete.hapus-kibb", compact("kibb", "user"));
    }

    public function hapusstore(Request $request)
    {
        penghapusan::create($request->except(["_token","submit"]));
        return back()->with('success', 'Data form berhasil ditambahkan, click button hapus data untuk menghapus.');
    }

    public function truehapus($id_barang)
    {
        $kibb = kibbview::find($id_barang);
        return view("pages.keluar.delete.truehapus-kibb",compact(['kibb']));

    }

    public function delete($id_barang)
    {
        $kibb = kibbview::find($id_barang);
        $kibb->delete();
        return redirect('/keluarmasukdash')->with('successdl', 'Data berhasil Dihapus.');

    }




    // Restore Data
    //Index
    public function trash()
    {
        $kibb = kibbview::onlyTrashed()->where('inven_brg', 'kib_b')->get();
        return view('pages.inventaris.restore.kib-b' , compact('kibb'));
    }
    // Restore
    public function restore($id_barang = null)
    {
        if($id_barang != null)
        {
            $kibe = kibbview::onlyTrashed()
             ->where('id_barang',$id_barang)
             ->restore();
        }
        else
        {
            $kibe = kibbview::onlyTrashed()->restore();
        }

        return redirect('/kibbinv')->with('successres', 'Data berhasil Di Restore.');
    }
    // Delete
    public function deletesoft($id_barang = null)
    {

        if($id_barang != null)
        {
            $kibe = kibbview::onlyTrashed()
             ->where('id_barang',$id_barang)
             ->forceDelete();
        }
        else
        {
            $kibc = kibbview::onlyTrashed()->forceDelete();
        }

        return redirect('/kibbinv')->with('successdel', 'Data berhasil Di Hapus Permanen.');

    }
}
