<?php

namespace App\Http\Livewire;

use App\Models\Delegado;
use App\Models\Pc;
use Livewire\Component;
use DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB as FacadesDB;

class RevisarDelegados extends Component
{

    public $tabPcs = true, $tabLaptops = false, $tabMonitores = false, $tabTeclados =false, $tabMouses=false,
    $tabTelefonos = false, $tabScanners = false, $tabImpresoras = false;

    public $pcs = [], $laptops ,$monitores, $teclados, $mouses, $telefonos, $scanners, $impresoras;

    public function render()
    {
       $this->pcsAsignadas();
        return view('livewire.revisardelegados.component')->layout('layouts.theme.app');;
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

    public function pcsAsignadas()
    {

        // $this->pcs =  Pc::join('users as u','u.id','pcs.user_id')
        //                 ->join('delegados as d', 'u.id','d.user_id')
        //                 //->join('unidads as uni', 'u.id','d.unidad_id')
        // ->select('pcs.*')
        // ->where('pcs.revisar_delegado',true)
        // // ->where('d.user_id','=', Auth()->user()->id)
        // // ->where('d.unidad_id','=', Auth()->user()->unidad_id)
        // //->where('pcs.user_id','=',Auth()->user()->id)
        // ->get();
        // dd($this->pcs);

        // $this->pcs= DB::table('pcs')
        // ->crossJoin('users')
        // ->select('pcs.*')
        // ->where('pcs.user_id','=',DB::raw('user.id'))
        // ->where('pc.revisar_delegado','=',true)
        // ->get();
        // dd($this->pcs);

        // primero sacar la unidad y el delegado
        $pcsRevisar = DB::table('pcs')
    ->join('users', 'pcs.user_id', '=', 'users.id')
    ->where('users.unidad_id', '=', $tuUnidadId)
    ->where('pcs.revisar_delegado', '=', true)
    ->select('pcs.*')
    ->get();








    }
}
