<?php

namespace App\Http\Livewire;

use App\Models\Delegado;
use App\Models\Unidad;
use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class Delegados extends Component
{
    use WithPagination;

    public  $user_id, $unidad_id,  $selected_id = 0, $usuarioSelected ="Seleccionar Usuario" ,  $searchUsuario;
    public $action = 'Listado', $componentName = 'Delegados Unidades Judiciales', $search, $form = false;
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
        if(strlen($this->search) > 0)
        $info =  Delegado::join('unidads as uni','uni.id','delegados.unidad_id')
        ->join('users as u','u.id','delegados.user_id')
        ->where('uni.nombre','like',"%{$this->search}%")
        ->orwhere('u.name','like',"%{$this->search}%")
        ->select('delegados.id as id')
        ->select('uni.nombre as unidad','u.name as user','u.id as iddelegado')
        ->paginate($this->pagination);

        else



        $info =  Delegado::join('unidads as uni','uni.id','delegados.unidad_id')
                ->join('users as u','u.id','delegados.user_id')
                ->select('uni.nombre as unidad','u.name as user', 'delegados.id as iddelegacion')

                ->paginate($this->pagination);

            //dd($info);

        return view('livewire.delegados.component',[
            'delegados' => $info,
            'unidades' => Unidad::all()

        ])->layout('layouts.theme.app');;
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
        $this->reset('unidad_id', 'user_id', 'selected_id', 'searchUsuario', 'search', 'action', 'componentName', 'form','usuarioSelected');
    }

    public function Edit(Delegado $delegado)
    {
        //dd($delegado->user_id);
        $this->selected_id = $delegado->id;
        $this->unidad_id = $delegado->unidad_id;
        $this->user_id = $delegado->user_id;
        $this->usuarioSelected  = User::where('id',$this->user_id)->first()->name;
        $this->action = 'Editar';
        $this->form = true;

    }

    public function Store()
    {
        sleep(1);

        $this->validate(Delegado::rules($this->selected_id), Delegado::$messages);
        if($this->usuarioSelected == 'Seleccionar Usuario' )
        {
            $this->noty('Se debe asignar usuario al activo fijo', 'noty', 'false');
            return;

        }
        else{
            $this->user_id = User::where('name',$this->usuarioSelected)->first()->id;
        }

        $delegado = Delegado::updateOrCreate(
            ['id' => $this->selected_id],
            [
                'unidad_id' => $this->unidad_id,
                'user_id' => $this->user_id
            ]
        );

        // image

        $this->noty($this->selected_id < 1 ? 'Delegado Registrado' : 'Delegado Actualizado', 'noty', false, 'close-modal');
        $this->resetUI();
    }

    public function Destroy(Delegado $delegado)
    {
        $delegado->delete();
        $this->noty('Se eliminó la delegación');
    }

      // para que se cierre al seleccionar el usuario
    // esto va al front a script addEventListener(close-usuario-modal)
    // que llama al metodo close modal usuario
    public function updatedUsuarioSelected()
    {
        $this->dispatchBrowserEvent('close-usuario-modal');
    }

}
