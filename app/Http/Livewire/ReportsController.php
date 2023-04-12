<?php

namespace App\Http\Livewire;

use App\Exports\PcsExport;
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
        dd("laptopas");
     }
     if($tipo == 3)
     {
        dd("monitor");
     }
     if($tipo == 4)
     {
        dd("teclado");
     }
     if($tipo == 5)
     {
        dd("mosue");
     }
     if($tipo == 6)
     {
        dd("impresora");
     }
     if($tipo == 7)
     {
        dd("scanner");
     }
     if($tipo == 8)
     {
        dd("telefono");
     }


    }






}
