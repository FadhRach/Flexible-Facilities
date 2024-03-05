<?php

namespace App\Http\Controllers\Inventaris;

use App\Http\Controllers\Controller;
use App\Models\kibeview;
use Illuminate\Http\Request;


class InvEController extends Controller
{
    public function index()
    {
        $kibe = kibeview::where('inven_brg', 'kib_e')->where('disetujui', 'disetujui')->paginate(15);
        return  view("pages.inventaris.kibinv.kibe")->with("kibe", $kibe);
    }
}
