<?php

namespace App\Exports;

use App\Models\kibbview;
use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\Contracts\View\View;

class UserBarang implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view(): View
    {
        $barang = kibbview::orderBy('id_barang', 'desc')->get();
        return view('components.inv-user-barang', ['barang'=>$barang]);

    }
}
