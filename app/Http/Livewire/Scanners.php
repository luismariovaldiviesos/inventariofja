<?php

namespace App\Http\Livewire;

use App\Models\Scanner;
use App\Models\Tipo;
use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class Scanners extends Component
{
    use WithPagination;

    public $serie = '', $af='', $ac='', $modelo_id, $user_id,  $selected_id = 0;
    public $action = 'Listado', $componentName = 'Listado de Scanners', $search, $form = false;
    private $pagination = 10;
    protected $paginationTheme = 'tailwind';

    // para lelnar los años
    public $year, $listYears=[];

    public function mount()
    {
        if ($this->year == '') $this->year = date('Y');
    }



    public function render()
    {

        $this->listYears =[];
        $currentYear =  date('Y') -14;
        for ($i=1; $i < 15 ; $i++) {
            array_push($this->listYears, $currentYear +$i);
        }

        $tip =  Tipo::where('nombre','=','SCANNER')->get();
        foreach($tip as $t)
        {
            //dd($t->id);
             $modelos = Tipo::find($t->id)->modelos()->orderBy('nombre')->get();
        }
        if(strlen($this->search) > 0)
        $info =  Scanner::join('users as u','u.id','scanners.user_id')
            ->select('scanners.*','u.name as usuario')
            ->where('scanners.af','like',"%{$this->search}%")
            ->orWhere('u.name','like',"%{$this->search}%")
            ->paginate($this->pagination);
        else

        $info = Scanner::join('users as u','u.id','scanners.user_id')
        ->select('scanners.*','u.name as usuario')
            ->paginate($this->pagination);


        return view('livewire.scanners.component', [
        'scanners' => $info,
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
        $this->reset('serie','af', 'ac', 'modelo_id','user_id', 'selected_id', 'search', 'action', 'componentName', 'form');
    }

    public function Edit(Scanner $scanner)
    {
        $this->selected_id = $scanner->id;
        $this->serie = $scanner->serie;
        $this->af = $scanner->af;
        $this->ac = $scanner->ac;
        $this->modelo_id =  $scanner->modelo_id;
        $this->user_id =  $scanner->user_id;
        $this->action = 'Editar';
        $this->form = true;

    }

    public function Store()
    {
        sleep(1);

        $this->validate(Scanner::rules($this->selected_id), Scanner::$messages);

        $scanner = Scanner::updateOrCreate(
            ['id' => $this->selected_id],
            [
                'serie' => $this->serie,
                'af' => $this->af,
                'ac' => $this->ac,
                'modelo_id' => $this->modelo_id,
                'user_id' => $this->user_id,
            ]
        );

        // image

        $this->noty($this->selected_id < 1 ? 'Scanner  Registrado' : 'Scanner Actualizado', 'noty', false, 'close-modal');
        $this->resetUI();
    }

    public function Destroy(Scanner $scanner)
    {
        if($scanner->usuario !=  null)
        {
            $scanner->delete();
            $this->noty('Se eliminó el Scanner');
        }

        else
        {
            $this->noty("El Scanner tiene usuario relacionadas, no es posible eliminarlo");
        }

    }
}
