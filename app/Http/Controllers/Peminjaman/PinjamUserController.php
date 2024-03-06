<?php

namespace App\Http\Controllers\Peminjaman;

use App\Http\Controllers\Controller;
use App\Models\kibfview;
use App\Models\pinjam_tempat;
use App\Models\ruangan;
use Illuminate\Http\Request;

class PinjamUserController extends Controller
{
    function userdashboard() {
        $pinjam_tempat = pinjam_tempat::where('status_acc','diterima')->get();
        $ruangan = kibfview::all();
        return view("pages.pinjam.user.userpinjam", compact('pinjam_tempat','ruangan'));
    }

    function usercalendar() {
        $pinjam_tempat = pinjam_tempat::all();
        $ruangan = kibfview::all();
        return view("pages.pinjam.user.usercalendar", compact('pinjam_tempat','ruangan'));
    }
}
