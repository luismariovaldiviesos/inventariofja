<?php

namespace App\Http\Livewire;

use App\Models\Marca;
use App\Models\Teclado;
use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class Teclados extends Component
{
    use WithPagination;

    public $serie = '', $af='', $marca_id, $user_id,  $selected_id = 0;
    public $action = 'Listado', $componentName = 'Listado de Teclados', $search, $form = false;
    private $pagination = 10;
    protected $paginationTheme = 'tailwind';

    public function render()
    {
        if(strlen($this->search) > 0)
        $info =  Teclado::join('users as u','u.id','teclados.user_id')
            ->select('teclados.*','u.name as usuario')
            ->where('teclados.af','like',"%{$this->search}%")
            ->orWhere('u.name','like',"%{$this->search}%")
            ->paginate($this->pagination);
        else

        $info =  Teclado::join('users as u','u.id','teclados.user_id')
        ->select('teclados.*','u.name as usuario')
            ->paginate($this->pagination);


        return view('livewire.teclados.component', [
        'teclados' => $info,
        'usuarios' => User::orderBy('id','asc')->get(),
        'marcas' => Marca::orderBy('id','asc')->get(),

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

    public function Edit(Teclado $teclado)
    {
        $this->selected_id = $teclado->id;
        $this->serie = $teclado->serie;
        $this->af = $teclado->af;
        $this->marca_id =  $teclado->marca_id;
        $this->user_id =  $teclado->user_id;
        $this->action = 'Editar';
        $this->form = true;

    }

    public function Store()
    {
        sleep(1);

        $this->validate(Teclado::rules($this->selected_id), Teclado::$messages);

        $teclado = Teclado::updateOrCreate(
            ['id' => $this->selected_id],
            [
                'serie' => $this->serie,
                'af' => $this->af,
                'marca_id' => $this->marca_id,
                'user_id' => $this->user_id,
            ]
        );

        // image

        $this->noty($this->selected_id < 1 ? 'Teclado Registrado' : 'Teclado Actualizado', 'noty', false, 'close-modal');
        $this->resetUI();
    }

    public function Destroy(Teclado $teclado)
    {
        if($teclado->usuario !=  null)
        {
            $teclado->delete();
            $this->noty('Se eliminó el teclado');
        }

        else
        {
            $this->noty("El teclado tiene usuario relacionadas, no es posible eliminarlo");
        }

    }
}
