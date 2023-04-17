<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;
use Maatwebsite\Excel\Sheet;

class InventarioTotal implements WithMultipleSheets
{
    /**
    * @return \Illuminate\Support\Collection
    */

    use Exportable;
    public function sheets(): array
    {
        $sheets = [];

        return $sheets;
    }
}
