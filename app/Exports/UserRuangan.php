<?php

namespace App\Exports;

use App\Models\kibfview;
use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\Contracts\View\View;

class UserRuangan implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view(): View
    {
        $ruangan = kibfview::orderBy('id_ruangan', 'desc')->get();
        return view('components.inv-user-ruangan', ['ruangan'=>$ruangan]);

    }
}
