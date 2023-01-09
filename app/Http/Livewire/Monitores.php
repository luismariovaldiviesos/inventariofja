<?php

namespace App\Http\Livewire;

use App\Models\Marca;
use App\Models\Monitor;
use App\Models\Tipo;
use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;


class Monitores extends Component
{

    use WithPagination;

    public $serie = '', $af='', $marca_id, $user_id,  $selected_id = 0;
    public $action = 'Listado', $componentName = 'Listado de Monitores', $search, $form = false;
    private $pagination = 10;
    protected $paginationTheme = 'tailwind';

    public function render()
    {
        $tip =  Tipo::where('nombre','=','MONITOR')->get();
        foreach($tip as $t)
        {
            //dd($t->id);
             $marcas = Tipo::find($t->id)->marcas()->orderBy('nombre')->get();
        }

        if(strlen($this->search) > 0)
        $info =  Monitor::join('users as u','u.id','monitors.user_id')
            ->select('monitors.*','u.name as usuario')
            ->where('monitors.af','like',"%{$this->search}%")
            ->orWhere('u.name','like',"%{$this->search}%")
            ->paginate($this->pagination);
        else

        $info =  Monitor::join('users as u','u.id','monitors.user_id')
        ->select('monitors.*','u.name as usuario')
            ->paginate($this->pagination);


        return view('livewire.monitores.component', [
        'monitores' => $info,
        'usuarios' => User::orderBy('id','asc')->get(),
        'marcas' => $marcas

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
        $this->reset('serie','af', 'marca_id','user_id', 'selected_id', 'search', 'action', 'componentName', 'form');
    }

    public function Edit(Monitor $monitor)
    {
        $this->selected_id = $monitor->id;
        $this->serie = $monitor->serie;
        $this->af = $monitor->af;
        $this->marca_id =  $monitor->marca_id;
        $this->user_id =  $monitor->user_id;
        $this->action = 'Editar';
        $this->form = true;

    }

    public function Store()
    {
        sleep(1);

        $this->validate(Monitor::rules($this->selected_id), Monitor::$messages);

        $monitor = Monitor::updateOrCreate(
            ['id' => $this->selected_id],
            [
                'serie' => $this->serie,
                'af' => $this->af,
                'marca_id' => $this->marca_id,
                'user_id' => $this->user_id,
            ]
        );

        // image

        $this->noty($this->selected_id < 1 ? 'Monitor Registrado' : 'Monitor Actualizado', 'noty', false, 'close-modal');
        $this->resetUI();
    }

    public function Destroy(Monitor $monitor)
    {
        if($monitor->usuario !=  null)
        {
            $monitor->delete();
            $this->noty('Se eliminó el monitor');
        }

        else
        {
            $this->noty("El monitor tiene usuario relacionadas, no es posible eliminarlo");
        }
    }


}
