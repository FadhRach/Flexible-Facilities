<?php

use App\Http\Controllers\Keluar\KlrController;
use App\Http\Controllers\Peminjaman\DaftarPeminjamanController;
use App\Http\Controllers\Keluar\KibaviewController;
use App\Http\Controllers\Keluar\KibbviewController;
use App\Http\Controllers\Keluar\KibcviewController;
use App\Http\Controllers\Keluar\KibdviewController;
use App\Http\Controllers\Keluar\KibeviewController;
use App\Http\Controllers\Keluar\KibfviewController;
use App\Http\Controllers\Inventaris\InvAController;
use App\Http\Controllers\Inventaris\InvBController;
use App\Http\Controllers\Inventaris\InvCController;
use App\Http\Controllers\Inventaris\InvDController;
use App\Http\Controllers\Inventaris\InvEController;
use App\Http\Controllers\Inventaris\InvFController;
use App\Http\Controllers\Inventaris\InsertController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\Peminjaman\BarangController;
use App\Http\Controllers\Peminjaman\PinjamUserController;
use App\Http\Controllers\Peminjaman\ResponsePeminjamanController;
use App\Http\Controllers\Peminjaman\TempatController;
use App\Http\Controllers\SuperController;
use App\Http\Controllers\UserController;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Route;

// Routes Pengguna + Awal Masuk

Route::get('/', function () {
    return view('landing');
});

Route::middleware(['guest'])->group(function () {
    // Login Routes
    Route::get('/login',[loginController::class, 'index'])->name('login');
    Route::post('/login',[loginController::class, 'login']);
});

Route::middleware(['auth'])->group(function () {





    // RESET MIDDLEWARE JIKA MEMBOBOL URL
    Route::get('/home',[loginController::class,'reset']);

    //logout
    Route::get('/logout',[loginController::class,'logout']);

    //dashboard
    Route::get('/dashboard',[loginController::class,'dashadmin'])->middleware('userAkses:admin');
    Route::get('/dashboardop',[loginController::class,'dashadmin'])->middleware('userAkses:operator');
    Route::get('/dashboarduser',[loginController::class,'dashuser'])->middleware('userAkses:user');
    Route::get('/dashboardsa',[loginController::class,'dashsuperadmin'])->middleware('userAkses:superadmin');

    // Profile Page
    Route::get('/profileadmin/{id}',[UserController::class,'profileadmin'])->middleware('userAkses:admin');
    Route::get('/registrasiakun', [UserController::class,'registrasi'])->middleware('userAkses:admin');
    Route::post('/registrasi/simpan', [UserController::class,'simpanregist'])->middleware('userAkses:admin');

    Route::get('/infouser', [UserController::class,'infouser'])->middleware('userAkses:admin');
    Route::get('/infouser/edit/{id}', [UserController::class,'edit'])->middleware('userAkses:admin');
    Route::put('/profile/edit/action/{id}', [UserController::class, 'profiledit'])->middleware('userAkses:admin');







    // -----------------------------------------------Route SuperAdmin------------------------------------------------ //

    Route::get('/dashboardsa/datainv',[SuperController::class,'inv'])->middleware('userAkses:superadmin');
    Route::get('/dashboardsa/dataklr',[SuperController::class,'klr'])->middleware('userAkses:superadmin');
    Route::get('/dashboardsa/datapnj',[SuperController::class,'pnj'])->middleware('userAkses:superadmin');
    Route::get('/dashboardsa/datauser',[SuperController::class,'user'])->middleware('userAkses:superadmin');

    // -------------------------------------------------------------------------------------------------------- //






    // -----------------------------------------------Route User------------------------------------------------ //

    // Profile User
    Route::get('/profile/{id}',[UserController::class,'profileuser'])->middleware('userAkses:user');
    Route::get('/historypinjam/{id}', [UserController::class,'historypinjam'])->middleware('userAkses:user');


    // Keluar Masuk
    Route::get('/response', [KlrController::class,'dash'])->middleware('userAkses:user');
    Route::get('/response/tolak', [KlrController::class,'dashtlk'])->middleware('userAkses:user');
    Route::get('/response/terima', [KlrController::class,'dashtrm'])->middleware('userAkses:user');
    Route::get('/response/belum', [KlrController::class,'dashblm'])->middleware('userAkses:user');
    Route::get('/response/search', [KlrController::class,'search'])->middleware('userAkses:user');
    // Permohonan
    Route::get('/permohonan', [KlrController::class,'index'])->middleware('userAkses:user');
    Route::post('/permohonan/store', [KlrController::class,'store'])->middleware('userAkses:user');


    // Inventaris
    Route::get('/lihatdata', [InsertController::class,'dash'])->middleware('userAkses:user');
    // Export Barang
    Route::get('/lihatdata/barang', [InsertController::class,'exportbarang'])->middleware('userAkses:user');
    // Export Ruangan
    Route::get('/lihatdata/ruangan', [InsertController::class,'exportruangan'])->middleware('userAkses:user');



    // -------------------------------------------------------------------------------------------------------- //





    // -----------------------------------------------Route Pinjam------------------------------------------------ //


   //Route Aplikasi Pinjam Admin
   Route::get('/pinjamdash',[DaftarPeminjamanController::class,'indexdash'])->middleware('userAkses:admin');
   Route::get('/pinjamdaftarsarpras', [DaftarPeminjamanController::class,'indextempat'])->middleware('userAkses:admin');    
   Route::get('/pinjamdaftarsarpras/edit/{id}', [DaftarPeminjamanController::class, 'edittempat'])->middleware('userAkses:admin');
   Route::put('/pinjamdaftarsarpras/update/{id}', [DaftarPeminjamanController::class, 'updatetempat'])->middleware('userAkses:admin');
   Route::get('/pinjamdaftarsarprasbarang',[DaftarPeminjamanController::class,'indexbarang'])->middleware('userAkses:admin');
   Route::get('/pinjamdaftarsarprasbarang/edit/{id}',[DaftarPeminjamanController::class,'editbarang'])->middleware('userAkses:admin');
   Route::put('/pinjamdaftarsarprasbarang/update/{id}',[DaftarPeminjamanController::class,'updatebarang'])->middleware('userAkses:admin');
   Route::get('/pinjamresponse/sarana', [ResponsePeminjamanController::class,'indexsarana'])->middleware('userAkses:admin');
   Route::get('/pinjamresponse/sarana/diterima/{id}', [ResponsePeminjamanController::class,'saranaterima'])->middleware('userAkses:admin');
   Route::get('/pinjamresponse/sarana/ditolak/{id}', [ResponsePeminjamanController::class,'saranatolak'])->middleware('userAkses:admin');
   Route::get('/pinjamresponse/sarana/edit/{id}', [ResponsePeminjamanController::class,'saranaedit'])->middleware('userAkses:admin');
   Route::put('/pinjamresponse/sarana/update/{id}', [ResponsePeminjamanController::class,'saranaupdate'])->middleware('userAkses:admin');
   Route::get('/pinjamresponse/sarana/delete/{id}', [ResponsePeminjamanController::class,'saranadelete'])->middleware('userAkses:admin');
   Route::get('/pinjamresponse/prasarana', [ResponsePeminjamanController::class,'indexprasarana'])->middleware('userAkses:admin');
   Route::get('/pinjamresponse/prasarana/diterima/{id}', [ResponsePeminjamanController::class,'prasaranaterima'])->middleware('userAkses:admin');
   Route::get('/pinjamresponse/prasarana/ditolak/{id}', [ResponsePeminjamanController::class,'prasaranatolak'])->middleware('userAkses:admin');
   Route::get('/pinjamresponse/prasarana/edit/{id}', [ResponsePeminjamanController::class,'prasaranaedit'])->middleware('userAkses:admin');
   Route::put('/pinjamresponse/prasarana/update/{id}', [ResponsePeminjamanController::class,'prasaranaupdate'])->middleware('userAkses:admin');
   Route::get('/pinjamresponse/prasarana/delete/{id}', [ResponsePeminjamanController::class,'prasaranadelete'])->middleware('userAkses:admin');

   //Route Aplikasi Pinjam User
   Route::get('/pinjamusertempat', [TempatController::class,'index'])->middleware('userAkses:user');
   Route::get('/pinjamuserform/{id}', [TempatController::class,'indexform'])->middleware('userAkses:user');
   Route::post('/pinjamsarana/store', [TempatController::class,'saranasave'])->middleware('userAkses:user');
   Route::get('/pinjamuserbarang', [BarangController::class,'index'])->middleware('userAkses:user');
   Route::get('/pinjamuserbarangform/{id}', [BarangController::class,'indexform'])->middleware('userAkses:user');
   Route::post('/pinjambarang/store', [BarangController::class,'barangsave'])->middleware('userAkses:user');
   Route::get('/suksespinjam', function () { return view('pages/pinjam/user/suksespinjam'); })->middleware('userAkses:user');
   Route::get('/pinjamuser', [PinjamUserController::class,'userdashboard'])->middleware('userAkses:user');
   Route::get('/pinjamusercalendar', [PinjamUserController::class,'usercalendar'])->middleware('userAkses:user');


    // -------------------------------------------------------------------------------------------------------- //





    // -----------------------------------------------Route Keluar------------------------------------------------ //



    // Route Aplikasi Keluar Masuk !!
    //Kroco
    Route::get('/keluarmasukarsip', [KlrController::class,'dashboard'])->middleware('userAkses:admin');
    Route::get('/keluarmasukarsip/form/{id_pengajuan}', [KlrController::class,'form'])->middleware('userAkses:admin');
    Route::put('/keluarmasukarsip/form/action/{id_pengajuan}', [KlrController::class,'action'])->middleware('userAkses:admin');
    Route::get('/keluarmasukarsip/input/{id_pengajuan}', [KlrController::class,'input'])->middleware('userAkses:admin');
    Route::post('/keluarmasukarsip/input/action', [KlrController::class,'inputaction'])->middleware('userAkses:admin');

    // Dashboard KIB View
    Route::get('/keluarmasukdash', [KibaviewController::class,'indexkiba'])->middleware('userAkses:admin');
    Route::get('/kibbviewklr', [KibbviewController::class,'indexkibb'])->middleware('userAkses:admin');
    Route::get('/kibcviewklr', [KibcviewController::class,'indexkibc'])->middleware('userAkses:admin');
    Route::get('/kibdviewklr', [KibdviewController::class,'indexkibd'])->middleware('userAkses:admin');
    Route::get('/kibeviewklr', [KibeviewController::class,'indexkibe'])->middleware('userAkses:admin');
    Route::get('/kibfviewklr', [KibfviewController::class,'indexkibf'])->middleware('userAkses:admin');
    Route::get('/gudangview', [KlrController::class,'indexgudang'])->middleware('userAkses:admin');
    // Keluar Masuk Insert Data
    // Home Page
    Route::get('/insertdataklr', [KlrController::class,'homedata'])->middleware('userAkses:admin');
    // Insert Data Dari Perusahaan
    Route::get('/inputperusahaan', [KlrController::class,'perusahaan'])->middleware('userAkses:admin');
    Route::post('/inputperusahaan/action', [KlrController::class,'gudanginput'])->middleware('userAkses:admin');

    //KIB - A
    Route::get('/kib-a', [KibaviewController::class,'create'])->middleware('userAkses:admin');
    Route::post('/kib-a/store', [KibaviewController::class,'store'])->middleware('userAkses:admin');
    // KIB - B
    Route::get('/kib-b', [KibbviewController::class,'create'])->middleware('userAkses:admin');
    Route::post('/kib-b/store', [KibbviewController::class,'store'])->middleware('userAkses:admin');
    // KIB - C
    Route::get('/kib-c', [KibcviewController::class,'create'])->middleware('userAkses:admin');
    Route::post('/kib-c/store', [KibcviewController::class,'store'])->middleware('userAkses:admin');
    // KIB - D
    Route::get('/kib-d', [KibdviewController::class,'create'])->middleware('userAkses:admin');
    Route::post('/kib-d/store', [KibdviewController::class,'store'])->middleware('userAkses:admin');
    // KIB - E
    Route::get('/kib-e', [KibeviewController::class,'create'])->middleware('userAkses:admin');
    Route::post('/kib-e/store', [KibeviewController::class,'store'])->middleware('userAkses:admin');
    // KIB - f
    Route::get('/kib-f', [KibfviewController::class,'create'])->middleware('userAkses:admin');
    Route::post('/kib-f/store', [KibfviewController::class,'store'])->middleware('userAkses:admin');

    // Delete Section
    //Hapus Data Keluar Masuk
    Route::get('/pemutahirandata', function () {
        return view('pages/keluar/delete/pemutahiran');
    })->middleware('userAkses:admin');
    Route::get('/hapusdata', function () {
        return view('pages/keluar/delete/hapus');
    })->middleware('userAkses:admin');

    // Home view
    Route::get('/deletehome', [KlrController::class,'indexhomedlt'])->middleware('userAkses:admin');

    //KIB A
    // Edit Data Keluar Masuk
    // Index
    Route::get('/keluarmasukbarangkeluar', [KibaviewController::class,'index'])->middleware('userAkses:admin');
    //Pemutahiran
    Route::get('/pemutahirandata/kiba/{id_kib_a}', [KibaviewController::class,'pemutahiran'])->middleware('userAkses:admin');
    Route::put('/pemutahiran/action/kiba/{id_kib_a}', [KibaviewController::class,'update'])->middleware('userAkses:admin');
    //Penghapusan
    Route::get('/kibahapus', [KibaviewController::class,'indexhapus'])->middleware('userAkses:admin');
    Route::get('/truehapus/kiba/{id_kib_a}', [KibaviewController::class,'truehapus'])->middleware('userAkses:admin');
    Route::get('/truehapus/kiba/action/{id_kib_a}', [KibaviewController::class,'delete'])->middleware('userAkses:admin');
    Route::get('/hapusdata/kiba/{id_kib_a}', [KibaviewController::class,'hapusform'])->middleware('userAkses:admin');
    Route::post('/hapusdata/kiba/store', [KibaviewController::class,'hapusstore'])->middleware('userAkses:admin');

    // KIB B
    // Edit Data Keluar Masuk
    // Index
    Route::get('/keluarmasukbarangkibb', [KibbviewController::class,'index'])->middleware('userAkses:admin');
    //Pemutahiran
    Route::get('/pemutahirandata/kibb/{id_barang}', [KibbviewController::class,'pemutahiran'])->middleware('userAkses:admin');
    Route::put('/pemutahiran/action/kibb/{id_barang}', [KibbviewController::class,'update'])->middleware('userAkses:admin');
    //Penghapusan
    Route::get('/kibbhapus', [KibbviewController::class,'indexhapus'])->middleware('userAkses:admin');
    Route::get('/truehapus/kibb/{id_barang}', [KibbviewController::class,'truehapus'])->middleware('userAkses:admin');
    Route::get('/truehapus/kibb/action/{id_barang}', [KibbviewController::class,'delete'])->middleware('userAkses:admin');
    Route::get('/hapusdata/kibb/{id_barang}', [KibbviewController::class,'hapusform'])->middleware('userAkses:admin');
    Route::post('/hapusdata/kibb/store', [KibbviewController::class,'hapusstore'])->middleware('userAkses:admin');

    // KIB C
    // Edit Data KeluarMasuk
    // Index
    Route::get('/keluarmasukbarangkibc', [KibcviewController::class,'index'])->middleware('userAkses:admin');
    // Pemutahiran
    Route::get('/pemutahirandata/kibc/{id_kib_c}', [KibcviewController::class,'pemutahiran'])->middleware('userAkses:admin');
    Route::put('/pemutahiran/action/kibc/{id_kib_c}', [KibcviewController::class,'update'])->middleware('userAkses:admin');
    //Penghapusan
    Route::get('/kibchapus', [KibcviewController::class,'indexhapus'])->middleware('userAkses:admin');
    Route::get('/truehapus/kibc/{id_kib_c}', [KibcviewController::class,'truehapus'])->middleware('userAkses:admin');
    Route::get('/truehapus/kibc/action/{id_kib_c}', [KibcviewController::class,'delete'])->middleware('userAkses:admin');
    Route::get('/hapusdata/kibc/{id_kib_c}', [KibcviewController::class,'hapusform'])->middleware('userAkses:admin');
    Route::post('/hapusdata/kibc/store', [KibcviewController::class,'hapusstore'])->middleware('userAkses:admin');

    // KIB D
    // Edit Data KeluarMasuk
    // Index
    Route::get('/keluarmasukbarangkibd', [KibdviewController::class,'index'])->middleware('userAkses:admin');
    // Pemutahiran
    Route::get('/pemutahirandata/kibd/{id_kib_d}', [KibdviewController::class,'pemutahiran'])->middleware('userAkses:admin');
    Route::put('/pemutahiran/action/kibd/{id_kib_d}', [KibdviewController::class,'update'])->middleware('userAkses:admin');
    //Penghapusan
    Route::get('/kibdhapus', [KibdviewController::class,'indexhapus'])->middleware('userAkses:admin');
    Route::get('/truehapus/kibd/{id_kib_d}', [KibdviewController::class,'truehapus'])->middleware('userAkses:admin');
    Route::get('/truehapus/kibd/action/{id_kib_d}', [KibdviewController::class,'delete'])->middleware('userAkses:admin');
    Route::get('/hapusdata/kibd/{id_kib_d}', [KibdviewController::class,'hapusform'])->middleware('userAkses:admin');
    Route::post('/hapusdata/kibd/store', [KibdviewController::class,'hapusstore'])->middleware('userAkses:admin');

    // KIB E
    // Edit Data KeluarMasuk
    // Index
    Route::get('/keluarmasukbarangkibe', [KibeviewController::class,'index'])->middleware('userAkses:admin');
    // Pemutahiran
    Route::get('/pemutahirandata/kibe/{id_barang}', [KibeviewController::class,'pemutahiran'])->middleware('userAkses:admin');
    Route::put('/pemutahiran/action/kibe/{id_barang}', [KibeviewController::class,'update'])->middleware('userAkses:admin');
    //Penghapusan
    Route::get('/kibehapus', [KibeviewController::class,'indexhapus'])->middleware('userAkses:admin');
    Route::get('/truehapus/kibe/{id_barang}', [KibeviewController::class,'truehapus'])->middleware('userAkses:admin');
    Route::get('/truehapus/kibe/action/{id_barang}', [KibeviewController::class,'delete'])->middleware('userAkses:admin');
    Route::get('/hapusdata/kibe/{id_barang}', [KibeviewController::class,'hapusform'])->middleware('userAkses:admin');
    Route::post('/hapusdata/kibe/store', [KibeviewController::class,'hapusstore'])->middleware('userAkses:admin');

    // KIB F
    // Edit Data KeluarMasuk
    // Index
    Route::get('/keluarmasukbarangkibf', [KibfviewController::class,'index'])->middleware('userAkses:admin');
    // Pemutahiran
    Route::get('/pemutahirandata/kibf/{id_ruangan}', [KibfviewController::class,'pemutahiran'])->middleware('userAkses:admin');
    Route::put('/pemutahiran/action/kibf/{id_ruangan}', [KibfviewController::class,'update'])->middleware('userAkses:admin');
    //Penghapusan
    Route::get('/kibfhapus', [KibfviewController::class,'indexhapus'])->middleware('userAkses:admin');
    Route::get('/truehapus/kibf/{id_ruangan}', [KibfviewController::class,'truehapus'])->middleware('userAkses:admin');
    Route::get('/truehapus/kibf/action/{id_ruangan}', [KibfviewController::class,'delete'])->middleware('userAkses:admin');
    Route::get('/hapusdata/kibf/{id_ruangan}', [KibfviewController::class,'hapusform'])->middleware('userAkses:admin');
    Route::post('/hapusdata/kibf/store', [KibfviewController::class,'hapusstore'])->middleware('userAkses:admin');

    // QR Code Maker
    Route::get('/qrshow', [KlrController::class,'qrcode'])->middleware('userAkses:admin');
    Route::get('/qrshow/download/{nomor_unik}', [KlrController::class,'qrdownload'])->middleware('userAkses:admin');



    // -------------------------------------------------------------------------------------------------------- //





    // -----------------------------------------------Route Inventaris------------------------------------------------ //



    // Route Aplikasi Inventaris Data !!
    // KIB data sarpras

    // KIB A
    Route::get('/inventarisdata', [InvAController::class,'index'])->middleware('userAkses:admin');
    // Edit Data
    Route::get('/kibainv/edit/{id_kib_a}', [InvAController::class,'edit'])->middleware('userAkses:admin');
    Route::put('/kibainv/edit/action/{id_kib_a}', [InvAController::class,'update'])->middleware('userAkses:admin');

    // KIB B
    Route::get('/kibbinv', [InvBController::class,'index'])->middleware('userAkses:admin');
    // Edit Data
    Route::get('/kibbinv/edit/{id_barang}', [InvBController::class,'edit'])->middleware('userAkses:admin');
    Route::put('/kibbinv/edit/action/{id_barang}', [InvBController::class,'update'])->middleware('userAkses:admin');
    // Export Data
    Route::get('/kibbinv/export', [InvBController::class,'export'])->middleware('userAkses:admin');

    //KIB C
    Route::get('/kibcinv', [InvCController::class,'index'])->middleware('userAkses:admin');
    // Edit Data
    Route::get('/kibcinv/edit/{id_kib_c}', [InvCController::class,'edit'])->middleware('userAkses:admin');
    Route::put('/kibcinv/edit/action/{id_kib_c}', [InvCController::class,'update'])->middleware('userAkses:admin');


    // KIB D
    Route::get('/kibdinv', [InvDController::class,'index'])->middleware('userAkses:admin');
    // Edit data
    Route::get('/kibdinv/edit/{id_kib_d}', [InvdController::class,'edit'])->middleware('userAkses:admin');
    Route::put('/kibdinv/edit/action/{id_kib_d}', [InvdController::class,'update'])->middleware('userAkses:admin');

    // KIB F
    Route::get('/kibeinv', [InvEController::class,'index'])->middleware('userAkses:admin');
    Route::get('/kibfinv', [InvFController::class,'index'])->middleware('userAkses:admin');

    // Restore + Delete Data
    // KIB A
    Route::get('/inventarisrestore', [KibaviewController::class,'trash'])->middleware('userAkses:admin');
    Route::get('/restorea/restore/{id_kib_a?}', [KibaviewController::class,'restore'])->middleware('userAkses:admin');
    Route::get('/restorea/delete/{id_kib_a?}', [KibaviewController::class,'deletesoft'])->middleware('userAkses:admin');
    // KIB B
    Route::get('/restoreb', [KibbviewController::class,'trash'])->middleware('userAkses:admin');
    Route::get('/restoreb/restore/{id_barang?}', [KibbviewController::class,'restore'])->middleware('userAkses:admin');
    Route::get('/restoreb/delete/{id_barang?}', [KibbviewController::class,'deletesoft'])->middleware('userAkses:admin');
    // KIB C
    Route::get('/restorec', [KibcviewController::class,'trash'])->middleware('userAkses:admin');
    Route::get('/restorec/restore/{id_kib_c?}', [KibcviewController::class,'restore'])->middleware('userAkses:admin');
    Route::get('/restorec/delete/{id_kib_c?}', [KibcviewController::class,'deletesoft'])->middleware('userAkses:admin');
    // KIB D
    Route::get('/restored', [KibdviewController::class,'trash'])->middleware('userAkses:admin');
    Route::get('/restored/restore/{id_kib_d?}', [KibdviewController::class,'restore'])->middleware('userAkses:admin');
    Route::get('/restored/delete/{id_kib_d?}', [KibdviewController::class,'deletesoft'])->middleware('userAkses:admin');
    // KIB E
    Route::get('/restoree', [KibeviewController::class,'trash'])->middleware('userAkses:admin');
    Route::get('/restoree/restore/{id_barang?}', [KibeviewController::class,'restore'])->middleware('userAkses:admin');
    Route::get('/restoree/delete/{id_barang?}', [KibeviewController::class,'deletesoft'])->middleware('userAkses:admin');
    // KIB F
    Route::get('/restoref', [KibfviewController::class,'trash'])->middleware('userAkses:admin');
    Route::get('/restoref/restore/{id_ruangan?}', [KibfviewController::class,'restore'])->middleware('userAkses:admin');
    Route::get('/restoref/delete/{id_ruangan?}', [KibfviewController::class,'deletesoft'])->middleware('userAkses:admin');

    // Rekap Data
    Route::get('/inventarispemutahiran', [InvAController::class,'rekap'])->middleware('userAkses:admin');

    // Insert Data - Ubah Enum
    Route::get('/insertdata', [InsertController::class,'index'])->middleware('userAkses:admin');
    Route::get('/insertdata/form/{id_barang}', [InsertController::class,'form'])->middleware('userAkses:admin');
    Route::put('/insertdata/form/action/{id_barang}', [InsertController::class,'store'])->middleware('userAkses:admin');

    // Dashboard Routes
    Route::get('/inventarisdash', [InsertController::class,'dashboard']);



    // -------------------------------------------------------------------------------------------------------- //





});







