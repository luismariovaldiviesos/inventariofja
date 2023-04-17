<?php

namespace App\Http\Livewire;

use App\Exports\ImpresorasExport;
use App\Exports\InventarioTotal;
use App\Exports\LaptopsExport;
use App\Exports\MonitoresExport;
use App\Exports\PcsExport;
use App\Exports\RatonesExport;
use App\Exports\ScannersExport;
use App\Exports\TecladosExport;
use App\Exports\TelefonosExport;
use App\Models\Tipo;
use Livewire\Component;
use Maatwebsite\Excel\Facades\Excel;

class ReportsController extends Component
{

    public $tipo_id =0, $tipos;

    public function render()
    {
       //$this->reporteGeneral();
       //dd($da);
        $this->tipos =  Tipo::all();
        return view('livewire.reportes.component')->layout('layouts.theme.app');


    }

    public function reporteGeneral($tipo)
    {
     if($tipo == 1)
     {
        $reportName = 'Reporte de PCs' . uniqid() . '.xlsx';
         return Excel::download(new PcsExport(), $reportName);
     }

     if($tipo == 2)
     {
        $reportName = 'Reporte de laptops' . uniqid() . '.xlsx';
        return Excel::download(new LaptopsExport(), $reportName);
     }
     if($tipo == 3)
     {
        $reportName = 'Reporte de monitores' . uniqid() . '.xlsx';
        return Excel::download(new MonitoresExport(), $reportName);
     }
     if($tipo == 4)
     {
        $reportName = 'Reporte de teclaods' . uniqid() . '.xlsx';
        return Excel::download(new TecladosExport(), $reportName);
     }
     if($tipo == 5)
     {
        $reportName = 'Reporte de mouse' . uniqid() . '.xlsx';
        return Excel::download(new RatonesExport(), $reportName);
     }
     if($tipo == 6)
     {
        $reportName = 'Reporte de impresora' . uniqid() . '.xlsx';
        return Excel::download(new ImpresorasExport(), $reportName);
     }
     if($tipo == 7)
     {
        $reportName = 'Reporte de scanner' . uniqid() . '.xlsx';
        return Excel::download(new ScannersExport(), $reportName);
     }
     if($tipo == 8)
     {
        $reportName = 'Reporte de telefonos' . uniqid() . '.xlsx';
        return Excel::download(new TelefonosExport(), $reportName);
     }


    }

    public function Inventario()
    {

        return (new InventarioTotal)->download('inventarioFJA.xlsx');
    }






}
