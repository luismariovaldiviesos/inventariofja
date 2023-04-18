<?php

namespace App\Http\Livewire;

use App\Imports\ImpresoraImport;
use App\Imports\LaptopImport;
use App\Imports\MonitorImport;
use Livewire\Component;
use App\Imports\PcsImport;
use App\Imports\RatonImport;
use App\Imports\ScannerImport;
use App\Imports\TecladoImport;
use App\Imports\TelefonoImport;
use Maatwebsite\Excel\Facades\Excel;
use Livewire\WithFileUploads;

class ImportController extends Component
{
    use WithFileUploads;

    public $action = 'Listado', $componentName = 'Modulo Importar Catálagos', $search, $form = false;

    public $filePcs, $fileLaptops, $fileImpresoras, $fileMonitores, $fileTeclados, $fileratones, $fileTelefonos, $fileScanners;

    public function render()
    {
        return view('livewire.import.component')->layout('layouts.theme.app');
    }

    public function cargaPCS()
    {
        $this->validate([
            'filePcs' => 'required|mimes:xlsx,xls'
        ]);
        Excel::import(new PcsImport, $this->filePcs);
        $this->noty('archivo cargado correctamente');

    }


    public function cargaLaptops()
    {
        $this->validate([
            'fileLaptops' => 'required|mimes:xlsx,xls'
        ]);
        Excel::import(new LaptopImport, $this->fileLaptops);
        $this->noty('archivo cargado correctamente');

    }
    public function cargaImpresoras()
    {

        Excel::import(new ImpresoraImport, $this->fileImpresoras);
        $this->noty('archivo cargado correctamente');

    }


    public function cargaMonitores(){
        Excel::import(new MonitorImport, $this->fileMonitores);
        $this->noty('archivo cargado correctamente');
    }

    public function cargaTeclados(){
        Excel::import(new TecladoImport, $this->fileTeclados);
        $this->noty('archivo cargado correctamente');
    }

    public function cargaRatones(){
        Excel::import(new RatonImport, $this->fileratones);
        $this->noty('archivo cargado correctamente');
    }

    public function cargaTelefonos(){
        Excel::import(new TelefonoImport, $this->fileTelefonos);
        $this->noty('archivo cargado correctamente');
    }

    public function cargaScanners()
    {
        Excel::import(new ScannerImport, $this->fileScanners);
        $this->noty('archivo cargado correctamente');
    }














    public function noty($msg, $eventName = 'noty', $reset = true, $action = '')
    {
        $this->dispatchBrowserEvent($eventName, ['msg' => $msg, 'type' => 'success', 'action' => $action]);
        if ($reset) $this->resetUI();
    }

    public function resetUI()
    {
        // limpiar mensajes rojos de validación
        $this->resetValidation();
        // regresar propiedades a su valor por defecto
        $this->reset('filePcs');
    }



}
