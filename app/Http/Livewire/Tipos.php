<?php

namespace App\Http\Livewire;

use App\Models\Marca;
use App\Models\MarcaTipo;
use App\Models\Tipo;
use Livewire\Component;
use Livewire\WithPagination;

class Tipos extends Component
{

    use WithPagination;

    public $nombre = '',  $selected_id = 0;
    public $action = 'Listado', $componentName = 'Listado de Tipos', $search, $form = false;
    private $pagination = 10;
    protected $paginationTheme = 'tailwind';

    public function render()
    {
        if (strlen($this->search) > 0)
        $info = Tipo::where('nombre', 'like', "%{$this->search}%")->paginate($this->pagination);
    else
        $info = Tipo::paginate($this->pagination);


    return view('livewire.tipos.component',
        [
            'tipos' => $info,
            'marcas' => Marca::all()
        ])
        ->layout('layouts.theme.app');
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
        $this->reset('nombre', 'selected_id', 'search', 'action', 'componentName', 'form');
    }

    public function Edit(Tipo $tipo)
    {
        $this->selected_id = $tipo->id;
        $this->nombre = $tipo->nombre;
        $this->action = 'Editar';
        $this->form = true;

    }

    public function Store()
    {
        sleep(1);

        $this->validate(Tipo::rules($this->selected_id), Tipo::$messages);

        $tipo = Tipo::updateOrCreate(
            ['id' => $this->selected_id],
            ['nombre' => $this->nombre]
        );



        $this->noty($this->selected_id < 1 ? 'Tipo Registrado' : 'Tipo Actualizado', 'noty', false, 'close-modal');
        $this->resetUI();
    }

    public function Destroy(Tipo $tipo)
    {
        $tipo->delete();
        $this->noty('Se eliminó la Marca');
    }


}
