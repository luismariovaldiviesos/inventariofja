<?php

namespace App\Http\Livewire;

use App\Models\Delegado;
use App\Models\Observacion;
use App\Models\Pc;
use App\Models\User;
use Livewire\Component;
use DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB as FacadesDB;

class RevisarDelegados extends Component
{

    public $tabPcs = true, $tabLaptops = false, $tabMonitores = false, $tabTeclados =false, $tabMouses=false,
    $tabTelefonos = false, $tabScanners = false, $tabImpresoras = false;


    //para reasignar usuario
    public $usuarioSelected = "";

    //observaciones
    public $oberservacionesPC = [];

    //usuarios
   public  $usuarios =[], $searchUsuario;

    public $pcs = [], $laptops ,$monitores, $teclados, $mouses, $telefonos, $scanners, $impresoras;

    public function render()
    {
        if(strlen($this->searchUsuario) > 0){
            $this->usuarios =  User::where('name','like',"%{$this->searchUsuario}%")
            ->orderBy('name','asc')->get()->take(8); //primeros 8 clientes
        }
        else{
            $this->usuarios =  User::orderBy('name','asc')->get()->take(8); //primeros 8 clientes
        }


        return view('livewire.revisardelegados.component',
        [
            'pcs' => $this->pcsAsignadas(),

        ]

        )->layout('layouts.theme.app');;
    }

    public function setTabActive($tabName)
    {
        if ($tabName == 'tabPcs') {
            $this->tabPcs = true;
            $this->tabLaptops = false;
            $this->tabMonitores = false;
            $this->tabTeclados = false;
            $this->tabMouses = false;
            $this->tabTelefonos = false;
            $this->tabScanners = false;
            $this->tabImpresoras = false;
        }
        if ($tabName == 'tabLaptops') {
            $this->tabPcs = false;
            $this->tabLaptops = true;
            $this->tabMonitores = false;
            $this->tabTeclados = false;
            $this->tabMouses = false;
            $this->tabTelefonos = false;
            $this->tabScanners = false;
            $this->tabImpresoras = false;
        }
        if ($tabName == 'tabMonitores') {
            $this->tabPcs = false;
            $this->tabLaptops = false;
            $this->tabMonitores = true;
            $this->tabTeclados = false;
            $this->tabMouses = false;
            $this->tabTelefonos = false;
            $this->tabScanners = false;
            $this->tabImpresoras = false;
        }
        if ($tabName == 'tabTeclados') {
            $this->tabPcs = false;
            $this->tabLaptops = false;
            $this->tabMonitores = false;
            $this->tabTeclados = true;
            $this->tabMouses = false;
            $this->tabTelefonos = false;
            $this->tabScanners = false;
            $this->tabImpresoras = false;
        }
        if ($tabName == 'tabMouses') {
            $this->tabPcs = false;
            $this->tabLaptops = false;
            $this->tabMonitores = false;
            $this->tabTeclados = false;
            $this->tabMouses = true;
            $this->tabTelefonos = false;
            $this->tabScanners = false;
            $this->tabImpresoras = false;
        }
        if ($tabName == 'tabTelefonos') {
            $this->tabPcs = false;
            $this->tabLaptops = false;
            $this->tabMonitores = false;
            $this->tabTeclados = false;
            $this->tabMouses = false;
            $this->tabTelefonos = true;
            $this->tabScanners = false;
            $this->tabImpresoras = false;
        }
        if ($tabName == 'tabScanners') {
            $this->tabPcs = false;
            $this->tabLaptops = false;
            $this->tabMonitores = false;
            $this->tabTeclados = false;
            $this->tabMouses = false;
            $this->tabTelefonos = false;
            $this->tabScanners = true;
            $this->tabImpresoras = false;
        }
        if ($tabName == 'tabImpresoras') {
            $this->tabPcs = false;
            $this->tabLaptops = false;
            $this->tabMonitores = false;
            $this->tabTeclados = false;
            $this->tabMouses = false;
            $this->tabTelefonos = false;
            $this->tabScanners = false;
            $this->tabImpresoras = true;
        }


    }

    public function noty($msg, $eventName = 'noty', $reset = true, $action = '')
    {
        $this->dispatchBrowserEvent($eventName, ['msg' => $msg, 'type' => 'success', 'action' => $action]);
        if ($reset) $this->resetUI();
    }


    // para que se cierre al seleccionar el usuario
    // esto va al front a script addEventListener(close-usuario-modal)
    // que llama al metodo close modal usuario

    public function updatedUsuarioSelected()
    {
        $this->dispatchBrowserEvent('close-usuario-modal');
    }

    public function pcsAsignadas()
    {
        $this->pcs = DB::table('pcs')
        ->join('users', 'users.id', '=', 'pcs.user_id')
        ->join('delegados', 'delegados.unidad_id', '=', 'users.unidad_id')
        ->join('observations as o','o.observation_id','pcs.id')
        ->where('pcs.revisar_delegado', true)
        ->groupBy('pcs.id')
        //->distinct('pcs.user_id')
        // ->where('users.unidad_id',  Auth()->user()->unidad_id)
        // ->where('delegados.unidad_id', Auth()->user()->unidad_id)
        ->select('pcs.*','users.name as usuario','o.observation as observacion')

        ->get();
            //return $info;
     //dd($this->pcs);

    }

    public function getDetails($id)
    {
        $pc = Pc::find($id);
        //dd($pc);
        $this->oberservacionesPC = $pc->observaciones;
        //dd($this->oberservacionesPC);
        $this->dispatchBrowserEvent('show-modal-observaciones'); // evento que va al front para cerrar el modal (a traves de JS)

    }






}
