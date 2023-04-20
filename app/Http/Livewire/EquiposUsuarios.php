<?php

namespace App\Http\Livewire;

use App\Models\Impresora;
use App\Models\Laptop;
use App\Models\Monitor;
use App\Models\Pc;
use App\Models\Raton;
use App\Models\Scanner;
use App\Models\Teclado;
use App\Models\Telefono;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class EquiposUsuarios extends Component
{

    public $tabPcs = true, $tabLaptops = false, $tabMonitores = false, $tabTeclados =false, $tabMouses=false,
            $tabTelefonos = false, $tabScanners = false, $tabImpresoras = false;

    public $pcs, $laptops ,$monitores, $teclados, $mouses, $telefonos, $scanners, $impresoras;
    public $totpcs, $totlaptops ,$totmonitores, $totteclados, $totmouses, $tottelefonos, $totscanners, $totimpresoras;

    // para el modal de cambios
    public $afId,$observaciones,$af;


    public function render()
    {
     $this->pcsAsignadas();
     $this->laptopsAsignadas();
     $this->MonitoresAsignados();
     $this->TecladosAsignados();
     $this->MousesAsignados();
     $this->TelefonosAsignados();
     $this->ScannersAsignados();
     $this->ImpresorasAsignadas();
        return view('livewire.equiposusuarios.component')->layout('layouts.theme.app');
    }

    public function pcsAsignadas()
    {
        $this->pcs =  Pc::join('users as u','u.id','pcs.user_id')
            ->select('pcs.*')
            ->where('pcs.user_id','=',Auth()->user()->id)
            ->get();

        $this->totpcs = count($this->pcs);
    }

    public function laptopsAsignadas()
    {
        $this->laptops =  Laptop::join('users as u','u.id','laptops.user_id')
            ->select('laptops.*')
            ->where('laptops.user_id','=',Auth()->user()->id)
            ->get();

            $this->totlaptops = count($this->laptops);
    }

    public function MonitoresAsignados()
    {
        $this->monitores =  Monitor::join('users as u','u.id','monitors.user_id')
            ->select('monitors.*')
            ->where('monitors.user_id','=',Auth()->user()->id)
            ->get();

            $this->totmonitores = count($this->monitores);
    }

    public function TecladosAsignados()
    {
        $this->teclados =  Teclado::join('users as u','u.id','teclados.user_id')
            ->select('teclados.*')
            ->where('teclados.user_id','=',Auth()->user()->id)
            ->get();

            $this->totteclados = count($this->teclados);
    }

    public function MousesAsignados()
    {
        $this->mouses =  Raton::join('users as u','u.id','ratons.user_id')
            ->select('ratons.*')
            ->where('ratons.user_id','=',Auth()->user()->id)
            ->get();

            $this->totmouses = count($this->mouses);
    }

    public function TelefonosAsignados()
    {
        $this->telefonos =  Telefono::join('users as u','u.id','telefonos.user_id')
            ->select('telefonos.*')
            ->where('telefonos.user_id','=',Auth()->user()->id)
            ->get();

            $this->tottelefonos = count($this->telefonos);
    }
    public function ScannersAsignados()
    {
        $this->scanners =  Scanner::join('users as u','u.id','scanners.user_id')
            ->select('scanners.*')
            ->where('scanners.user_id','=',Auth()->user()->id)
            ->get();

            $this->totscanners = count($this->scanners);
    }

    public function ImpresorasAsignadas()
    {
        $this->impresoras =  Impresora::join('users as u','u.id','impresoras.user_id')
            ->select('impresoras.*')
            ->where('impresoras.user_id','=',Auth()->user()->id)
            ->get();

            $this->totimpresoras = count($this->impresoras);
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



   // valida inventario pc
    public  function aceptaPc($id)
    {
        dd($id);
    }

    // agrega observaciones
    public function addObservaciones($observaciones)
    {
        $this->observaciones = $observaciones;
        dd($this->observaciones);
    }

}
