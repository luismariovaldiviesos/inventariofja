<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'VALDIVIESO SOLANO LUIS MARIO',
            'ci' => '0104649843',
            'phone' => '09873086688',
            'email' => 'luis.valdiviesos@funcionjudicial.gob.ec',
            'unidad_id' => 1,
            'profile' => 'Admin',
            'status' => 'ACTIVE',
            'password' => bcrypt('0104649843')
        ]);

        //2
        User::create([
            'name' => 'ARGUDO DUMAN JUAN BERNARDO',
            'ci' => '301089561',
            'phone' => '',
            'email' => 'juan.argudo@funcionjudicial.gob.ec',
            'unidad_id' => 2,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('301089561')
        ]);
        User::create([
            'name' => 'ASTUDILLO CAÑAR ZONIA ELIZABETH',
            'ci' => '703100644',
            'phone' => '',
            'email' => 'zonia.astudillo@funcionjudicial.gob.ec',
            'unidad_id' => 2,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('703100644')
        ]);

        User::create([
            'name' => 'ATARIGUANA QUEZADA PEDRO',
            'ci' => '0104996525',
            'phone' => '',
            'email' => 'pedro.atariguana@funcionjudicial.gob.ec',
            'unidad_id' => 2,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0104996525')
        ]);

        User::create([
            'name' => 'BELTRAN BERMEO ESTEBAN VICENTE',
            'ci' => '705039386',
            'phone' => '',
            'email' => 'esteban.beltran@funcionjudicial.gob.ec',
            'unidad_id' => 2,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('705039386')
        ]);

        User::create([
            'name' => 'CARDENAS ORDOÑEZ TARQUINO EDUARDO',
            'ci' => '301164042',
            'phone' => '',
            'email' => 'tarquino.cardenas@funcionjudicial.gob.ec',
            'unidad_id' => 2,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('301164042')
        ]);

        User::create([
            'name' => 'GONZALEZ ALVAREZ RENE OSWALDO',
            'ci' => '300827821',
            'phone' => '',
            'email' => 'rene.gonzalez@funcionjudicial.gob.ec',
            'unidad_id' => 2,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('300827821')
        ]);

        User::create([
            'name' => 'LUPERCIO CAMPOVERDE OLGA SUSANA',
            'ci' => '102372034',
            'phone' => '',
            'email' => 'olga.lupercio@funcionjudicial.gob.ec',
            'unidad_id' => 2,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('102372034')
        ]);
        User::create([
            'name' => 'ORTEGA VINTIMILLA ALEXANDRA PATRICIA',
            'ci' => '102603636',
            'phone' => '',
            'email' => 'alexandra.ortega@funcionjudicial.gob.ec',
            'unidad_id' => 2,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('102603636')
        ]);

        User::create([
            'name' => 'PORTILLA VELEZ ALEX RUBEN',
            'ci' => '103803904',
            'phone' => '',
            'email' => 'alex.portilla@funcionjudicial.gob.ec',
            'unidad_id' => 2,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('103803904')
        ]);

        User::create([
            'name' => 'QUIZHPI CRIOLLO JORGE FELIPE',
            'ci' => '103169009',
            'phone' => '',
            'email' => 'jorge.quizhpi@funcionjudicial.gob.ec',
            'unidad_id' => 2,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('103169009')
        ]);

        User::create([
            'name' => 'RAMON RIVERA HENRY FABIAN',
            'ci' => '102288776',
            'phone' => '',
            'email' => 'henry.ramon@funcionjudicial.gob.ec',
            'unidad_id' => 2,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('102288776')
        ]);

        User::create([
            'name' => 'SARMIENTO LEON PAUL GUILLERMO',
            'ci' => '0102110111',
            'phone' => '',
            'email' => 'paul.sarmiento@funcionjudicial.gob.ec',
            'unidad_id' => 2,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0102110111')
        ]);

        User::create([
            'name' => 'URGILES VERDUGO MARTIN ANGEL',
            'ci' => '101848232',
            'phone' => '',
            'email' => 'martin.urgiles@funcionjudicial.gob.ec',
            'unidad_id' => 2,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('101848232')
        ]);

        //3

        User::create([
            'name' => 'ANDRADE GUZMAN MARIA LORENA',
            'ci' => '0103439956',
            'phone' => '',
            'email' => 'maria.andrade@funcionjudicial.gob.ec',
            'unidad_id' => 3,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0103439956')
        ]);

        User::create([
            'name' => 'ANZIETA CALLE FERNANDO ESTEBAN',
            'ci' => '0104229422',
            'phone' => '',
            'email' => 'fernando.anzieta@funcionjudicial.gob.ec',
            'unidad_id' => 3,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0104229422')
        ]);
        User::create([
            'name' => 'ARIAS FEIJOO CESAR EDUARDO',
            'ci' => '0102193034',
            'phone' => '',
            'email' => 'cesar.arias@funcionjudicial.gob.ec',
            'unidad_id' => 3,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0102193034')
        ]);
        User::create([
            'name' => 'ARIAS FLORES BYRON ENRIQUE',
            'ci' => '0704064484',
            'phone' => '',
            'email' => 'byron.arias@funcionjudicial.gob.ec',
            'unidad_id' => 3,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0704064484')
        ]);
        User::create([
            'name' => 'AUQUILLA VILLA NELSON RAFAEL',
            'ci' => '0105364244',
            'phone' => '',
            'email' => 'nelson.auquilla@funcionjudicial.gob.ec',
            'unidad_id' => 3,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0105364244')
        ]);
        User::create([
            'name' => 'AVELLAN SANCHEZ MIGUEL DEMARIO',
            'ci' => '0103238598',
            'phone' => '',
            'email' => 'miguel.avellan@funcionjudicial.gob.ec',
            'unidad_id' => 3,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0103238598')
        ]);
        User::create([
            'name' => 'CADME ORELLANA MARCO VINICIO',
            'ci' => '0104427042',
            'phone' => '',
            'email' => 'marco.cadme@funcionjudicial.gob.ec',
            'unidad_id' => 3,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0104427042')
        ]);
        User::create([
            'name' => 'CHICAIZA JARA CHRISTIAN FABIAN',
            'ci' => '106544422',
            'phone' => '',
            'email' => 'christian.chicaiza@funcionjudicial.gob.ec',
            'unidad_id' => 3,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('106544422')
        ]);
        User::create([
            'name' => 'CONDOR VINTIMILLA JUAN PABLO',
            'ci' => '103815296',
            'phone' => '',
            'email' => 'juan.condor@funcionjudicial.gob.ec',
            'unidad_id' => 3,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('103815296')
        ]);
        User::create([
            'name' => 'CRESPO VALDIVIESO CRISTIAN ESTEBAN',
            'ci' => '0102144995',
            'phone' => '',
            'email' => 'cristian.crespo@funcionjudicial.gob.ec',
            'unidad_id' => 3,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0102144995')
        ]);

        User::create([
            'name' => 'FAUSTO MACHUCA RAMON',
            'ci' => '0103168878',
            'phone' => '',
            'email' => 'fausto.machuca@funcionjudicial.gob.ec',
            'unidad_id' => 3,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0103168878')
        ]);
        User::create([
            'name' => 'FLORES FLORES RUTH MARCELA',
            'ci' => '0301747796',
            'phone' => '',
            'email' => 'ruth.flores@funcionjudicial.gob.ec',
            'unidad_id' => 3,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0301747796')
        ]);
        User::create([
            'name' => 'LARA CISNEROS SANTIAGO RAFAEL',
            'ci' => '0104240973',
            'phone' => '',
            'email' => 'santiago.lara@funcionjudicial.gob.ec',
            'unidad_id' => 3,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0104240973')
        ]);
        User::create([
            'name' => 'MENDEZ MUÑOZ SUSANA DEL CARMEN',
            'ci' => '1802237022',
            'phone' => '',
            'email' => 'susana.mendez@funcionjudicial.gob.ec',
            'unidad_id' => 3,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('1802237022')
        ]);

        User::create([
            'name' => 'MONTERO CARDENAS IVAN JUANITO',
            'ci' => '0102822483',
            'phone' => '',
            'email' => 'ivan.montero@funcionjudicial.gob.ec',
            'unidad_id' => 3,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0102822483')
        ]);
        User::create([
            'name' => 'NARVAEZ IZQUIERDO JUAN CARLOS',
            'ci' => '0105017628',
            'phone' => '',
            'email' => 'juan.narvaez@funcionjudicial.gob.ec',
            'unidad_id' => 3,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0105017628')
        ]);
        User::create([
            'name' => 'ORDOÑEZ CARDENAS JUAN FERNANDO',
            'ci' => '104973474',
            'phone' => '',
            'email' => 'juan.ordonez@funcionjudicial.gob.ec',
            'unidad_id' => 3,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('104973474')
        ]);
        User::create([
            'name' => 'ORTEGA PALACIOS NOELIA JANINA',
            'ci' => '301910063',
            'phone' => '',
            'email' => 'noelia.ortega@funcionjudicial.gob.ec',
            'unidad_id' => 3,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('301910063')
        ]);
        User::create([
            'name' => 'PACHECO BORJA JOSUE SEBASTIAN',
            'ci' => '103959193',
            'phone' => '',
            'email' => 'josue.pacheco@funcionjudicial.gob.ec',
            'unidad_id' => 3,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('103959193')
        ]);
        User::create([
            'name' => 'RIVERA GUTIERRES FREDDY EUGENIO',
            'ci' => '0103890596',
            'phone' => '',
            'email' => 'freddy.rivera@funcionjudicial.gob.ec',
            'unidad_id' => 3,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0300894987')
        ]);
        User::create([
            'name' => 'ROMAN CORREA MARCOS ANDRES',
            'ci' => '0103890596',
            'phone' => '',
            'email' => 'marcos.roman@funcionjudicial.gob.ec',
            'unidad_id' => 3,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0103890596')
        ]);
        User::create([
            'name' => 'SERRANO RODAS JOSE LUIS',
            'ci' => '0300936184',
            'phone' => '',
            'email' => 'jose.serrano@funcionjudicial.gob.ec',
            'unidad_id' => 3,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0300936184')
        ]);
        User::create([
            'name' => 'VINTIMILLA NEIRA BRUNO PAUL',
            'ci' => '0104196720',
            'phone' => '',
            'email' => 'bruno.vintimilla@funcionjudicial.gob.ec',
            'unidad_id' => 3,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0104196720')
        ]);

        //4
        User::create([
            'name' => 'ABAD ABAD JUAN FRANCISCO',
            'ci' => '0102332640',
            'phone' => '',
            'email' => 'juan.abad@funcionjudicial.gob.ec',
            'unidad_id' => 4,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0102332640')
        ]);
        User::create([
            'name' => 'CABRERA CHOCHO JUAN CARLOS',
            'ci' => '0105356281',
            'phone' => '',
            'email' => 'juan.cabrerac@funcionjudicial.gob.ec',
            'unidad_id' => 4,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0105356281')
        ]);
        User::create([
            'name' => 'CAMPI MACIAS WELLINGTON DAVID',
            'ci' => '0104554365',
            'phone' => '',
            'email' => 'wellington.campi@funcionjudicial.gob.ec ',
            'unidad_id' => 4,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0104554365')
        ]);
        User::create([
            'name' => 'CASTILLO GUILLEN JUAN JOSE',
            'ci' => '0104550835',
            'phone' => '',
            'email' => 'juan.castillog@funcionjudicial.gob.ec',
            'unidad_id' => 4,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0104550835')
        ]);
        User::create([
            'name' => 'LUCERO PACURUCU JORGE ROLANDO',
            'ci' => '0105380299',
            'phone' => '',
            'email' => 'jorge.lucero@funcionjudicial.gob.ec',
            'unidad_id' => 4,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0105380299')
        ]);
        User::create([
            'name' => 'PINOS VELEZ CRISTIAN JAVIER',
            'ci' => '0103898540',
            'phone' => '',
            'email' => 'cristian.pinos@funcionjudicial.gob.ec',
            'unidad_id' => 4,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0103898540')
        ]);
        User::create([
            'name' => 'QUINDE MALDONADO CATALINA ALEXANDRA',
            'ci' => '1102996129',
            'phone' => '',
            'email' => 'catalina.quinde@funcionjudicial.gob.ec',
            'unidad_id' => 4,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('1102996129')
        ]);
        User::create([
            'name' => 'RAMIREZ SILVA JOE RICHARD',
            'ci' => '0105059992',
            'phone' => '',
            'email' => 'joe.ramirez@funcionjudicial.gob.ec',
            'unidad_id' => 4,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0105059992')
        ]);

        //5

        User::create([
            'name' => ' AGUIRRE ROMERO SEBASTIAN ALEJANDRO',
            'ci' => '0702745233',
            'phone' => '',
            'email' => 'sebastian.aguirre@funcionjudicial.gob.ec',
            'unidad_id' => 5,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0702745233')
        ]);

        User::create([
            'name' => 'ALBAN ORTEGA BAYARDO ALEXANDER',
            'ci' => '1104341605',
            'phone' => '',
            'email' => 'bayardo.alban@funcionjudicial.gob.ec',
            'unidad_id' => 5,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('1104341605')
        ]);

        User::create([
            'name' => 'AVELLAN SÁNCHEZ MARÍA ALEJANDRA',
            'ci' => '0103238531',
            'phone' => '',
            'email' => 'maria.avellan@funcionjudicial.gob.ec',
            'unidad_id' => 5,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0103238531')
        ]);
        User::create([
            'name' => 'BECERRA CANDO MARIANA DE JESUS',
            'ci' => '0104781281',
            'phone' => '',
            'email' => 'mariana.becerra@funcionjudicial.gob.ec',
            'unidad_id' => 5,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0104781281')
        ]);
        User::create([
            'name' => 'ALVAREZ CORNEJO MARIA GABRIELA',
            'ci' => '0103923272',
            'phone' => '',
            'email' => 'maria.alvarezc@funcionjudicial.gob.ec',
            'unidad_id' => 5,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0103923272')
        ]);
        User::create([
            'name' => 'CORONEL SIGUENZA MARIA GABRIELA',
            'ci' => '0301572251',
            'phone' => '',
            'email' => 'maria.coronel@funcionjudicial.gob.ec',
            'unidad_id' => 5,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0301572251')
        ]);
        User::create([
            'name' => 'LOPEZ BARRETO BLANCA LORENA',
            'ci' => '0103098711',
            'phone' => '',
            'email' => 'blanca.lopez@funcionjudicial.gob.ec',
            'unidad_id' => 5,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0103098711')
        ]);
        User::create([
            'name' => 'ALVAREZ PACHECON JUAN CARLOS',
            'ci' => '1715119051',
            'phone' => '',
            'email' => 'juan.alvarez@funcionjudicial.gob.ec',
            'unidad_id' => 5,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('1715119051')
        ]);





    }
}
