<?php

namespace App\Http\Livewire;

use App\Models\Unidad;
use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;
use Spatie\Permission\Models\Role;

class Users extends Component
{
    use WithPagination;

    public $name='', $ci='', $phone ='', $email='', $profile ='cajero', $status = 'ACTIVE', $unidad_id ='Elegir',  $password='',
    $temppass='', $selected_id ='', $search ='';
    public $componentName = 'Usuarios', $form  = false;

    public $action = 'Listado';
    protected $paginationTheme = 'tailwind';
    private $pagination = 20;


   public function render()
    {
        if(strlen($this->search) > 0)
        {

            $info =  User::join('unidads as u','u.id','users.unidad_id')
            ->select('users.*','u.nombre as unidad')
            ->where('users.name','like',"%{$this->search}%")
            ->orWhere('users.ci','like',"%{$this->search}%")
            ->orWhere('u.nombre','like',"%{$this->search}%")
            //->orWhere('p.nombre','like',"%{$this->search}%")
            ->paginate($this->pagination);


            // $users = User::where('name','like',"%{$this->search}%")
            //                ->orWhere('email','like',"%{$this->search}%")
            //                ->orderBy('id','asc')
            //                ->paginate($this->pagination);
        }
        else
        {
            $info =  User::join('unidads as u','u.id','users.unidad_id')
            ->select('users.*','u.nombre as unidad')
            ->paginate($this->pagination);
        }
        return view('livewire.users.component',
        [
            'users' => $info,
            'roles' => Role::orderBy('name','asc')->get(),
            'unidades' => Unidad::orderBy('nombre','asc')->get()
        ])
        ->layout('layouts.theme.app');
    }
    public function noty($msg, $eventName = 'noty', $reset = true, $action =""){
        $this->dispatchBrowserEvent($eventName, ['msg'=>$msg, 'type' => 'success', 'action' => $action ]);
        if($reset) $this->resetUI();
    }

    public function  addNew()
    {
        $this->resetUI();
        $this->form = true;
        $this->action = 'Agregar';
    }

    public  function  CloseModal()
    {
        $this->resetUI();
        $this->noty(null, 'close-modal');
    }

    public  function resetUI()
    {
        $this->resetValidation();
        $this->resetPage();
        $this->reset('name','ci','phone', 'status','selected_id','temppass','search','componentName', 'email','password','profile','form','unidad_id');
    }

    public function Edit(User $user)
    {
        //dd($user->ci);
        $this->selected_id = $user->id;
        $this->name = $user->name;
        $this->ci =  $user->ci;
        $this->phone =  $user->phone;
        $this->email = $user->email;
        $this->unidad_id = $user->unidad_id;
        $this->profile = $user->profile;
        $this->status = $user->status;
        $this->password = null;
        $this->temppass = $user->password;
        $this->form = true;
        $this->action = 'Editar';
    }


    public $listeners = ['resetUI','Destroy'];

    public function Store()
    {
        $this->validate(User::rules($this->selected_id), User::$messages);
        //dd($this->profile);

        $usuario =User::updateOrCreate(
            ['id' => $this->selected_id],
            [
                'name' =>  $this->name,
                'ci' => $this->ci,
                'phone' => $this->phone,
                'email' =>  $this->email,
                'unidad_id' =>  $this->unidad_id,
                'profile' =>  $this->profile,
                'status' => $this->status,
                'password' => strlen($this->password) > 0 ? bcrypt($this->password) : $this->temppass
            ]
        );
       // $user = User::find($this->selected_id);
        $usuario->syncRoles($this->profile);
        $this->noty($this->selected_id > 0 ? 'Usuario actualizado' : 'Usuario registrado');
        $this->resetUI();
    }


    public function Destroy(User $user)
    {
        // if ($user->sales->count() < 1) {
            $user->delete();
            $this->noty("El usuario <b>$user->name</b> fue eliminado del sistema");
        // } else{
        //     $this->noty('no es posible eliminar el usuario, tiene ventas asociadas');
        // }
    }
}
