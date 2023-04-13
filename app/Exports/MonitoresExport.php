<?php

namespace App\Exports;

use App\Models\Monitor;
use Maatwebsite\Excel\Concerns\FromCollection;

class MonitoresExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Monitor::all();
    }
}
