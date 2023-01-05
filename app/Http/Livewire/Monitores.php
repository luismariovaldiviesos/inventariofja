<?php

namespace App\Http\Livewire;

use App\Models\Marca;
use App\Models\Monitor;
use App\Models\Tipo;
use App\Models\Unidad;
use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class Monitores extends Component
{
    use WithPagination;

    public $serie, $af, $selected_id = 0;
    public $marca_id, $user_id, $unidad_id;
    public $action = 'Listado', $componentName = 'Listado de Monitores', $search, $form = false;
    private $pagination = 10;
    protected $paginationTheme = 'tailwind';

    public function render()
    {

        if (strlen($this->search) > 0)
        $monitores = Monitor::where('af', 'like', "%{$this->search}%")->paginate($this->pagination);

        else
        $monitores = Monitor::paginate($this->pagination);
        $tipos = Tipo::where('nombre', 'like', "MONITOR")->paginate($this->pagination);
        foreach ($tipos as $tip) {
           $marcas = $tip->marcas;
        }

        return view('livewire.monitores.component',
        [
            'monitores' => $monitores,
            'usuarios' => User::orderBy('id','asc')->get(),
            'unidades' => Unidad::orderBy('id','asc')->get(),
            'marcas' => $marcas
        ]

        )->layout('layouts.theme.app');;
    }

    public $listeners = [
        'resetUI',
        'Destroy'
    ];

    public function updatedForm()
    {
        if($this->selected_id > 0)
            $this->action ='Editar';
        else
            $this->action ='Agregar';

    }

    public function noty($msg, $eventName = 'noty', $reset = true, $action = '')
    {
        $this->dispatchBrowserEvent($eventName, ['msg' => $msg, 'type' => 'success', 'action' => $action]);
        if ($reset) $this->resetUI();
    }

    public function CloseModal()
    {
        $this->resetUI();
        $this->noty(null, 'close-modal');
    }
    public function resetUI()
    {
        // limpiar mensajes rojos de validación
        $this->resetValidation();
        // regresar a la página inicial del componente
        $this->resetPage();
        // regresar propiedades a su valor por defecto
        $this->reset('serie','af','marca_id','user_id','unidad_id', 'selected_id', 'search', 'action', 'componentName', 'form');
    }

    public function Edit(Monitor $monitor)
    {
        $this->selected_id = $monitor->id;
        $this->serie = $monitor->serie;
        $this->af = $monitor->af;
        $this->marca_id = $monitor->marca_id;
        $this->user_id = $monitor->user_id;
        $this->unidad_id = $monitor->unidad_id;
         $this->action = 'Editar';
        $this->form = true;

    }


    public function Store()
    {
        // sleep(1);
         //dd($this->af);
        // $this->validate(Monitor::rules($this->selected_id), Monitor::$messages);

        $monitor = Monitor::updateOrCreate(
            ['id' => $this->selected_id],
            ['serie' => $this->serie],
            ['af' => $this->af],
            ['marca_id,' => $this->marca_id],
            ['user_id,' => $this->user_id],
            ['unidad_id,' => $this->unidad_id]

        );
        $this->noty($this->selected_id < 1 ? 'Monitor  Registrado' : 'Monitor Actualizado', 'noty', false, 'close-modal');
        $this->resetUI();
    }

    public function Destroy(Monitor $monitor)
    {
        $monitor->delete();
        $this->noty('Se eliminó la Marca');
    }
}
