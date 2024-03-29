<?php

namespace App\Http\Livewire;

use App\Models\Impresora;
use App\Models\Laptop;
use App\Models\Monitor;
use App\Models\Observacion;
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

    public $observacionesLa, $observacionesMo, $observacionesTe, $observacionesRa, $observacionesTel, $observacionesSca, $observacionesImp;


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
            ->where('pcs.activo',true)
            ->get();

        $this->totpcs = count($this->pcs);
    }

    public function laptopsAsignadas()
    {
        $this->laptops =  Laptop::join('users as u','u.id','laptops.user_id')
            ->select('laptops.*')
            ->where('laptops.user_id','=',Auth()->user()->id)
            ->where('laptops.activo',true)
            ->get();

            $this->totlaptops = count($this->laptops);
    }

    public function MonitoresAsignados()
    {
        $this->monitores =  Monitor::join('users as u','u.id','monitors.user_id')
            ->select('monitors.*')
            ->where('monitors.user_id','=',Auth()->user()->id)
            ->where('monitors.activo',true)
            ->get();

            $this->totmonitores = count($this->monitores);
    }

    public function TecladosAsignados()
    {
        $this->teclados =  Teclado::join('users as u','u.id','teclados.user_id')
            ->select('teclados.*')
            ->where('teclados.user_id','=',Auth()->user()->id)
            ->where('teclados.activo',true)
            ->get();

            $this->totteclados = count($this->teclados);
    }

    public function MousesAsignados()
    {
        $this->mouses =  Raton::join('users as u','u.id','ratons.user_id')
            ->select('ratons.*')
            ->where('ratons.user_id','=',Auth()->user()->id)
            ->where('ratons.activo',true)
            ->get();

            $this->totmouses = count($this->mouses);
    }

    public function TelefonosAsignados()
    {
        $this->telefonos =  Telefono::join('users as u','u.id','telefonos.user_id')
            ->select('telefonos.*')
            ->where('telefonos.user_id','=',Auth()->user()->id)
            ->where('telefonos.activo',true)
            ->get();

            $this->tottelefonos = count($this->telefonos);
    }
    public function ScannersAsignados()
    {
        $this->scanners =  Scanner::join('users as u','u.id','scanners.user_id')
            ->select('scanners.*')
            ->where('scanners.user_id','=',Auth()->user()->id)
            ->where('scanners.activo',true)
            ->get();

            $this->totscanners = count($this->scanners);
    }

    public function ImpresorasAsignadas()
    {
        $this->impresoras =  Impresora::join('users as u','u.id','impresoras.user_id')
            ->select('impresoras.*')
            ->where('impresoras.user_id','=',Auth()->user()->id)
            ->where('impresoras.activo',true)
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
        //$this->resetPage();
        // regresar propiedades a su valor por defecto
        $this->reset('observacionesLa', 'observacionesMo', 'observacionesTe', 'observacionesRa',
         'observacionesTel', 'observacionesSca','observacionesImp','afId','observaciones','af');    

        
    }



   // valida inventario pc
    public  function aceptaActivo($id)
    {
        $pc = Pc::find($id);
        $pc->inventariado = true;
        $pc->update();
        $this->noty('Inventario actualizado', 'noty', false);
    }

    // agrega observaciones pc
    public function addObservaciones($observaciones)
    {
        $this->observaciones = $observaciones;
        //dd($this->observaciones);
        $pc = Pc::find($this->afId);
        $pc->inventariado = false;
        $pc->revisar_delegado = true;
        $pc->update();
        $observacion =  Observacion::create([
            'observation' => $this->observaciones,
            'observation_id' => $this->afId,
            'observation_type' => 'App\Models\Pc'
        ]);

        $this->noty('Inventario actualizado', 'noty');
        $this->dispatchBrowserEvent('close-modal-changes'); // evento que va al front para cerrar el modal (a traves de JS)
    }

    public  function aceptLaptop($id)
    {
        $laptop = Laptop::find($id);
        $laptop->inventariado = true;
        $laptop->update();
        $this->noty('Inventario actualizado', 'noty', false);
    }

    // agrega observaciones la
    public function addObservacionesLa($observaciones)
    {

        $this->observacionesLa = $observaciones;
        //dd($this->observacionesLa);
        $laptop = Laptop::find($this->afId);
        //dd($laptop);
        $laptop->inventariado = false;
        $laptop->revisar_delegado = true;
        $laptop->update();
        //dd($laptop);
        $o1 = Observacion::create([
            'observation' => $this->observacionesLa,
            'observation_id' => $this->afId,
            'observation_type' => 'App\Models\Laptop'
        ]);

        $this->noty('Inventario actualizado', 'noty');
        $this->dispatchBrowserEvent('close-modal-changes-la'); // evento que va al front para cerrar el modal (a traves de JS)
    }

    public  function aceptMonitor($id)
    {
        $monitor = Monitor::find($id);
        $monitor->inventariado = true;
        $monitor->update();
        $this->noty('Inventario actualizado', 'noty', false);
    }



    // agrega observaciones Monitor
    public function addObservacionesMo($observaciones)
    {
        $this->observacionesMo = $observaciones;
        //dd($this->observacionesMo);
        $monitor = Monitor::find($this->afId);
        $monitor->inventariado = false;
        $monitor->revisar_delegado = true;
        $monitor->update();
        $observacion =  Observacion::create([
            'observation' => $this->observacionesMo,
            'observation_id' => $this->afId,
            'observation_type' => 'App\Models\Monitor'
        ]);
        $this->noty('Inventario actualizado', 'noty');
        $this->dispatchBrowserEvent('close-modal-changes-mo'); // evento que va al front para cerrar el modal (a traves de JS)
    }

    public  function aceptTeclado($id)
    {
        $teclado = Teclado::find($id);
        $teclado->inventariado = true;
        $teclado->update();
        $this->noty('Inventario actualizado', 'noty', false);
    }
     // agrega observaciones tecldo
     public function addObservacionesTe($observaciones)
     {
         $this->observacionesTe = $observaciones;
         //dd($this->observacionesTe);
         $teclado = Teclado::find($this->afId);
         $teclado->inventariado = false;
         $teclado->revisar_delegado = true;
         $teclado->update();
         $observacion =  Observacion::create([
             'observation' => $this->observacionesTe,
             'observation_id' => $this->afId,
             'observation_type' => 'App\Models\Teclado'
         ]);
         $this->noty('Inventario actualizado', 'noty');
         $this->dispatchBrowserEvent('close-modal-changes-te'); // evento que va al front para cerrar el modal (a traves de JS)
     }

     public  function aceptRaton($id)
     {
         $raton = Raton::find($id);
         $raton->inventariado = true;
         $raton->update();
         $this->noty('Inventario actualizado', 'noty', false);
     }
     // agrega observaciones mouse
     public function addObservacionesRa($observaciones)
     {
         $this->observacionesRa = $observaciones;
         //dd($this->observacionesRa);
         $raton = Raton::find($this->afId);
         $raton->inventariado = false;
         $raton->revisar_delegado = true;
         $raton->update();
         $observacion =  Observacion::create([
             'observation' => $this->observacionesRa,
             'observation_id' => $this->afId,
             'observation_type' => 'App\Models\Raton'
         ]);
         $this->noty('Inventario actualizado', 'noty');
         $this->dispatchBrowserEvent('close-modal-changes-ra'); // evento que va al front para cerrar el modal (a traves de JS)
     }

     public  function aceptTelefono($id)
     {
         $telefono = Telefono::find($id);
         $telefono->inventariado = true;
         $telefono->update();
         $this->noty('Inventario actualizado', 'noty', false);
     }
     // agrega observaciones telefono
     public function addObservacionesTel($observaciones)
     {
         $this->observacionesTel = $observaciones;
        // dd($this->observacionesTel);
         $telefono = Telefono::find($this->afId);
         $telefono->inventariado = false;
         $telefono->revisar_delegado = true;
         $telefono->update();
         $observacion =  Observacion::create([
             'observation' => $this->observacionesTel,
             'observation_id' => $this->afId,
             'observation_type' => 'App\Models\Telefono'
         ]);
         $this->noty('Inventario actualizado', 'noty');
         $this->dispatchBrowserEvent('close-modal-changes-tel'); // evento que va al front para cerrar el modal (a traves de JS)
     }

     public  function aceptScanner($id)
     {
         $scanner = Scanner::find($id);
         $scanner->inventariado = true;
         $scanner->update();
         $this->noty('Inventario actualizado', 'noty', false);
     }

      // agrega observaciones scanner
      public function addObservacionesSca($observaciones)
      {
          $this->observacionesSca = $observaciones;
          //dd($this->observacionesSca);
          $scanner = Scanner::find($this->afId);
          $scanner->inventariado = false;
          $scanner->revisar_delegado = true;
          $scanner->update();
          $observacion =  Observacion::create([
              'observation' => $this->observacionesSca,
              'observation_id' => $this->afId,
              'observation_type' => 'App\Models\Scanner'
          ]);
          $this->noty('Inventario actualizado', 'noty');
          $this->dispatchBrowserEvent('close-modal-changes-sca'); // evento que va al front para cerrar el modal (a traves de JS)
      }
      public  function aceptImpresora($id)
      {
          $impresora = Impresora::find($id);
          $impresora->inventariado = true;
          $impresora->update();
          $this->noty('Inventario actualizado', 'noty', false);
      }

      // agrega observaciones impresora
      public function addObservacionesImp($observaciones)
      {
          $this->observacionesImp = $observaciones;
          //dd($this->observacionesImp);
          $impresora = Impresora::find($this->afId);
          $impresora->inventariado = false;
          $impresora->revisar_delegado = true;
          $impresora->update();
          $observacion =  Observacion::create([
              'observation' => $this->observacionesImp,
              'observation_id' => $this->afId,
              'observation_type' => 'App\Models\Impresora'
          ]);
          $this->noty('Inventario actualizado', 'noty');
          $this->dispatchBrowserEvent('close-modal-changes-imp'); // evento que va al front para cerrar el modal (a traves de JS)
      }



}
