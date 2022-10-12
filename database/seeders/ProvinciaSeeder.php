<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Provincia;

class ProvinciaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Provincia::create([
            'nombre' => 'Azuay'
        ]);


        Provincia::create([
            'nombre' => 'Bolivar'
        ]);


        Provincia::create([
            'nombre' => 'Cañar'
        ]);


        Provincia::create([
            'nombre' => 'Carchi'
        ]);


        Provincia::create([
            'nombre' => 'Azuay'
        ]);


        Provincia::create([
            'nombre' => 'Chimborazo'
        ]);


        Provincia::create([
            'nombre' => 'El Oro'
        ]);


    }
}
