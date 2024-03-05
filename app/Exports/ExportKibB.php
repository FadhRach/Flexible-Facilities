<?php

namespace App\Exports;

use App\Models\kibbview;
use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\Contracts\View\View;

class ExportKibB implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view(): View
    {
        $kibb = kibbview::where('inven_brg', 'kib_b')->where('disetujui', 'disetujui')->get();
        return view('components.export-kibb', ['kibb'=>$kibb]);

    }
}
