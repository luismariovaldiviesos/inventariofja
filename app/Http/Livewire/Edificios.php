<?php

namespace App\Http\Livewire;

use App\Models\Canton;
use App\Models\Edificio;
use Livewire\Component;
use Livewire\WithPagination;

class Edificios extends Component
{

    use WithPagination;

    public $nombre = '', $canton_id, $canton,  $selected_id = 0;
    public $action = 'Listado', $componentName = 'Listado de Edificios', $search, $form = false;
    private $pagination = 10;
    protected $paginationTheme = 'tailwind';


    public function render()
    {
        if(strlen($this->search) > 0)
        $info =  Edificio::join('cantons as c','c.id','edificios.canton_id')
            ->select('edificios.*','c.nombre as canton')
            ->where('edificios.nombre','like',"%{$this->search}%")
            ->orWhere('c.nombre','like',"%{$this->search}%")
            ->paginate($this->pagination);
        else

        $info =  Edificio::join('cantons as c','c.id','edificios.canton_id')
            ->select('edificios.*','c.nombre as canton')
            ->paginate($this->pagination);


    return view('livewire.edificios.component', [
        'edificios' => $info,
        'cantones' => Canton::orderBy('id','asc')->get(),
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
        $this->reset('nombre', 'canton_id', 'selected_id', 'search', 'action', 'componentName', 'form','canton');
    }

    public function Edit(Edificio $edificio)
    {
        $this->selected_id = $edificio->id;
        $this->nombre = $edificio->nombre;
        $this->canton_id =  $edificio->canton_id;
        $this->action = 'Editar';
        $this->form = true;

    }

    public function Store()
    {
        sleep(1);

        $this->validate(Edificio::rules($this->selected_id), Edificio::$messages);

        $edificio = Edificio::updateOrCreate(
            ['id' => $this->selected_id],
            [
                'nombre' => $this->nombre,
                'canton_id' => $this->canton_id
            ]
        );

        // image

        $this->noty($this->selected_id < 1 ? 'Edificio Registrado' : 'Edificio Actualizado', 'noty', false, 'close-modal');
        $this->resetUI();
    }

    public function Destroy(Edificio $edificio)
    {
        $edificio->delete();
        $this->noty('Se eliminó el cantón');
    }

}
