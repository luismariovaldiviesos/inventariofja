<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Imports\PcsImport;
use Maatwebsite\Excel\Facades\Excel;
use Livewire\WithFileUploads;

class ImportController extends Component
{
    use WithFileUploads;

    public $action = 'Listado', $componentName = 'Modulo Importar Catálagos', $search, $form = false;

    public $filePcs;

    public function render()
    {
        return view('livewire.import.component')->layout('layouts.theme.app');;
    }

    public function cargaPCS()
    {
        $this->validate([
            'filePcs' => 'required|mimes:xlsx,xls'
        ]);
        Excel::import(new PcsImport, $this->filePcs);
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
