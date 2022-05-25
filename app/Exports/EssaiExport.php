<?php

namespace App\Exports;

use App\Models\Essai;
use Maatwebsite\Excel\Concerns\FromCollection;

class EssaiExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Essai::all();
    }
}