<?php

namespace Database\Seeders;

use App\Models\Pc;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PcsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pc::create([
            'nombre' => '',
            'ram' => '',
            'dd' => '',
            'serie' => 'PTSHAP9005146090FF9201',
            'af' => '01.07.59AF.3448',
            'ac' => '2012',
            'modelo_id' => 2,
            'user_id' => 350
        ]);

        Pc::create([
            'nombre' => '',
            'ram' => '',
            'dd' => '',
            'serie' => 'PTSHAP9005146090FF9201',
            'af' => '01.07.59AF.3448',
            'ac' => '2012',
            'modelo_id' => 2,
            'user_id' => 350
        ]);

    }
}
