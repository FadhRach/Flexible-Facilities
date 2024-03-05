<?php

namespace App\Http\Controllers\Keluar;

use App\Http\Controllers\Controller;
use App\Models\pengajuan;
use App\Models\kibfview;
use App\Models\kibbview;
use App\Models\perusahaan;
use App\Models\User;
use App\Models\gudang;
use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class KlrController extends Controller
{
    public function index()
    {
        $relpeng = kibbview::all();
        $relpengus = user::all();
        $pengajuan = pengajuan::all();
        return view("pages.keluar.user.permohonan", compact("pengajuan", "relpeng", "relpengus"));
    }

    public function store(Request $request)
    {
        pengajuan::create($request->except(["_token","submit"]));
        return redirect('/permohonan')->with('success', 'Data berhasil diajukan.');
    }

    // Response

    public function dash(Request $request)
    {
        $pengajuan = pengajuan::with('relpeng', 'relpengus')->orderBy('id_pengajuan', 'desc')->paginate(15);
        return  view("pages.keluar.user.dashboard",compact("pengajuan"));
    }

    public function dashblm(Request $request)
    {
        $pengajuan = pengajuan::where('disetujui', 'belum disetujui')->paginate(15);
        return  view("pages.keluar.user.belum",compact("pengajuan"));
    }

    public function dashtlk(Request $request)
    {
        $pengajuan = pengajuan::where('disetujui', 'tidak disetujui')->paginate(15);
        return  view("pages.keluar.user.tolak",compact("pengajuan"));
    }

    public function dashtrm(Request $request)
    {
        $pengajuan = pengajuan::where('disetujui', 'disetujui')->paginate(15);
        return  view("pages.keluar.user.terima",compact("pengajuan"));
    }

    public function search(Request $request)
{
    if ($request->has('search')) {
        $searchTerm = $request->input('search');

        $pengajuan = Pengajuan::with('relpeng', 'relpengus')
            ->whereHas('relpeng', function ($query) use ($searchTerm) {
                $query->where('nama_barang', 'like', "%{$searchTerm}%");
            })
            ->paginate(15);
    } else {
        $pengajuan = Pengajuan::with('relpeng', 'relpengus')->orderBy('id_pengajuan', 'desc')->paginate(15);
    }

    return view("pages.keluar.user.dashboard", compact("pengajuan"));
}

    // Input Data

    public function dashboard()
   {
        $alert = pengajuan::where('disetujui', 'belum disetujui')->get();
        $dash = pengajuan::with('relpeng', 'relpengus')->orderBy('created_at', 'asc')->paginate(15);
        return view("pages.keluar.keluarmasukarsip",compact('dash','alert'));
   }

   public function form($id_pengajuan)
   {
        $peng = pengajuan::find($id_pengajuan);
        return view("pages.keluar.response",compact('peng'));
   }

   public function action($id_pengajuan ,request $request)
   {
        $peng = pengajuan::find($id_pengajuan);
        $peng->update($request->except(['_token','submit']));
        return redirect('/keluarmasukarsip')->with('successfull', 'Data Pengajuan Berhasil Di Verifikasi.');
   }

   public function input($id_pengajuan)
   {
        $relkibf = kibfview::all(); // Pastikan model kibfview sudah diimport di bagian atas file controller
        $peng = pengajuan::find($id_pengajuan);

        return view("pages.keluar.response.form", compact('peng', 'relkibf'));
   }

   public function inputaction(Request $request)
   {
       kibbview::create($request->except(["_token","submit"]));
       return redirect('/keluarmasukarsip')->with('success', 'Data berhasil disimpan + Di Input.');
   }

   public function qrcode()
   {
        $qrc = kibbview::all();
        return view("pages.keluar.qr.qr", compact("qrc"));
   }

   public function qrdownload($nomor_unik)
    {
        // Generate the QR code for the given nomor_unik
        $qrCode = QrCode::format('svg')->style('round')->generate($nomor_unik);

        // Set the appropriate headers for SVG format
        $headers = [
            'Content-Type' => 'image/svg+xml',
            'Content-Disposition' => 'attachment; filename=qrcode.svg',
        ];

        // Return the response with the QR code data
        return kibbview::make($qrCode, 200, $headers);
    }

    // Insert Home Data

    public function homedata()
    {
        return view("pages.keluar.kib.home");
    }

    public function perusahaan()
    {
        $perus = perusahaan::all();
        $per = gudang::with('relgud', 'relperus');
        return view("pages.keluar.kib.perusahaan", compact('per', 'perus'));
    }

    public function gudanginput(Request $request)
    {
        // Mengambil nilai dari input 'nama_barang', 'nomor_unik', dan 'jumlah' pada formulir
        $id_perusahaan = $request->input('id_perusahaan');
        $nama_barang = $request->input('nama_barang');
        $merk_type = $request->input('merk_type');
        $kode_barang = $request->input('kode_barang');
        $kondisi_barang = $request->input('kondisi_barang');
        $harga = $request->input('harga');
        $tanggal_diterima = $request->input('tanggal_diterima');
        $nama_penerima = $request->input('nama_penerima');

        // Menambahkan Setiap jumlah
        $register = (int)$request->input('register');
        $jumlah = $request->input('jumlah');

        // Melakukan perulangan sebanyak nilai 'jumlah' yang diinputkan
        for ($i = 0; $i < $jumlah; $i++) {
            // Membuat instance baru dari model kibbview
            $namaBarang = new gudang();

            // Mengatur nilai atribut sesuai dengan data yang diinputkan
            $namaBarang->nama_barang = $nama_barang;
            $namaBarang->id_perusahaan = $id_perusahaan;
            $namaBarang->merk_type = $merk_type;
            $namaBarang->kode_barang = $kode_barang;
            $namaBarang->harga = $harga;
            $namaBarang->kondisi_barang = $kondisi_barang;
            $namaBarang->tanggal_diterima = $tanggal_diterima;
            $namaBarang->nama_penerima = $nama_penerima;
            $namaBarang->kode_barang = $kode_barang;

            // Mengatur nilai atribut 'nomor_unik' dengan nilai 'nomor_unik' yang ditambah dengan $i
            $namaBarang->register = $register + $i;

            // Menyimpan data ke dalam database menggunakan metode save()
            $namaBarang->save();
        }

        // Mengarahkan pengguna kembali ke halaman sebelumnya dengan pesan keberhasilan
        return redirect('/inputperusahaan')->with('success', 'Data berhasil disimpan.');
    }

    public function indexgudang()
    {
        $gudang = gudang::with('relgud', 'relperus')->where('status_gudang', 'belum dikeluarkan')->paginate(15);
        return  view("pages.keluar.viewkib.gudang",compact("gudang"));
    }

    public function indexhomedlt()
    {
        return  view("pages.keluar.viewkib.deletehome");
    }
}
