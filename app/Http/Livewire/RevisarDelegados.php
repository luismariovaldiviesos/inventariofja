<?php

namespace App\Http\Livewire;

use App\Models\Delegado;
use App\Models\Impresora;
use App\Models\Laptop;
use App\Models\Monitor;
use App\Models\Observacion;
use App\Models\Pc;
use App\Models\Raton;
use App\Models\Scanner;
use App\Models\Teclado;
use App\Models\Telefono;
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
    public $usuarioSelected = "Seleccionar funcionario";

    //observaciones
    public $oberservaciones = [];
    //public $oberservacionesLptop = [];
    // public $oberservacionesPC = [];
    // public $oberservacionesPC = [];

    //usuarios
   public  $usuarios =[], $searchUsuario;

    public $pcs = [], $laptops=[] ,$monitores =[], $teclados =[], $mouses =[], $telefonos =[], $scanners =[], $impresoras =[];

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
            'laptops' => $this->laptopsAsignadas(),
            'monitores' => $this->monitoresAsignados(),
            'teclados' => $this->tecladosAsignados(),
            'mouses' => $this->mouseAsignados(),
            'telefonos' => $this->telefonosAsignados(),
            'scanners' => $this->scannersAsignados(),
            'impresoras' => $this->impresorasAsignadas(),
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
    public function laptopsAsignadas()
    {
        $this->laptops = DB::table('laptops')
        ->join('users', 'users.id', '=', 'laptops.user_id')
        ->join('delegados', 'delegados.unidad_id', '=', 'users.unidad_id')
        ->join('observations as o','o.observation_id','laptops.id')
        ->where('laptops.revisar_delegado', true)
        ->groupBy('laptops.id')
        //->distinct('laptops.user_id')
        // ->where('users.unidad_id',  Auth()->user()->unidad_id)
        // ->where('delegados.unidad_id', Auth()->user()->unidad_id)
        ->select('laptops.*','users.name as usuario','o.observation as observacion')

        ->get();
            //return $info;
     //dd($this->laptops);

    }
    public function monitoresAsignados()
    {
        $this->monitores = DB::table('monitors')
        ->join('users', 'users.id', '=', 'monitors.user_id')
        ->join('delegados', 'delegados.unidad_id', '=', 'users.unidad_id')
        ->join('observations as o','o.observation_id','monitors.id')
        ->where('monitors.revisar_delegado', true)
        ->groupBy('monitors.id')
        ->select('monitors.*','users.name as usuario','o.observation as observacion')
        ->get();

    }
    public function tecladosAsignados()
    {
        $this->teclados = DB::table('teclados')
        ->join('users', 'users.id', '=', 'teclados.user_id')
        ->join('delegados', 'delegados.unidad_id', '=', 'users.unidad_id')
        ->join('observations as o','o.observation_id','teclados.id')
        ->where('teclados.revisar_delegado', true)
        ->groupBy('teclados.id')
        ->select('teclados.*','users.name as usuario','o.observation as observacion')
        ->get();

    }
    public function mouseAsignados()
    {
        $this->mouses = DB::table('ratons')
        ->join('users', 'users.id', '=', 'ratons.user_id')
        ->join('delegados', 'delegados.unidad_id', '=', 'users.unidad_id')
        ->join('observations as o','o.observation_id','ratons.id')
        ->where('ratons.revisar_delegado', true)
        ->groupBy('ratons.id')
        ->select('ratons.*','users.name as usuario','o.observation as observacion')
        ->get();

    }
    public function telefonosAsignados()
    {
        $this->telefonos = DB::table('telefonos')
        ->join('users', 'users.id', '=', 'telefonos.user_id')
        ->join('delegados', 'delegados.unidad_id', '=', 'users.unidad_id')
        ->join('observations as o','o.observation_id','telefonos.id')
        ->where('telefonos.revisar_delegado', true)
        ->groupBy('telefonos.id')
        ->select('telefonos.*','users.name as usuario','o.observation as observacion')
        ->get();

    }
    public function scannersAsignados()
    {
        $this->scanners = DB::table('scanners')
        ->join('users', 'users.id', '=', 'scanners.user_id')
        ->join('delegados', 'delegados.unidad_id', '=', 'users.unidad_id')
        ->join('observations as o','o.observation_id','scanners.id')
        ->where('scanners.revisar_delegado', true)
        ->groupBy('scanners.id')
        ->select('scanners.*','users.name as usuario','o.observation as observacion')
        ->get();

    }
    public function impresorasAsignadas()
    {
        $this->impresoras = DB::table('impresoras')
        ->join('users', 'users.id', '=', 'impresoras.user_id')
        ->join('delegados', 'delegados.unidad_id', '=', 'users.unidad_id')
        ->join('observations as o','o.observation_id','impresoras.id')
        ->where('impresoras.revisar_delegado', true)
        ->groupBy('impresoras.id')
        ->select('impresoras.*','users.name as usuario','o.observation as observacion')
        ->get();

    }
    public  function reasignaAF($id)
    {

        if ($this->tabPcs == true) {
            $user_id = User::where('name',$this->usuarioSelected)->first()->id;
            $pc = Pc::find($id);
            $pc->revisar_delegado = false;
            $pc->user_id = $user_id;
            $pc->update();
            $this->noty('Inventario actualizado', 'noty', false);


        }
        if ($this->tabLaptops == true) {
            $user_id = User::where('name',$this->usuarioSelected)->first()->id;
            $laptop = Laptop::find($id);
            $laptop->revisar_delegado = false;
            $laptop->user_id = $user_id;
            $laptop->update();
            $this->noty('Inventario actualizado', 'noty', false);
        }
        if ($this->tabMonitores == true) {
            $user_id = User::where('name',$this->usuarioSelected)->first()->id;
            $monitor = Monitor::find($id);
            $monitor->revisar_delegado = false;
            $monitor->user_id = $user_id;
            $monitor->update();
            $this->noty('Inventario actualizado', 'noty', false);
        }
        if ($this->tabTeclados == true) {
            $user_id = User::where('name',$this->usuarioSelected)->first()->id;
            $teclado = Teclado::find($id);
            $teclado->revisar_delegado = false;
            $teclado->user_id = $user_id;
            $teclado->update();
            $this->noty('Inventario actualizado', 'noty', false);
        }
        if ($this->tabMouses == true) {
            $user_id = User::where('name',$this->usuarioSelected)->first()->id;
            $mouse = Raton::find($id);
            $mouse->revisar_delegado = false;
            $mouse->user_id = $user_id;
            $mouse->update();
            $this->noty('Inventario actualizado', 'noty', false);
        }
        if ($this->tabImpresoras == true) {
            $user_id = User::where('name',$this->usuarioSelected)->first()->id;
            $impresora = Impresora::find($id);
            $impresora->revisar_delegado = false;
            $impresora->user_id = $user_id;
            $impresora->update();
            $this->noty('Inventario actualizado', 'noty', false);
        }
        if ($this->tabScanners == true) {
            $user_id = User::where('name',$this->usuarioSelected)->first()->id;
            $scanner = Scanner::find($id);
            $scanner->revisar_delegado = false;
            $scanner->user_id = $user_id;
            $scanner->update();
            $this->noty('Inventario actualizado', 'noty', false);
        }
        if ($this->tabTelefonos == true) {
            $user_id = User::where('name',$this->usuarioSelected)->first()->id;
            $telefono = Telefono::find($id);
            $telefono->revisar_delegado = false;
            $telefono->user_id = $user_id;
            $telefono->update();
            $this->noty('Inventario actualizado', 'noty', false);
        }



    }


    public function getDetails($id)
    {
        $pc = Pc::find($id);
        //dd($pc);
        $this->oberservaciones = $pc->observaciones;
        //dd($this->oberservaciones);
        $this->dispatchBrowserEvent('show-modal-observaciones'); // evento que va al front para cerrar el modal (a traves de JS)

    }
    public function getDetailsLa($id)
    {
        $laptop = Laptop::find($id);
        //dd($pc);
        $this->oberservaciones = $laptop->observaciones;
        //dd($this->oberservacionesPC);
        $this->dispatchBrowserEvent('show-modal-observaciones'); // evento que va al front para cerrar el modal (a traves de JS)

    }
    public function getDetailsMo($id)
    {
        $monitor = Monitor::find($id);
        //dd($pc);
        $this->oberservaciones = $monitor->observaciones;
        //dd($this->oberservacionesPC);
        $this->dispatchBrowserEvent('show-modal-observaciones'); // evento que va al front para cerrar el modal (a traves de JS)

    }
    public function getDetailsTe($id)
    {
        $teclado = Teclado::find($id);
        //dd($pc);
        $this->oberservaciones = $teclado->observaciones;
        //dd($this->oberservacionesPC);
        $this->dispatchBrowserEvent('show-modal-observaciones'); // evento que va al front para cerrar el modal (a traves de JS)

    }
    public function getDetailsRA($id)
    {
        $mouse = Raton::find($id);
        //dd($pc);
        $this->oberservaciones = $mouse->observaciones;
        //dd($this->oberservacionesPC);
        $this->dispatchBrowserEvent('show-modal-observaciones'); // evento que va al front para cerrar el modal (a traves de JS)

    }
    public function getDetailsTel($id)
    {
        $telefono = Telefono::find($id);
        //dd($pc);
        $this->oberservaciones = $telefono->observaciones;
        //dd($this->oberservacionesPC);
        $this->dispatchBrowserEvent('show-modal-observaciones'); // evento que va al front para cerrar el modal (a traves de JS)

    }
    public function getDetailsSca($id)
    {
        $scanner = Scanner::find($id);
        //dd($pc);
        $this->oberservaciones = $scanner->observaciones;
        //dd($this->oberservacionesPC);
        $this->dispatchBrowserEvent('show-modal-observaciones'); // evento que va al front para cerrar el modal (a traves de JS)

    }
    public function getDetailsImp($id)
    {
        $impr = Impresora::find($id);
        //dd($pc);
        $this->oberservaciones = $impr->observaciones;
        //dd($this->oberservacionesPC);
        $this->dispatchBrowserEvent('show-modal-observaciones'); // evento que va al front para cerrar el modal (a traves de JS)

    }


    // hay que hacer un reset el rato de guardar
    // que semuestren full equipos de revisar en el component










}
