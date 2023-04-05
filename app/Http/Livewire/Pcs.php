<?php

namespace App\Http\Livewire;

use App\Models\Pc;
use App\Models\Tipo;
use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class Pcs extends Component
{
    use WithPagination;

    public $nombre='', $ram='', $dd='', $serie = '', $af='', $ac='',$searchUsuario, $usuarioSelected ="Seleccionar Usuario", $modelo_id, $user_id,  $selected_id = 0;
    public $action = 'Listado', $componentName = 'Listado de PCS', $search, $form = false;
    private $pagination = 10;
    protected $paginationTheme = 'tailwind';

    // para lelnar los años
    public $year, $listYears=[];

      //usuarios
   public  $usuarios =[];

    public function mount()
    {
        if ($this->year == '') $this->year = date('Y');
    }

    public function render()
    {
        if(strlen($this->searchUsuario) > 0){
            $this->usuarios =  User::where('name','like',"%{$this->searchUsuario}%")
            ->orderBy('name','asc')->get()->take(8); //primeros 8 clientes
        }
        else{
            $this->usuarios =  User::orderBy('name','asc')->get()->take(8); //primeros 8 clientes
        }

        $this->listYears =[];
        $currentYear =  date('Y') -14;
        for ($i=1; $i < 15 ; $i++) {
            array_push($this->listYears, $currentYear +$i);
        }

        $tip =  Tipo::where('nombre','=','DESKTOP')->get();
        foreach($tip as $t)
        {
            //dd($t->id);
             $modelos = Tipo::find($t->id)->modelos()->orderBy('nombre')->get();
        }
        if(strlen($this->search) > 0)
        $info =  Pc::join('users as u','u.id','pcs.user_id')
            ->select('pcs.*','u.name as usuario')
            ->where('pcs.af','like',"%{$this->search}%")
            ->orWhere('u.name','like',"%{$this->search}%")
            ->paginate($this->pagination);
        else

        $info = Pc::join('users as u','u.id','pcs.user_id')
        ->select('pcs.*','u.name as usuario')
            ->paginate($this->pagination);


        return view('livewire.pcs.component', [
        'pcs' => $info,
        'usuarios' => User::orderBy('id','asc')->get(),
        'modelos' => $modelos

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
        $this->reset('nombre', 'ram', 'dd','serie','af', 'ac', 'modelo_id', 'usuarioSelected' , 'searchUsuario','user_id', 'selected_id', 'search', 'action', 'componentName', 'form');
    }

    public function Edit(Pc $pc)
    {
        $this->selected_id = $pc->id;
        $this->nombre = $pc->nombre;
        $this->ram = $pc->ram;
        $this->dd = $pc->dd;
        $this->serie = $pc->serie;
        $this->af = $pc->af;
        $this->ac = $pc->ac;
        $this->modelo_id =  $pc->modelo_id;
        $this->user_id =  $pc->user_id;
        $this->usuarioSelected  = User::where('id',$this->user_id)->first()->name;
        $this->action = 'Editar';
        $this->form = true;

    }

    public function Store()
    {
        sleep(1);

        $this->validate(Pc::rules($this->selected_id), Pc::$messages);
        if($this->usuarioSelected == 'Seleccionar Usuario' )
        {
            $this->noty('Se debe asignar usuario al activo fijo', 'noty', 'false');
            return;

        }
        else{
            $this->user_id = User::where('name',$this->usuarioSelected)->first()->id;
        }

        $pc = Pc::updateOrCreate(
            ['id' => $this->selected_id],
            [
                'nombre' => $this->nombre,
                'ram' => $this->ram,
                'dd' => $this->dd,
                'serie' => $this->serie,
                'af' => $this->af,
                'ac' => $this->ac,
                'modelo_id' => $this->modelo_id,
                'user_id' => $this->user_id,
            ]
        );

        // image

        $this->noty($this->selected_id < 1 ? 'PC  Registrada' : 'PC Actualizada', 'noty', false, 'close-modal');
        $this->resetUI();
    }

    public function Destroy(Pc $pc)
    {
        if($pc->usuario !=  null)
        {
            $pc->delete();
            $this->noty('Se eliminó el PC');
        }

        else
        {
            $this->noty("El PC tiene usuario relacionado  y no es posible eliminarlo");
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
