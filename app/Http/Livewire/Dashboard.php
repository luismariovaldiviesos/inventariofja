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
use Livewire\Component;
use DateTime;
use Illuminate\Support\Facades\DB;

class Dashboard extends Component
{
    public $year, $salesByMonth_Data = [], $top5Data =[], $weekSales_Data=[], $listYears=[] ;

    public $totalPcs, $totalLaptops, $totalMonitor, $totalTeclado, $totalMouse, $totalTelefono, $totalScanner, $totalImpresora;

    public $x_asignarPcs, $x_asignarLap, $x_asignarMoni, $x_asignarTecla, $x_asignarMouse, $x_asignarTelefo, $x_asignarScanner, $x_asignarImpre ;

    public $topPC;



    public function mount()
    {
        if ($this->year == '') $this->year = date('Y');
    }


    public function render()
    {
        $this->top5();
        $this->totalEquipos();
        $this->totalPorAsignar();
        $this->listYears =[];
        $currentYear =  date('Y') -1;
        for ($i=1; $i < 7 ; $i++) {
            array_push($this->listYears, $currentYear +$i);
        }
        return view('livewire.dash.component')->layout('layouts.theme.app');
    }


    public function totalEquipos()
    {
        $this->totalPcs = Pc::count();
        $this->totalLaptops = Laptop::count();
        $this->totalMonitor = Monitor::count();
        $this->totalTeclado = Teclado::count();
        $this->totalMouse = Raton::count();
        $this->totalTelefono = Telefono::count();
        $this->totalScanner = Scanner::count();
        $this->totalImpresora = Impresora::count();
        //dd($this->totalPcs);
    }

    public function totalPorAsignar()
    {
        $this->x_asignarPcs = PC::where('user_id','like','569')->count();
        $this->x_asignarLap = Laptop::where('user_id','like','569')->count();
        $this->x_asignarMoni = Monitor::where('user_id','like','569')->count();
        $this->x_asignarTecla = Teclado::where('user_id','like','569')->count();
        $this->x_asignarMouse = Raton::where('user_id','like','569')->count();

        $this->x_asignarTelefo = Telefono::where('user_id','like','569')->count();
        $this->x_asignarScanner = Scanner::where('user_id','like','569')->count();
        $this->x_asignarImpre = Impresora::where('user_id','like','569')->count();

       // dd($this->x_asignarLap);
    }


    public function top5()
    {

       $this->topPC = DB::table('users')
       ->select('users.name', DB::raw('COUNT(*) AS NumBienes'))
       ->join('pcs', 'users.id', '=', 'pcs.user_id')
       ->groupBy('users.id')
       ->orderByDesc('NumBienes')
       ->limit(5)
       ->get();

       $topLap = DB::table('users')
       ->select('users.name', DB::raw('COUNT(*) AS NumBienes'))
       ->join('laptops', 'users.id', '=', 'laptops.user_id')
       ->groupBy('users.id')
       ->orderByDesc('NumBienes')
       ->limit(5)
       ->get();

       $topMon = DB::table('users')
       ->select('users.name', DB::raw('COUNT(*) AS NumBienes'))
       ->join('monitors', 'users.id', '=', 'monitors.user_id')
       ->groupBy('users.id')
       ->orderByDesc('NumBienes')
       ->limit(5)
       ->get();

        //dd($topMon);
    }
}
