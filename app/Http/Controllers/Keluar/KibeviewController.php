<?php

namespace App\Http\Controllers\Keluar;

use App\Http\Controllers\Controller;
use App\Models\kibeview;
use App\Models\kibbview;
use App\Models\kibfview;
use App\Models\gudang;
use App\Models\penghapusan;
use App\Models\User;
use Illuminate\Http\Request;

class KibeviewController extends Controller
{
    public function indexkibe()
    {
        $kib_e = kibbview::with('relgudins')->where('inven_brg', 'kib_e')->paginate(15);
        return  view("pages.keluar.viewkib.kibe",compact("kib_e"));
    }


    public function create()
    {
        $relkibf = kibfview::all();
        $relgud = gudang::where('status_gudang', 'belum dikeluarkan')->get();
        return view('pages.keluar.kib.kibe')->with(compact('relkibf', 'relgud'));

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
        return redirect('/kib-e')->with('success', 'Data berhasil disimpan.');
    }



    // Index Keluar KIB

    public function index()
    {
        $kib_e = kibbview::orderBy('id_barang', 'desc')->where('inven_brg', 'kib_e')->paginate(8);
        return  view("pages.keluar.viewdelete.kib_e")->with("kib_e", $kib_e);
    }

    public function indexhapus()
    {
        $kib_e = kibbview::orderBy('id_barang', 'desc')->where('inven_brg', 'kib_e')->paginate(15);
        return  view("pages.keluar.hapusv.kibe", compact('kib_e'));
    }

    // Pemutahiran

    public function pemutahiran($id_barang)
    {
        $relkibf = kibfview::all();
        $relgud = gudang::where('status_gudang', 'belum dikeluarkan')->get();
        $kibb = kibbview::with('relkibf')->find($id_barang);
        return view("pages.keluar.delete.pemutahiran-kibe",compact('kibb', 'relkibf', 'relgud'));
    }

    public function update($id_barang, request $request)
    {
        $kibe = kibeview::find($id_barang);
        $kibe->update($request->except(['_token','submit']));
        return redirect('/kibeviewklr')->with('success', 'Data berhasil Diupdate.');
    }

    // Delete Data

    public function hapusform($id_barang)
    {
        $user = User::all();
        $kibe = kibeview::find($id_barang);
        return view("pages.keluar.delete.hapus-kibe", compact("kibe", "user"));
    }

    public function hapusstore(Request $request)
    {
        penghapusan::create($request->except(["_token","submit"]));
        return back()->with('success', 'Data form berhasil ditambahkan, click button hapus data untuk menghapus.');
    }

    public function truehapus($id_barang)
    {
        $kibe = kibeview::find($id_barang);
        return view("pages.keluar.delete.truehapus-kibe",compact(['kibe']));

    }

    public function delete($id_barang)
    {
        $kibe = kibeview::find($id_barang);
        $kibe->delete();
        return redirect('/keluarmasukdash')->with('successdl', 'Data berhasil Dihapus.');

    }



    // Restore Data
    //Index
    public function trash()
    {
        $kibe = kibeview::onlyTrashed()->where('inven_brg', 'kib_e')->get();
        return view('pages.inventaris.restore.kib-e' , compact('kibe'));
    }
    // Restore
    public function restore($id_barang = null)
    {
        if($id_barang != null)
        {
            $kibe = kibeview::onlyTrashed()
             ->where('id_barang',$id_barang)
             ->restore();
        }
        else
        {
            $kibe = kibeview::onlyTrashed()->restore();
        }

        return redirect('/kibeinv')->with('successres', 'Data berhasil Di Restore.');
    }
    // Delete
    public function deletesoft($id_barang = null)
    {

        if($id_barang != null)
        {
            $kibe = kibeview::onlyTrashed()
             ->where('id_barang',$id_barang)
             ->forceDelete();
        }
        else
        {
            $kibc = kibeview::onlyTrashed()->forceDelete();
        }

        return redirect('/kibeinv')->with('successdel', 'Data berhasil Di Hapus Permanen.');

    }
}
