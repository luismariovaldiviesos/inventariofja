<?php

namespace Database\Seeders;

use App\Models\Modelo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ModeloSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //modelos de pcs
        Modelo::create([
            'nombre' => '8100 ELITE',
            'marca_id' => 5,
            'tipo_id' => 1
        ]);

        Modelo::create([
            'nombre' => 'ASPIRE M3970',
            'marca_id' => 1,
            'tipo_id' => 1
        ]);

        Modelo::create([
            'nombre' => 'DC7800',
            'marca_id' => 5,
            'tipo_id' => 1
        ]);

        Modelo::create([
            'nombre' => '6000 PRO',
            'marca_id' => 5,
            'tipo_id' => 1
        ]);
        Modelo::create([
            'nombre' => 'COMPAQ',
            'marca_id' => 5,
            'tipo_id' => 1
        ]);
        Modelo::create([
            'nombre' => 'DC7600',
            'marca_id' => 5,
            'tipo_id' => 1
        ]);
        Modelo::create([
            'nombre' => 'DC7900',
            'marca_id' => 5,
            'tipo_id' => 1
        ]);
        Modelo::create([
            'nombre' => 'KALLPA-AGP64F1',
            'marca_id' => 4,
            'tipo_id' => 1
        ]);

        Modelo::create([
            'nombre' => 'OPTIPLEX 9010',
            'marca_id' => 6,
            'tipo_id' => 1
        ]);

        Modelo::create([
            'nombre' => 'OPTIPLEX 990',
            'marca_id' => 6,
            'tipo_id' => 1
        ]);
        Modelo::create([
            'nombre' => 'ULTRATECH',
            'marca_id' => 8,
            'tipo_id' => 1
        ]);

        Modelo::create([
            'nombre' => 'XTRATECH',
            'marca_id' => 9,
            'tipo_id' => 1
        ]);


        //modelos de laptops


        Modelo::create([
            'nombre' => '6730B',
            'marca_id' => 5,
            'tipo_id' => 2
        ]);

        Modelo::create([
            'nombre' => 'ASPIRE 4752',
            'marca_id' => 1,
            'tipo_id' => 2
        ]);

        Modelo::create([
            'nombre' => 'ELITEBOOK 8440P',
            'marca_id' => 5,
            'tipo_id' => 2
        ]);

        Modelo::create([
            'nombre' => 'LATITUDE E 6420',
            'marca_id' => 6,
            'tipo_id' => 2
        ]);
        Modelo::create([
            'nombre' => 'LATITUDE E 6430',
            'marca_id' => 6,
            'tipo_id' => 2
        ]);
        Modelo::create([
            'nombre' => 'LATITUDE E 6440',
            'marca_id' => 6,
            'tipo_id' => 2
        ]);
        Modelo::create([
            'nombre' => 'PROBOOK 640 ',
            'marca_id' => 5,
            'tipo_id' => 2
        ]);

        Modelo::create([
            'nombre' => 'ULTRATECH',
            'marca_id' => 8,
            'tipo_id' => 2
        ]);


        // tipos pruinter

        Modelo::create([
            'nombre' => 'AR-1651CS',
            'marca_id' => 21,
            'tipo_id' => 6
        ]);
        Modelo::create([
            'nombre' => 'AR-5220',
            'marca_id' => 21,
            'tipo_id' => 6
        ]);

        Modelo::create([
            'nombre' => 'FX-890',
            'marca_id' => 19,
            'tipo_id' => 6
        ]);
        Modelo::create([
            'nombre' => 'HP 4050',
            'marca_id' => 5,
            'tipo_id' => 6
        ]);

        Modelo::create([
            'nombre' => 'LX-300',
            'marca_id' => 19,
            'tipo_id' => 6
        ]);

        Modelo::create([
            'nombre' => 'PHASER 3320',
            'marca_id' => 22,
            'tipo_id' => 6
        ]);
        Modelo::create([
            'nombre' => 'PHASER 3435',
            'marca_id' => 22,
            'tipo_id' => 6
        ]);
        Modelo::create([
            'nombre' => 'PHASER 3600',
            'marca_id' => 22,
            'tipo_id' => 6
        ]);

        Modelo::create([
            'nombre' => 'PHASER 6360',
            'marca_id' => 22,
            'tipo_id' => 6
        ]);
        Modelo::create([
            'nombre' => 'PHASER 6700',
            'marca_id' => 22,
            'tipo_id' => 6
        ]);

        Modelo::create([
            'nombre' => 'TLP 2844',
            'marca_id' => 23,
            'tipo_id' => 6
        ]);

        Modelo::create([
            'nombre' => 'WC 4118',
            'marca_id' => 22,
            'tipo_id' => 6
        ]);

        Modelo::create([
            'nombre' => 'WC 4265',
            'marca_id' => 22,
            'tipo_id' => 6
        ]);

        Modelo::create([
            'nombre' => 'WC 5330',
            'marca_id' => 22,
            'tipo_id' => 6
        ]);


         // tipos scanner

         Modelo::create([
            'nombre' => 'DOCUMATE 162',
            'marca_id' => 22,
            'tipo_id' => 7
        ]);

        Modelo::create([
            'nombre' => 'DOCUMATE 3125',
            'marca_id' => 22,
            'tipo_id' => 7
        ]);

        Modelo::create([
            'nombre' => 'DR-G1100',
            'marca_id' => 25,
            'tipo_id' => 7
        ]);
        Modelo::create([
            'nombre' => 'SCAN SNAP N1800',
            'marca_id' => 24,
            'tipo_id' => 7
        ]);
        Modelo::create([
            'nombre' => 'SCAN SNAP N1801',
            'marca_id' => 24,
            'tipo_id' => 7
        ]);
        Modelo::create([
            'nombre' => 'SCAN SNAP N1802',
            'marca_id' => 24,
            'tipo_id' => 7
        ]);
        Modelo::create([
            'nombre' => 'SCAN SNAP N1803',
            'marca_id' => 24,
            'tipo_id' => 7
        ]);
        Modelo::create([
            'nombre' => 'SCANJET 5590',
            'marca_id' => 5,
            'tipo_id' => 7
        ]);


        //telefonos
        Modelo::create([
            'nombre' => 'IP 4020IP',
            'marca_id' => 26,
            'tipo_id' => 8
        ]);
        Modelo::create([
            'nombre' => 'ALCATEL 4021',
            'marca_id' => 26,
            'tipo_id' => 8
        ]);
        Modelo::create([
            'nombre' => 'CP-6921',
            'marca_id' => 27,
            'tipo_id' => 8
        ]);
        Modelo::create([
            'nombre' => 'IP PHONE 6921',
            'marca_id' => 27,
            'tipo_id' => 8
        ]);
        Modelo::create([
            'nombre' => 'IP PHONE 7911',
            'marca_id' => 27,
            'tipo_id' => 8
        ]);
        Modelo::create([
            'nombre' => 'IP PHONE 7965',
            'marca_id' => 27,
            'tipo_id' => 8
        ]);
        Modelo::create([
            'nombre' => 'IP PHONE 7975',
            'marca_id' => 27,
            'tipo_id' => 8
        ]);

        Modelo::create([
            'nombre' => 'IP TOUCH 4018',
            'marca_id' => 26,
            'tipo_id' => 8
        ]);

        Modelo::create([
            'nombre' => 'IP TOUCH 4028',
            'marca_id' => 26,
            'tipo_id' => 8
        ]);



        // PC ADIKTA SIN MODELO
        Modelo::create([
            'nombre' => 'ADIKTA SIN MODELO ',
            'marca_id' => 2,
            'tipo_id' => 1
        ]);


        //LENOVO LAPTOP
          Modelo::create([
            'nombre' => 'THINKPAD ',
            'marca_id' => 18,
            'tipo_id' => 2
        ]);


        // impresora
           Modelo::create([
            'nombre' => 'COLOR 6280 ',
            'marca_id' => 22,
            'tipo_id' =>  6
        ]);

             Modelo::create([
            'nombre' => 'COLOR 6360',
            'marca_id' => 22,
            'tipo_id' =>  6
        ]);

            Modelo::create([
            'nombre' => ' ECOTANK L4260',
            'marca_id' => 19,
            'tipo_id' =>  6
        ]);

        Modelo::create([
            'nombre' => 'DESKJET 2755E L',
            'marca_id' => 5,
            'tipo_id' =>  6
        ]);
          Modelo::create([
            'nombre' => 'LABEL TLP 2844',
            'marca_id' => 23,
            'tipo_id' =>  6
        ]);

           Modelo::create([
            'nombre' => 'LASER',
            'marca_id' => 20,
            'tipo_id' =>  6
        ]);

          Modelo::create([
            'nombre' => '11 B N 6700',
            'marca_id' => 22,
            'tipo_id' =>  6
        ]);

           Modelo::create([
            'nombre' => 'P 361A',
            'marca_id' => 19,
            'tipo_id' =>  6
        ]);

           Modelo::create([
            'nombre' => 'PHASER 3428',
            'marca_id' => 22,
            'tipo_id' =>  6
        ]);
           Modelo::create([
            'nombre' => 'ML1610',
            'marca_id' => 11,
            'tipo_id' =>  6
        ]);

          Modelo::create([
            'nombre' => 'TERMICA',
            'marca_id' => 23,
            'tipo_id' =>  6
        ]);
          Modelo::create([
            'nombre' => 'WF-6590',
            'marca_id' => 19,
            'tipo_id' =>  6
        ]);
        Modelo::create([
            'nombre' => '3635',
            'marca_id' => 22,
            'tipo_id' =>  6
        ]);

        Modelo::create([
            'nombre' => 'USBB369487',
            'marca_id' => 5,
            'tipo_id' =>  6
        ]);

        // sin modelos de telefonos


        Modelo::create([
            'nombre' => '4004',
            'marca_id' => 26,
            'tipo_id' =>  8
        ]);

        // modelo panasonic

        Modelo::create([
            'nombre' => 'KX TS500LXB',
            'marca_id' => 17,
            'tipo_id' =>  8
        ]);

        //alcatel
        Modelo::create([
            'nombre' => 'M594',
            'marca_id' => 26,
            'tipo_id' =>  8
        ]);

        // SIN MODELO PASANASONNIC
        Modelo::create([
            'nombre' => 'SIN MODELO PANASONIC',
            'marca_id' => 17,
            'tipo_id' =>  8
        ]);


        // SIN MODELO ALCATEL
        Modelo::create([
            'nombre' => 'SIN MODELO ALCATEL',
            'marca_id' => 26,
            'tipo_id' =>  8
        ]);

          // SIN MODELO ALCATEL
          Modelo::create([
            'nombre' => 'SIN MODELO SIN MARCA',
            'marca_id' => 28,
            'tipo_id' =>  8
        ]);


        // sin modelo scanner  sin marca

            Modelo::create([
                'nombre' => 'MS 9535 VOYAGER MANO',
                'marca_id' => 28,
                'tipo_id' =>  7
            ]);

             Modelo::create([
                'nombre' => 'MS7120 ORBIT',
                'marca_id' => 28,
                'tipo_id' =>  7
            ]);

            // laptops nuevas
            Modelo::create([
                'nombre' => 'LATITUD 3420',
                'marca_id' => 6,
                'tipo_id' =>  2
            ]);
            // IMPRSORA NUEVA
            Modelo::create([
                'nombre' => 'VERSALINK B405',
                'marca_id' =>22,
                'tipo_id' =>  6
            ]);


    }
}
