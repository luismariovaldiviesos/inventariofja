<?php

namespace App\Http\Livewire;

use App\Models\Marca;
use App\Models\MarcaTipo;
use App\Models\Tipo;
use Carbon\PHPStan\Macro;
use Livewire\Component;
use Livewire\WithPagination;

class Marcas extends Component
{
    use WithPagination;

    public $nombre = '', $tipo_id ="", $selected_id = 0;
    public $action = 'Listado', $componentName = 'Listado de Marcas', $search, $form = false;
    private $pagination = 10;
    protected $paginationTheme = 'tailwind';


    public function render()
    {


        // $marcas =  Marca::find(3);

        // foreach($marcas->tipos as $tipo)
        // {
        //     dd($tipo->nombre);
        // }
        // dd($marcas->nombre);

        if (strlen($this->search) > 0)
            $info = Marca::where('nombre', 'like', "%{$this->search}%")->paginate($this->pagination);
        else
             $info = Marca::paginate($this->pagination);



    return view('livewire.marcas.component',
        [
            'marcas' => $info,
            'tipos' => Tipo::all()

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
        $this->reset('nombre','tipo_id', 'selected_id', 'search', 'action', 'componentName', 'form');
    }

    public function Edit(Marca $marca)
    {
        $this->selected_id = $marca->id;
        $this->nombre = $marca->nombre;
        $this->action = 'Editar';
        $this->form = true;

    }

    public function Store()
    {
        sleep(1);

        $this->validate(Marca::rules($this->selected_id), Marca::$messages);

        $marca = Marca::updateOrCreate(
            ['id' => $this->selected_id],
            ['nombre' => $this->nombre]
        );

        if($marca)
        {

            MarcaTipo::create([
                'marca_id' =>  $marca->id,
                'tipo_id' =>  $this->tipo_id
            ]);

        }

        $this->noty($this->selected_id < 1 ? 'Marca Registrada' : 'Marca Actualizada', 'noty', false, 'close-modal');
        $this->resetUI();
    }

    public function Destroy(Marca $marca)
    {
        $marca->delete();
        $this->noty('Se eliminó la Marca');
    }
}
