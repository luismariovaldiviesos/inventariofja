<?php

namespace App\Http\Livewire;

use App\Models\Marca;
use App\Models\Raton;
use App\Models\Tipo;
use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class Ratones extends Component
{
    use WithPagination;

    public $serie = '', $af='', $marca_id, $user_id, $searchUsuario, $usuarioSelected ="Seleccionar Usuario",  $selected_id = 0;
    public $action = 'Listado', $componentName = 'Listado de Mouses', $search, $form = false;
    private $pagination = 10;
    protected $paginationTheme = 'tailwind';

       //usuarios
   public  $usuarios =[];

    public function render()
    {

        if(strlen($this->searchUsuario) > 0){
            $this->usuarios =  User::where('name','like',"%{$this->searchUsuario}%")
            ->orderBy('name','asc')->get()->take(8); //primeros 5 clientes
        }
        else{
            $this->usuarios =  User::orderBy('name','asc')->get()->take(8); //primeros 5 clientes
        }
        $tip =  Tipo::where('nombre','=','MOUSE')->get();
        foreach($tip as $t)
        {
            //dd($t->id);
             $marcas = Tipo::find($t->id)->marcas()->orderBy('nombre')->get();
        }




        if(strlen($this->search) > 0)
        $info =  Raton::join('users as u','u.id','ratons.user_id')
            ->select('ratons.*','u.name as usuario')
            ->where('ratons.af','like',"%{$this->search}%")
            ->orWhere('u.name','like',"%{$this->search}%")
            ->paginate($this->pagination);
        else

        $info =  Raton::join('users as u','u.id','ratons.user_id')
        ->select('ratons.*','u.name as usuario')
            ->paginate($this->pagination);


        return view('livewire.ratones.component', [
        'ratones' => $info,
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
        $this->reset('serie','af', 'marca_id','user_id', 'usuarioSelected','searchUsuario', 'selected_id', 'search', 'action', 'componentName', 'form');
    }

    public function Edit(Raton $raton)
    {
        $this->selected_id = $raton->id;
        $this->serie = $raton->serie;
        $this->af = $raton->af;
        $this->marca_id =  $raton->marca_id;
        $this->user_id =  $raton->user_id;
        $this->usuarioSelected  = User::where('id',$this->user_id)->first()->name;
        $this->action = 'Editar';
        $this->form = true;

    }

    public function Store()
    {
        sleep(1);

        $this->validate(Raton::rules($this->selected_id), Raton::$messages);
        if($this->usuarioSelected == 'Seleccionar Usuario' )
        {
            $this->noty('Se debe asignar usuario al activo fijo', 'noty', 'false');
            return;

        }
        else{
            $this->user_id = User::where('name',$this->usuarioSelected)->first()->id;
        }

        $raton = Raton::updateOrCreate(
            ['id' => $this->selected_id],
            [
                'serie' => $this->serie,
                'af' => $this->af,
                'marca_id' => $this->marca_id,
                'user_id' => $this->user_id,
                'inventariado' => false,
                'revisar_delegado' => false
            ]
        );

        // image

        $this->noty($this->selected_id < 1 ? 'Maouse Registrado' : 'Maouse Actualizado', 'noty', false, 'close-modal');
        $this->resetUI();
    }

    public function Destroy(Raton $raton)
    {
        if($raton->usuario !=  null)
        {
            $raton->delete();
            $this->noty('Se eliminó el mouse');
        }

        else
        {
            $this->noty("El mouse tiene usuario relacionadas, no es posible eliminarlo");
        }

    }

     // para que se cierre al seleccionar el usuario
    // esto va al front a script addEventListener(close-usuario-modal)
    // que llama al metodo close modal usuario
    public function updatedUsuarioSelected()
    {
        $this->dispatchBrowserEvent('close-usuario-modal');
    }
}
