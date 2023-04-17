<?php

namespace App\Exports;

use App\Exports\inventario\ImpresoraExportInventario;
use App\Exports\inventario\LaptopexportInventario;
use App\Exports\inventario\MonitorexportInventario;
use App\Exports\inventario\PCExportInventario;
use App\Exports\inventario\RatonExportInventario;
use App\Exports\inventario\ScannerExportInventario;
use App\Exports\inventario\TecladoExportInventario;
use App\Exports\inventario\TelefonoExportInventario;
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
        for ($i = 1; $i <= 8; $i++) {
            $sheets[1] =  new PCExportInventario();
            $sheets[2] =  new LaptopexportInventario();
            $sheets[3] =  new MonitorexportInventario();
            $sheets[4] =  new TecladoExportInventario();
            $sheets[5] =  new RatonExportInventario();
            $sheets[6] =  new TelefonoExportInventario();
            $sheets[7] =  new ScannerExportInventario();
            $sheets[8] =  new ImpresoraExportInventario();
        }

        return $sheets;
    }
}
