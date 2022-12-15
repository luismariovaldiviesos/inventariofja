<?php

namespace App\Http\Livewire;

use App\Models\Marca;
use App\Models\Modelo;
use App\Models\Tipo;
use Livewire\Component;
use Livewire\WithPagination;

class Modelos extends Component
{
    use WithPagination;

    public $nombre = '',  $marca_id ="", $tipo_id ="", $selected_id = 0;
    public $marca ='', $tipo='';
    public $action = 'Listado', $componentName = 'Listado de Modelos', $search, $form = false;
    private $pagination = 10;
    protected $paginationTheme = 'tailwind';

    public function render()
    {
        // dd(Tipo::all());
        // dd(Tipo::orderBy('id','asc')->get());

        if (strlen($this->search) > 0)
        $info = Modelo::where('nombre', 'like', "%{$this->search}%")->paginate($this->pagination);
         else
            $info = Modelo::paginate($this->pagination);


        return view('livewire.modelos.component',
        [
            'modelos' => $info,
            'tipos' => Tipo::orderBy('id','asc')->get(),
            'marcas' => Marca::orderBy('id','asc')->get()

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
        $this->reset('nombre','marca_id','marca','tipo','tipo_id', 'selected_id', 'search', 'action', 'componentName', 'form');
    }

    public function Edit(Modelo $modelo)
    {
        //dd($modelo->marca);
        $this->selected_id = $modelo->id;
        $this->nombre = $modelo->nombre;
        $this->marca_id =  $modelo->marca_id;
        $this->tipo_id =  $modelo->tipo_id;
        //dd($this->tipo_id);
        $this->action = 'Editar';
        $this->form = true;



    }

    public function Store()
    {
        sleep(1);

        $this->validate(Modelo::rules($this->selected_id), Modelo::$messages);

       // dd($this->nombre, $this->tipo_id,$this->marca_id);

        $modelo = Modelo::updateOrCreate(
            ['id' => $this->selected_id],
            [
                'nombre' => $this->nombre,
                'tipo_id' => $this->tipo_id,
                'marca_id' => $this->marca_id

            ]
        );



        $this->noty($this->selected_id < 1 ? 'Modelo Registrado' : 'Modelo Actualizado', 'noty', false, 'close-modal');
        $this->resetUI();
    }

    public function Destroy(Modelo $modelo)
    {
        $modelo->delete();
        $this->noty('Se eliminó el modelo');
    }
}
