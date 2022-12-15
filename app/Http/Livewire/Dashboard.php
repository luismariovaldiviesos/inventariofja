<?php

namespace App\Http\Livewire;

use Livewire\Component;
use DateTime;
use Illuminate\Support\Facades\DB;

class Dashboard extends Component
{
    public $year, $salesByMonth_Data = [], $top5Data =[], $weekSales_Data=[], $listYears=[] ;


    public function mount()
    {
        if ($this->year == '') $this->year = date('Y');
    }


    public function render()
    {
        $this->listYears =[];
        $currentYear =  date('Y') -1;
        for ($i=1; $i < 7 ; $i++) {
            array_push($this->listYears, $currentYear +$i);
        }
        return view('livewire.dash.component')->layout('layouts.theme.app');
    }
}
