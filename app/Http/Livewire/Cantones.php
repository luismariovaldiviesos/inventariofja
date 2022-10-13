<?php

namespace App\Http\Livewire;

use App\Models\Canton;
use App\Models\Provincia;
use Livewire\Component;
use Livewire\WithPagination;

class Cantones extends Component
{
    use WithPagination;

    public $nombre = '', $provincia_id, $provincia,  $selected_id = 0, $category='elegir';
    public $action = 'Listado', $componentName = 'Listado de cantones', $search, $form = false;
    private $pagination = 10;
    protected $paginationTheme = 'tailwind';

    public function render()
    {
        if(strlen($this->search) > 0)
        $info =  Canton::join('provincias as p','p.id','cantons.provincia_id')
            ->select('cantons.*','p.nombre as provincia')
            ->where('cantons.nombre','like',"%{$this->search}%")
            ->orWhere('p.nombre','like',"%{$this->search}%")
            ->paginate($this->pagination);
        else

        $info =  Canton::join('provincias as p','p.id','cantons.provincia_id')
            ->select('cantons.*','p.nombre as provincia')
            ->paginate($this->pagination);


    return view('livewire.cantones.component', [
        'cantones' => $info,
        'provincias' => Provincia::orderBy('id','asc')->get(),
        //'ivas' => Impuesto::where('nombre','IVA')->get()

    ])->layout('layouts.theme.app');
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
        $this->reset('nombre', 'provincia_id', 'selected_id', 'search', 'action', 'componentName', 'form','provincia');
    }

    public function Edit(Canton $canton)
    {
        $this->selected_id = $canton->id;
        $this->nombre = $canton->nombre;
        $this->provincia_id =  $canton->provincia_id;
        $this->action = 'Editar';
        $this->form = true;

    }

    public function Store()
    {
        sleep(1);

        $this->validate(Canton::rules($this->selected_id), Canton::$messages);

        $canton = Canton::updateOrCreate(
            ['id' => $this->selected_id],
            [
                'nombre' => $this->nombre,
                'provincia_id' => $this->provincia_id
            ]
        );

        // image

        $this->noty($this->selected_id < 1 ? 'Cantón Registrado' : 'Cantón Actualizado', 'noty', false, 'close-modal');
        $this->resetUI();
    }

    public function Destroy(Canton $canton)
    {
        $canton->delete();
        $this->noty('Se eliminó el cantón');
    }

}
