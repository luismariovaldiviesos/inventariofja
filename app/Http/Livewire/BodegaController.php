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
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB as DB;

class BodegaController extends Component
{

    public $tabPcs = true, $tabLaptops = false, $tabMonitores = false, $tabTeclados =false, $tabMouses=false,
    $tabTelefonos = false, $tabScanners = false, $tabImpresoras = false;

     //totales
     public $totpcs, $totlaptops ,$totmonitores, $totteclados, $totmouses, $tottelefonos, $totscanners, $totimpresoras;

     public $pcs = [], $laptops=[] ,$monitores =[], $teclados =[], $mouses =[], $telefonos =[], $scanners =[], $impresoras =[];


     public function resetUI()
     {
         // limpiar mensajes rojos de validación
         $this->resetValidation();
         // regresar a la página inicial del componente
        // $this->resetPage();
         // regresar propiedades a su valor por defecto
         $this->reset('totpcs', 'totlaptops' ,'totmonitores',
                     'totteclados', 'totmouses', 'tottelefonos', 'totscanners',
                     'totimpresoras','usuarioSelected','oberservaciones','usuarios',
                      'searchUsuario','pcs' , 'laptops' ,'monitores' ,
                      'teclados' , 'mouses' , 'telefonos' , 'scanners' , 'impresoras' );
     }

    public function render()
    {
        return view('livewire.bodega.component',   
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

    public function pcsAsignadas()
    {
        $this->pcs = DB::table('pcs')
        //->join('users', 'users.id', '=', 'pcs.user_id')
        //->join('delegados', 'delegados.unidad_id', '=', 'users.unidad_id')
        //->join('observations as o','o.observation_id','pcs.id')
        //->where('pcs.revisar_delegado', true)
        ->where('pcs.activo', false)
        ->groupBy('pcs.id')
        ->select('pcs.*')
        ->get();
            //return $info;
            //dd($this->pcs);
        $this->totpcs = count($this->pcs);

    }

    public function laptopsAsignadas()
        {
        //     $this->laptops = DB::table('laptops')
        //     //->join('users', 'users.id', '=', 'laptops.user_id')
        //     //->join('delegados', 'delegados.unidad_id', '=', 'users.unidad_id')
        //     //->join('observations as o','o.observation_id','laptops.id')
        //     //->where('laptops.revisar_delegado', true)
        //     ->where('laptops.activo', false)
        //     ->groupBy('laptops.id')
        //     ->select('laptops.*')
        // ->get();
        //dd($this->laptops);

        $this->laptops = Laptop::where('activo',false)->orderBy('id')->get();
        //dd($this->laptops);
        $this->totlaptops = count($this->laptops);

        }
        public function monitoresAsignados()
        {
            $this->monitores = DB::table('monitors')            
            ->where('monitors.activo', false)
            ->groupBy('monitors.id')
            ->select('monitors.*')
            ->get();
            $this->totmonitores = count($this->monitores);
    
        }

        public function tecladosAsignados()
        {
            $this->teclados = DB::table('teclados')
            
            ->where('teclados.activo', false)
            ->groupBy('teclados.id')
            ->select('teclados.*')
            ->get();
            $this->totteclados = count($this->teclados);
    
        }
        public function mouseAsignados()
        {
            $this->mouses = DB::table('ratons')
            
            ->where('ratons.activo', false)
            ->groupBy('ratons.id')
            ->select('ratons.*')
            ->get();
            $this->totmouses = count($this->mouses);
    
        }
        public function telefonosAsignados()
        {
            $this->telefonos = DB::table('telefonos')
            
            ->where('telefonos.activo', false)
            ->groupBy('telefonos.id')
            ->select('telefonos.*')
            ->get();
            $this->tottelefonos = count($this->telefonos);
    
    
        }
        public function scannersAsignados()
        {
            $this->scanners = DB::table('scanners')
            
            ->where('scanners.activo', false)
            ->groupBy('scanners.id')
            ->select('scanners.*')
            ->get();
            $this->totscanners = count($this->scanners);
    
        }
        public function impresorasAsignadas()
        {
            $this->impresoras = DB::table('impresoras')
            
            ->where('impresoras.activo', false)
            ->groupBy('impresoras.id')
            ->select('impresoras.*')
            ->get();
            $this->totimpresoras = count($this->impresoras);
    
        }

}
