<?php

namespace Database\Seeders;

use App\Models\Edificio;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EdificioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Edificio::create([
            'nombre' => 'COMPLEJO JUDICIAL BLOQUE A',
            'canton_id' => 1
        ]);


        Edificio::create([
            'nombre' => 'COMPLEJO JUDICIAL BLOQUE B',
            'canton_id' => 1
        ]);

        Edificio::create([
            'nombre' => 'CORTE PROVINCIAL DEL AZUAY',
            'canton_id' => 1
        ]);

        Edificio::create([
            'nombre' => 'EDIFICIO JUDICIAL DE GUALACEO',
            'canton_id' => 4
        ]);

        Edificio::create([
            'nombre' => 'EDIFICIO JUDICIAL PAUTE',
            'canton_id' => 7
        ]);

        Edificio::create([
            'nombre' => 'CASA JUDICIAL',
            'canton_id' => 9
        ]);

        Edificio::create([
            'nombre' => 'CASA JUDICIAL',
            'canton_id' => 3
        ]);

        Edificio::create([
            'nombre' => 'CASA JUDICIAL',
            'canton_id' => 8
        ]);

        Edificio::create([
            'nombre' => 'CASA JUDICIAL',
            'canton_id' => 6
        ]);

        Edificio::create([
            'nombre' => 'CASA JUDICIAL',
            'canton_id' => 5
        ]);

        Edificio::create([
            'nombre' => 'CASA JUDICIAL',
            'canton_id' => 2
        ]);

    }
}
