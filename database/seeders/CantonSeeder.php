<?php

namespace Database\Seeders;

use App\Models\Canton;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CantonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Canton::create([
            'nombre' => 'Cuenca',
            'provincia_id' => 1
        ]);


        Canton::create([
            'nombre' => 'Camilo Ponce Enriquez',
            'provincia_id' => 1
        ]);

        Canton::create([
            'nombre' => 'Giron',
            'provincia_id' => 1
        ]);

        Canton::create([
            'nombre' => 'Gualaceo',
            'provincia_id' => 1
        ]);

        Canton::create([
            'nombre' => 'Nabón',
            'provincia_id' => 1
        ]);

        Canton::create([
            'nombre' => 'Oña',
            'provincia_id' => 1
        ]);

        Canton::create([
            'nombre' => 'Paute',
            'provincia_id' => 1
        ]);


        Canton::create([
            'nombre' => 'Santa Isabel',
            'provincia_id' => 1
        ]);

        Canton::create([
            'nombre' => 'Sigsig',
            'provincia_id' => 1
        ]);
    }
}
