<?php

namespace Database\Seeders;

use App\Models\Tipo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TipoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tipo::create([
            'nombre' => 'DESKTOP'
        ]);
        Tipo::create([
            'nombre' => 'LAPTOP'
        ]);
        Tipo::create([
            'nombre' => 'MONITOR'
        ]);
        Tipo::create([
            'nombre' => 'TECLADO'
        ]);
        Tipo::create([
            'nombre' => 'MOUSE'
        ]);
        Tipo::create([
            'nombre' => 'IMPRESORA'
        ]);
        Tipo::create([
            'nombre' => 'SCANNER'
        ]);
        Tipo::create([
            'nombre' => 'TELEFONO IP'
        ]);
    }
}
