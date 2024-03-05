<?php

namespace App\Http\Controllers\Inventaris;

use App\Http\Controllers\Controller;
use App\Models\kibfview;
use Illuminate\Http\Request;


class InvFController extends Controller
{
    public function index()
    {
        $kibf = kibfview::orderBy('id_ruangan')->where('disetujui', 'disetujui')->paginate(15);
        return  view("pages.inventaris.kibinv.kibf")->with("kibf", $kibf);
    }
}
