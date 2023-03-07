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

        User::create([
            'name' => 'AVILA CAMPOVERDE OLGA PATRICIA',
            'ci' => '0103539540',
            'phone' => '',
            'email' => 'Olga.Avila@funcionjudicial.gob.ec',
            'unidad_id' => 5,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0103539540')
        ]);

         User::create([
            'name' => 'TORRES BORJA PABLO FERNANDO',
            'ci' => '0101880219',
            'phone' => '',
            'email' => 'pablo.torres@funcionjudicial.gob.ec',
            'unidad_id' => 5,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0101880219')
        ]);
        User::create([
            'name' => 'VASQUEZ REINOSO FAUSTO SILVERIO',
            'ci' => '0101956118',
            'phone' => '',
            'email' => 'fausto.vasquez@funcionjudicial.gob.ec',
            'unidad_id' => 5,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0101956118')
        ]);
            User::create([
            'name' => 'BOADA HERRERA LINETH ALEXANDRA',
            'ci' => '0603528266',
            'phone' => '',
            'email' => 'lineth.boada@funcionjudicial.gob.ec',
            'unidad_id' => 5,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0603528266')
        ]);
            User::create([
            'name' => 'BRAVO ORDOÑEZ GINA FILOMENA',
            'ci' => '0102295474',
            'phone' => '',
            'email' => 'gina.bravo@funcionjudicial.gob.ec',
            'unidad_id' => 5,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0102295474')
        ]);
         User::create([
            'name' => 'ALVAREZ MARQUEZ MARCO ESTEBAN',
            'ci' => '0104738950',
            'phone' => '',
            'email' => 'marco.alvarez@funcionjudicial.gob.ec',
            'unidad_id' => 5,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0104738950')
        ]);

           User::create([
            'name' => 'ANDRADE SERRANO MARIA JOSE',
            'ci' => '0102310299',
            'phone' => '',
            'email' => 'maria.andrades@funcionjudicial.gob.ec',
            'unidad_id' => 5,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0102310299')
        ]);
            User::create([
            'name' => 'AREVALO POLO LORENA DEL ROCIO',
            'ci' => '0104628615',
            'phone' => '',
            'email' => 'lorena.arevalo@funcionjudicial.gob.ec',
            'unidad_id' => 5,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0104628615')
        ]);

        User::create([
            'name' => 'ARIAS GARCIA SOFIA DEL PILAR',
            'ci' => '0104059852',
            'phone' => '',
            'email' => 'sofia.arias@funcionjudicial.gob.ec',
            'unidad_id' => 5,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0104059852')
        ]);
        User::create([
            'name' => 'CARRASCO VEINTEMILLA LUCÍA DEL CARMEN',
            'ci' => '0101852572',
            'phone' => '',
            'email' => 'lucia.carrasco@funcionjudicial.gob.ec',
            'unidad_id' => 5,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0101852572')
        ]);

		User::create([
            'name' => 'CALLE RODRIGUEZ MARIA JOSE',
            'ci' => '0103753695',
            'phone' => '',
            'email' => 'maria.calle@funcionjudicial.gob.ec',
            'unidad_id' => 5,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0103753695')
        ]);
		////////////147
		User::create([
            'name' => 'CAMPOVERDE ESPERANZA DE LA NUBE',
            'ci' => '0102484383',
            'phone' => '',
            'email' => 'esperanza.campoverde@funcionjudicial.gob.ec',
            'unidad_id' => 5,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0102484383')
        ]);

		User::create([
            'name' => 'CAÑIZARES RAMON MARIA BELEN',
            'ci' => '0103863734',
            'phone' => '',
            'email' => 'maria.canizares@funcionjudicial.gob.ec',
            'unidad_id' => 5,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0103863734')
        ]);



		User::create([
            'name' => 'FLORES VINTIMILLA ROLANDO ESTEBAN',
            'ci' => '0102125002',
            'phone' => '',
            'email' => 'rolando.flores@funcionjudicial.gob.ec',
            'unidad_id' => 5,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0102125002')
        ]);

		User::create([
            'name' => 'GARCIA GARCIA MARIA DE LOURDES',
            'ci' => '0102804572',
            'phone' => '',
            'email' => 'maria.garciag@funcionjudicial.gob.ec',
            'unidad_id' => 5,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0102804572')
        ]);

		User::create([
            'name' => 'CHUNCHI SIGUA DIANA ALEXANDRA',
            'ci' => '0105086375',
            'phone' => '',
            'email' => 'diana.chunchi@funcionjudicial.gob.ec',
            'unidad_id' => 5,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0105086375')
        ]);

		User::create([
            'name' => 'COELLO CORDERO MARTIN SEBASTIAN',
            'ci' => '0102068103',
            'phone' => '',
            'email' => 'martin.coello@funcionjudicial.gob.ec',
            'unidad_id' => 5,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0102068103')
        ]);

		User::create([
            'name' => 'CRESPO CUESTA MARIA ANDREA',
            'ci' => '0102994613',
            'phone' => '',
            'email' => 'maria.crespoa@funcionjudicial.gob.ec',
            'unidad_id' => 5,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0102994613')
        ]);

		User::create([
            'name' => 'FIGUEROA GUERRERO GLADYS CECILIA',
            'ci' => '0101754836',
            'phone' => '',
            'email' => 'cecilia.figueroa@funcionjudicial.gob.ec',
            'unidad_id' => 5,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0101754836')
        ]);

		User::create([
            'name' => 'GONZALEZ VALLEJO GABRIELA ALEXANDRA',
            'ci' => '1718652769',
            'phone' => '',
            'email' => 'gabriela.gonzalez@funcionjudicial.gob.ec',
            'unidad_id' => 5,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('1718652769')
        ]);

		User::create([
            'name' => 'GRANDA TORAL MILTON MIGUEL',
            'ci' => '0103855466',
            'phone' => '',
            'email' => 'milton.grandat@funcionjudicial.gob.ec',
            'unidad_id' => 5,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0103855466')
        ]);

		User::create([
            'name' => 'LEMA JERVES JAIME RENE',
            'ci' => '0104025184',
            'phone' => '',
            'email' => 'jaime.Lema@funcionjudicial.gob.ec',
            'unidad_id' => 5,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0104025184')
        ]);

		User::create([
            'name' => 'MOROCHO ROSA BEATRIZ',
            'ci' => '0102647708',
            'phone' => '',
            'email' => 'rosa.morocho@funcionjudicial.gob.ec',
            'unidad_id' => 5,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0102647708')
        ]);

		User::create([
            'name' => 'MANTILLA SARMIENTO VERÓNICA PATRICIA',
            'ci' => '0603717588',
            'phone' => '',
            'email' => 'veronica.mantilla@funcionjudicial.gob.ec',
            'unidad_id' => 5,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0603717588')
        ]);

		User::create([
            'name' => 'MARTINEZ ANDRADE DORA MELANIA',
            'ci' => '0102147063',
            'phone' => '',
            'email' => 'dora.martinez@funcionjudicial.gob.ec',
            'unidad_id' => 5,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0102147063')
        ]);

		User::create([
            'name' => 'NEIRA ORELLANA MARIA ESPERANZA',
            'ci' => '0103547733',
            'phone' => '',
            'email' => 'maria.neira@funcionjudicial.gob.ec',
            'unidad_id' => 5,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0103547733')
        ]);

        User::create([
            'name' => 'MERCHAN RUBIO PAOLO ROBERTO',
            'ci' => '0103157871',
            'phone' => '',
            'email' => 'paolo.merchan@funcionjudicial.gob.ec',
            'unidad_id' => 5,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0103157871')
        ]);

        User::create([
            'name' => 'MOLINA PESANTEZ MARIA LUISA',
            'ci' => '0103308235',
            'phone' => '',
            'email' => 'maria.molina@funcionjudicial.gob.ec',
            'unidad_id' => 5,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0103308235')
        ]);

        User::create([
            'name' => 'MORALES ASTUDILLO ROMAN ESTUARDO',
            'ci' => '0102540853',
            'phone' => '',
            'email' => 'roman.morales@funcionjudicial.gob.ec',
            'unidad_id' => 5,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0102540853')
        ]);

        User::create([
            'name' => 'MORENO COELLO MARIA INES',
            'ci' => '0102489796',
            'phone' => '',
            'email' => 'maria.moreno@funcionjudicial.gob.ec',
            'unidad_id' => 5,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0102489796')
        ]);

        User::create([
            'name' => 'OTTATI CORDERO YOLANDA CECILIA',
            'ci' => '0101947380',
            'phone' => '',
            'email' => 'yolanda.ottati@funcionjudicial.gob.ec',
            'unidad_id' => 5,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0101947380')
        ]);

        User::create([
            'name' => 'PALACIOS VINTIMILLA CESAR PATRICIO',
            'ci' => '0301187076',
            'phone' => '',
            'email' => 'cesar.palacios@funcionjudicial.gob.ec',
            'unidad_id' => 5,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0301187076')
        ]);

        User::create([
            'name' => 'ORELLANA ALBARRACIN DIANA CAROLINA',
            'ci' => '0105361844',
            'phone' => '',
            'email' => 'diana.orellana@funcionjudicial.gob.ec',
            'unidad_id' => 5,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0105361844')
        ]);

        User::create([
            'name' => 'PACHECO BARZALLO DOLORES FABIANA',
            'ci' => '0702558214',
            'phone' => '',
            'email' => 'dolores.pacheco@funcionjudicial.gob.ec',
            'unidad_id' => 5,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0702558214')
        ]);

        User::create([
            'name' => 'PESANTEZ PIEDRA  SARA PIEDAD',
            'ci' => '0102552270',
            'phone' => '',
            'email' => 'sara.pesantez@funcionjudicial.gob.ec',
            'unidad_id' => 5,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0102552270')
        ]);

        User::create([
            'name' => 'PIEDRA SANCHEZ DIEGO GEOVANNY',
            'ci' => '0103792644',
            'phone' => '',
            'email' => 'diego.piedra@funcionjudicial.gob.ec',
            'unidad_id' => 5,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0103792644')
        ]);

        User::create([
            'name' => 'PEÑA BERNAL DIANA LUCIA',
            'ci' => '0102758497',
            'phone' => '',
            'email' => 'diana.pena@funcionjudicial.gob.ec',
            'unidad_id' => 5,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0102758497')
        ]);

        User::create([
            'name' => 'RAMÓN PESANTEZ HECTOR CORNELIO',
            'ci' => '0102638525',
            'phone' => '',
            'email' => 'hector.ramon@funcionjudicial.gob.ec',
            'unidad_id' => 5,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0102638525')
        ]);

        User::create([
            'name' => 'PESANTEZ OCHOA MANUEL AGUSTÍN',
            'ci' => '0102133436',
            'phone' => '',
            'email' => 'agustin.pesantez@funcionjudicial.gob.ec',
            'unidad_id' => 5,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0102133436')
        ]);

        User::create([
            'name' => 'PESANTEZ PIEDRA JORGE LUIS',
            'ci' => '0704413228',
            'phone' => '',
            'email' => 'jorge.pesantez@funcionjudicial.gob.ec',
            'unidad_id' => 5,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0704413228')
        ]);

        User::create([
            'name' => 'PESÁNTEZ ZÚÑIGA INES MELINA',
            'ci' => '0102433117',
            'phone' => '',
            'email' => 'ines.pesantez@funcionjudicial.gob.ec',
            'unidad_id' => 5,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0102433117')
        ]);

        User::create([
            'name' => 'PIEDRA LOZANO RAFAEL ANDRES',
            'ci' => '0104536602',
            'phone' => '',
            'email' => 'rafael.piedra@funcionjudicial.gob.ec',
            'unidad_id' => 5,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0104536602')
        ]);

        User::create([
            'name' => 'POLO HERNANDEZ MALENE JIMENA',
            'ci' => '0103477253',
            'phone' => '',
            'email' => 'malene.polo@funcionjudicial.gob.ec',
            'unidad_id' => 5,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0103477253')
        ]);

	    User::create([
            'name' => 'RIERA PALLCHISACA ROMELIA ENRIQUETA',
            'ci' => '0103599049',
            'phone' => '',
            'email' => 'romelia.riera@funcionjudicial.gob.ec',
            'unidad_id' => 5,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0103599049')
        ]);

	    User::create([
            'name' => 'RODAL ARBITO SONIA PATRICIA',
            'ci' => '0102464112',
            'phone' => '',
            'email' => 'sonia.rodal@funcionjudicial.gob.ec',
            'unidad_id' => 5,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0102464112')
        ]);

	    User::create([
            'name' => 'RESTREPO NIÑO LILIAM CRISTINA',
            'ci' => '01723949010',
            'phone' => '',
            'email' => 'liliam.restrepo@funcionjudicial.gob.ec',
            'unidad_id' => 5,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('01723949010')
        ]);

	    User::create([
            'name' => 'ROBLES BERNAL MARIA AUGUSTA',
            'ci' => '0103500864',
            'phone' => '',
            'email' => 'maria.robles@funcionjudicial.gob.ec',
            'unidad_id' => 5,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0103500864')
        ]);

		User::create([
            'name' => 'SACOTO COELLO MONICA ELIZABETH',
            'ci' => '0102329497',
            'phone' => '',
            'email' => 'monica.sacoto@funcionjudicial.gob.ec',
            'unidad_id' => 5,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0102329497')
        ]);

	    User::create([
            'name' => 'ROMERO QUINTUÑA VICTOR MANOLO',
            'ci' => '0301103743',
            'phone' => '',
            'email' => 'victor.romeroq@funcionjudicial.gob.ec',
            'unidad_id' => 5,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0301103743')
        ]);

	    User::create([
            'name' => 'RUIZ MARTÍNEZ TAMARA LUCÍA',
            'ci' => '0103367231',
            'phone' => '',
            'email' => 'tamara.ruiz@funcionjudicial.gob.ec',
            'unidad_id' => 5,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0103367231')
        ]);

	    User::create([
            'name' => 'SANCHEZ SACOTO JESSICA KARINA',
            'ci' => '0104479068',
            'phone' => '',
            'email' => 'jessica.sanchezs@funcionjudicial.gob.ec',
            'unidad_id' => 5,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0104479068')
        ]);

	    User::create([
            'name' => 'SARANGO ERIQUE MARIA VERONICA',
            'ci' => '0103795399',
            'phone' => '',
            'email' => 'veronica.sarango@funcionjudicial.gob.ec',
            'unidad_id' => 5,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0103795399')
        ]);

	    User::create([
            'name' => 'SARMIENTO ARCE DANIELA FERNANDA',
            'ci' => '0104723531',
            'phone' => '',
            'email' => 'daniela.sarmiento@funcionjudicial.gob.ec',
            'unidad_id' => 5,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0104723531')
        ]);

	    User::create([
            'name' => 'SARMIENTO MENDIA FANNY EULALIA',
            'ci' => '0301199832',
            'phone' => '',
            'email' => 'fanny.sarmiento@funcionjudicial.gob.ec',
            'unidad_id' => 5,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0301199832')
        ]);

	    User::create([
            'name' => 'SEADE TINOCO SANDRA LORENA',
            'ci' => '0103750352',
            'phone' => '',
            'email' => 'lorena.seade@funcionjudicial.gob.ec',
            'unidad_id' => 5,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0103750352')
        ]);

	    User::create([
            'name' => 'SERRANO CORDOVA CRISTIAN HUMBERTO',
            'ci' => '0301628640',
            'phone' => '',
            'email' => 'cristian.serrano@funcionjudicial.gob.ec',
            'unidad_id' => 5,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0301628640')
        ]);

	    User::create([
            'name' => 'TAPIA MALDONADO DORILA XIMENA',
            'ci' => '0102720497',
            'phone' => '',
            'email' => 'ximena.tapia@funcionjudicial.gob.ec',
            'unidad_id' => 5,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0102720497')
        ]);

	    User::create([
            'name' => 'SIGCHA SUQUILANDA CLAUDIA',
            'ci' => '0105173330',
            'phone' => '',
            'email' => 'claudia.sigcha@funcionjudicial.gob.ec',
            'unidad_id' => 5,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0105173330')
        ]);

	    User::create([
            'name' => 'SOLANO CASTRO JOSE DANIEL',
            'ci' => '0102649084',
            'phone' => '',
            'email' => 'jose.solano@funcionjudicial.gob.ec',
            'unidad_id' => 5,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0102649084')
        ]);

	    User::create([
            'name' => 'UGALDE ARELLANO JULIO CESAR AUGUSTO',
            'ci' => '0101194322',
            'phone' => '',
            'email' => 'cesar.ugalde@funcionjudicial.gob.ec',
            'unidad_id' => 5,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0101194322')
        ]);

	    User::create([
            'name' => 'VÁZQUEZ CORONEL MIRIAM CRISTINA',
            'ci' => '0102123478',
            'phone' => '',
            'email' => 'miriam.vazquez@funcionjudicial.gob.ec',
            'unidad_id' => 5,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0102123478')
        ]);

	    User::create([
            'name' => 'VAZQUEZ ABAD PEDRO FERNANDO',
            'ci' => '0102645652',
            'phone' => '',
            'email' => 'pedro.vazquez@funcionjudicial.gob.ec',
            'unidad_id' => 5,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0102645652')
        ]);

	    User::create([
            'name' => 'VERDUGO ANDRADE AIDA CECILIA',
            'ci' => '0300841780',
            'phone' => '',
            'email' => 'cecilia.verdugo@funcionjudicial.gob.ec',
            'unidad_id' => 5,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0300841780')
        ]);

	    User::create([
            'name' => 'VINTIMILLA SUAREZ JUAN SANTIAGO',
            'ci' => '0300985405',
            'phone' => '',
            'email' => 'juan.vintimillas@funcionjudicial.gob.ec',
            'unidad_id' => 5,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0300985405')
        ]);

	    User::create([
            'name' => 'VILLAVICENCIO TORRERS JORGE ALBERTO',
            'ci' => '0102409844',
            'phone' => '',
            'email' => 'jorge.villavicencio@funcionjudicial.gob.ec',
            'unidad_id' => 5,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0102409844')
        ]);

	    User::create([
            'name' => 'VINTIMILLA CANTOS MARIA FERNANDA',
            'ci' => '0301511333',
            'phone' => '',
            'email' => 'maria.vintimilla@funcionjudicial.gob.ec',
            'unidad_id' => 5,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0301511333')
        ]);

		//unidad_id "6"

	    User::create([
            'name' => 'ALBAN NEIRA ANA CECILIA',
            'ci' => '0103751665',
            'phone' => '',
            'email' => 'ana.alban@funcionjudicial.gob.ec',
            'unidad_id' => 6,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0103751665')
        ]);

	    User::create([
            'name' => 'CAIMAYO GONZALEZ MIGUEL ESTEBAN',
            'ci' => '0300978228',
            'phone' => '',
            'email' => 'miguel.caimayo@funcionjudicial.gob.ec',
            'unidad_id' => 6,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0300978228')
        ]);

	    User::create([
            'name' => 'GALARZA LOPEZ NANCY YOLANDA',
            'ci' => '1400280028',
            'phone' => '',
            'email' => 'nancy.galarza@funcionjudicial.gob.ec',
            'unidad_id' => 6,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('1400280028')
        ]);

	    User::create([
            'name' => 'HIDALGO JARRO RAFAEL SANTIAGO',
            'ci' => '0104357967',
            'phone' => '',
            'email' => 'rafael.hidalgo@funcionjudicial.gob.ec',
            'unidad_id' => 6,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0104357967')
        ]);

		//unidad_id "12"

	    User::create([
            'name' => 'LANDI DIEZ JUAN CARLOS',
            'ci' => '0103767844',
            'phone' => '',
            'email' => 'juan.landi@funcionjudicial.gob.ec',
            'unidad_id' => 12,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0103767844')
        ]);

	    User::create([
            'name' => 'LLIVICURA VAZQUEZ MEDARDO RENE',
            'ci' => '0102448107',
            'phone' => '',
            'email' => 'rene.llivicura@funcionjudicial.gob.ec',
            'unidad_id' => 12,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0102448107')
        ]);

	    User::create([
            'name' => 'SANCHEZ PINOS DIEGO FERNANDO',
            'ci' => '0102498003',
            'phone' => '',
            'email' => 'diego.sanchez@funcionjudicial.gob.ec',
            'unidad_id' => 12,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0102498003')
        ]);



		//unidad_id "13"

	    User::create([
            'name' => 'ABRIL  LEON LILIBETH EUGENIA',
            'ci' => '0101681187',
            'phone' => '',
            'email' => 'lilibeth.abril@funcionjudicial.gob.ec',
            'unidad_id' => 13,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0101681187')
        ]);

	    User::create([
            'name' => 'CARDENAS RIVERA CARLOS EDUARDO',
            'ci' => '0301692646',
            'phone' => '',
            'email' => 'carlos.cardenasr@funcionjudicial.gob.ec',
            'unidad_id' => 13,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0301692646')
        ]);

	    User::create([
            'name' => 'COBOS ORELLANA JUAN SEBASTIAN',
            'ci' => '0103931473',
            'phone' => '',
            'email' => 'juan.cobos@funcionjudicial.gob.ec',
            'unidad_id' => 13,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0103931473')
        ]);

	    User::create([
            'name' => 'MENDIETA VABEGAS JEANNETH MARIA',
            'ci' => '0102132800',
            'phone' => '',
            'email' => 'jeanneth.mendieta@funcionjudicial.gob.ec',
            'unidad_id' => 13,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0102132800')
        ]);

	    User::create([
            'name' => 'JERVES DIANA DEL ROSARIO',
            'ci' => '0101955581',
            'phone' => '',
            'email' => 'diana.jerves@funcionjudicial.gob.ec',
            'unidad_id' => 13,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0101955581')
        ]);

	    User::create([
            'name' => 'SEGOVIA CRUZ TERESA PILAR',
            'ci' => '0301930376',
            'phone' => '',
            'email' => 'teresa.segovia@funcionjudicial.gob.ec',
            'unidad_id' => 13,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0301930376')
        ]);

	    User::create([
            'name' => 'SIGUENZA VALDIVIEZO CARLOTA DEL ROCIO',
            'ci' => '0103943916',
            'phone' => '',
            'email' => 'carlota.siguenza@funcionjudicial.gob.ec',
            'unidad_id' => 13,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0103943916')
        ]);

	    User::create([
            'name' => 'VALLEJO CHAVEZ MANUEL DE JESUS',
            'ci' => '0101710739',
            'phone' => '',
            'email' => 'manuel.vallejo@funcionjudicial.gob.ec',
            'unidad_id' => 13,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0101710739')
        ]);

	    User::create([
            'name' => 'VERDUGO GARATE CRISTIAN FERNANDO',
            'ci' => '0301229167',
            'phone' => '',
            'email' => 'cristian.verdugo@funcionjudicial.gob.ec',
            'unidad_id' => 13,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0301229167')
        ]);

		//unidad_id "14"

	    User::create([
            'name' => 'ALVARO RAMIREZ MARIA EUGENIA',
            'ci' => '0102305695',
            'phone' => '',
            'email' => 'maria.alvaro@funcionjudicial.gob.ec',
            'unidad_id' => 14,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0102305695')
        ]);

	    User::create([
            'name' => 'ESPINOZA MACANCELA PRISSILA TATIANA',
            'ci' => '0302298120',
            'phone' => '',
            'email' => 'prissila.espinoza@funcionjudicial.gob.ec',
            'unidad_id' => 14,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0302298120')
        ]);

	    User::create([
            'name' => 'HERRERA ROMERO KATTY YANINE',
            'ci' => '0104593595',
            'phone' => '',
            'email' => 'katty.herrera@funcionjudicial.gob.ec',
            'unidad_id' => 14,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0104593595')
        ]);

	    User::create([
            'name' => 'VALVERDE VILLEGAS MARIA SOLEDAD',
            'ci' => '0102155843',
            'phone' => '',
            'email' => 'maria.valverde@funcionjudicial.gob.ec',
            'unidad_id' => 14,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0102155843')
        ]);

		//unidad_id "16"

		User::create([
            'name' => 'AGUILAR MARTINEZ ANDREA CAROLINA',
            'ci' => '0103550828',
            'phone' => '',
            'email' => 'andrea.aguilar@funcionjudicial.gob.ec',
            'unidad_id' => 16,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0103550828')
        ]);

	    User::create([
            'name' => 'CABRERA VELEZ CAYO ESTEBAN',
            'ci' => '0300834884',
            'phone' => '',
            'email' => 'cayo.cabrera@funcionjudicial.gob.ec',
            'unidad_id' => 16,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0300834884')
        ]);

	    User::create([
            'name' => 'CAMPOVERDE CAMPOVERDE CARMITA PIEDAD',
            'ci' => '0102499803',
            'phone' => '',
            'email' => 'carmita.campoverde@funcionjudicial.gob.ec',
            'unidad_id' => 16,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0102499803')
        ]);

	    User::create([
            'name' => 'ARPI SILVA DIEGO ANDRES',
            'ci' => '0104143482',
            'phone' => '',
            'email' => 'diego.arpi@funcionjudicial.gob.ec',
            'unidad_id' => 16,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0104143482')
        ]);

	    User::create([
            'name' => 'CALDERON PALACIOS NIDIA SULEMA',
            'ci' => '0103275509',
            'phone' => '',
            'email' => 'nidia.calderon@funcionjudicial.gob.ec',
            'unidad_id' => 16,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0103275509')
        ]);

	    User::create([
            'name' => 'FLORES IDROVO LUIS MANUEL',
            'ci' => '0301454237',
            'phone' => '',
            'email' => 'luis.flores@funcionjudicial.gob.ec',
            'unidad_id' => 16,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0301454237')
        ]);

	    User::create([
            'name' => 'GALARZA CASTRO PABLO LEONCIO',
            'ci' => '0102645611',
            'phone' => '',
            'email' => 'pablo.galarza@funcionjudicial.gob.ec',
            'unidad_id' => 16,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0102645611')
        ]);

	    User::create([
            'name' => 'CUENCA ESPINOZA ROSA LIDIA',
            'ci' => '0702948944',
            'phone' => '',
            'email' => 'rosa.cuenca@funcionjudicial.gob.ec',
            'unidad_id' => 16,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0702948944')
        ]);

	    User::create([
            'name' => 'INGA GALARZA MIRIAM PATRICIA',
            'ci' => '0102590585',
            'phone' => '',
            'email' => 'miriam.inga@funcionjudicial.gob.ec',
            'unidad_id' => 16,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0102590585')
        ]);

	    User::create([
            'name' => 'GARCIA RIOS FRANCISCO JAVIER',
            'ci' => '0104146485',
            'phone' => '',
            'email' => 'francisco.garcia@funcionjudicial.gob.ec',
            'unidad_id' => 16,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0104146485')
        ]);

	    User::create([
            'name' => 'GOMEZ ANDRADE SIRIA ALEXANDRA',
            'ci' => '0104805809',
            'phone' => '',
            'email' => 'siria.gomez@funcionjudicial.gob.ec',
            'unidad_id' => 16,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0104805809')
        ]);

	    User::create([
            'name' => 'GOMEZ RIOS JUANA CATALINA',
            'ci' => '0102132263',
            'phone' => '',
            'email' => 'juana.gomez@funcionjudicial.gob.ec',
            'unidad_id' => 16,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0102132263')
        ]);

	    User::create([
            'name' => 'NARANJO CUESTA GIDO MANUEL',
            'ci' => '0301457412',
            'phone' => '',
            'email' => 'gido.naranjo@funcionjudicial.gob.ec',
            'unidad_id' => 16,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0301457412')
        ]);

	    User::create([
            'name' => 'NOVILLO RODAS LUCILA PATRICIA',
            'ci' => '0300712411',
            'phone' => '',
            'email' => 'lucila.novillo@funcionjudicial.gob.ec',
            'unidad_id' => 16,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0300712411')
        ]);

	    User::create([
            'name' => 'ORDOÑEZ SANTACRUZ PEDRO BOLIVAR',
            'ci' => '0301534574',
            'phone' => '',
            'email' => 'Pedro.Ordonez@funcionjudicial.gob.ec',
            'unidad_id' => 16,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0301534574')
        ]);

	    User::create([
            'name' => 'PESANTEZ OCHOA CESAR FERNANDO',
            'ci' => '0301363842',
            'phone' => '',
            'email' => 'cesar.pesantez@funcionjudicial.gob.ec',
            'unidad_id' => 16,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0301363842')
        ]);

	    User::create([
            'name' => 'QUIZHPI CRIOLLO FABIOLA NOEMI',
            'ci' => '0103169041',
            'phone' => '',
            'email' => 'fabiola.quizhpi@funcionjudicial.gob.ec',
            'unidad_id' => 16,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0103169041')
        ]);

	    User::create([
            'name' => 'TAMARIZ OCHOA CARLOS FERNANDO',
            'ci' => '0102410537',
            'phone' => '',
            'email' => 'carlos.tamariz@funcionjudicial.gob.ec',
            'unidad_id' => 16,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0102410537')
        ]);

	    User::create([
            'name' => 'VEGA PARRA JOHN FERNANDO',
            'ci' => '0102834264',
            'phone' => '',
            'email' => 'john.vega@funcionjudicial.gob.ec',
            'unidad_id' => 16,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0102834264')
        ]);

		//unidad_id "19"

	    User::create([
            'name' => 'ANDRADE FERNANDEZ VERONICA CRISTINA',
            'ci' => '0104032693',
            'phone' => '',
            'email' => 'veronica.andradef@funcionjudicial.gob.ec',
            'unidad_id' => 19,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0104032693')
        ]);

	    User::create([
            'name' => 'ORDOÑEZ ANDRADE JONATHAN ISRAEL',
            'ci' => '0104151147',
            'phone' => '',
            'email' => 'jonathan.ordonez@funcionjudicial.gob.ec',
            'unidad_id' => 19,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0104151147')
        ]);

	    User::create([
            'name' => 'VALAREZO GUERRERO SANTIAGO JAVIER',
            'ci' => '1103507164',
            'phone' => '',
            'email' => 'santiago.valarezo@funcionjudicial.gob.ec',
            'unidad_id' => 19,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('1103507164')
        ]);

		//unidad_id "21"

	    User::create([
            'name' => 'AMOROSO PACHECO KEVIN EDUARDO',
            'ci' => '0105394183',
            'phone' => '',
            'email' => 'kevin.amoroso@funcionjudicial.gob.ec',
            'unidad_id' => 21,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0105394183')
        ]);

	    User::create([
            'name' => 'CABRERA MERCHAN NARCIZA DE JESUS',
            'ci' => '0102291762',
            'phone' => '',
            'email' => 'narciza.cabrera@funcionjudicial.gob.ec',
            'unidad_id' => 21,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0102291762')
        ]);

	    User::create([
            'name' => 'GALARZA MARIN LUIS FERNANDO',
            'ci' => '0105314140',
            'phone' => '',
            'email' => 'luis.galarza@funcionjudicial.gob.ec',
            'unidad_id' => 21,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0105314140')
        ]);

	    User::create([
            'name' => 'JORGE ENRIQUE MORALES SANGURIMA',
            'ci' => '0102410453',
            'phone' => '',
            'email' => 'jorge.moraless@funcionjudicial.gob.ec',
            'unidad_id' => 21,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0102410453')
        ]);

	    User::create([
            'name' => 'POZO GORDON BOLIVAR IVAN',
            'ci' => '1400398325',
            'phone' => '',
            'email' => 'bolivar.pozo@funcionjudicial.gob.ec',
            'unidad_id' => 21,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('1400398325')
        ]);

	    User::create([
            'name' => 'ROMAN ZALAMEA DOMENICA ISABEL',
            'ci' => '0107451940',
            'phone' => '',
            'email' => 'domenica.roman@funcionjudicial.gob.ec',
            'unidad_id' => 21,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0107451940')
        ]);

		//unidad_id "22"

	    User::create([
            'name' => 'ALVARADO RIOS KARINA MARISOL',
            'ci' => '0702985995',
            'phone' => '',
            'email' => 'karina.alvarado@funcionjudicial.gob.ec',
            'unidad_id' => 22,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0702985995')
        ]);

	    User::create([
            'name' => 'AVILA ORDOÑEZ JUAN JOSE',
            'ci' => '0104387451',
            'phone' => '',
            'email' => 'juan.avila@funcionjudicial.gob.ec',
            'unidad_id' => 22,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0104387451')
        ]);

	    User::create([
            'name' => 'CABRERA CORNEJO LUCIA PATRICIA',
            'ci' => '0102696184',
            'phone' => '',
            'email' => 'patricia.cabrera@funcionjudicial.gob.ec',
            'unidad_id' => 22,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0102696184')
        ]);

	    User::create([
            'name' => 'DARQUEA ARIAS JUAN FERNANDO ',
            'ci' => '0102283520',
            'phone' => '',
            'email' => 'juan.darquea@funcionjudicial.gob.ec',
            'unidad_id' => 22,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0102283520')
        ]);

	    User::create([
            'name' => 'GOMEZ BUSTAMANTE GABRIELA DOLORES',
            'ci' => '0104493002',
            'phone' => '',
            'email' => 'gabriela.gomez@funcionjudicial.gob.ec',
            'unidad_id' => 22,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0104493002')
        ]);

	    User::create([
            'name' => 'IDROVO LEON GERMAN ANTONIO',
            'ci' => '0101827509',
            'phone' => '',
            'email' => 'german.idrovo@funcionjudicial.gob.ec',
            'unidad_id' => 22,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0101827509')
        ]);

	    User::create([
            'name' => 'IZQUIERDO BUESTAN FREDY ANTONIO',
            'ci' => '0300743051',
            'phone' => '',
            'email' => 'fredy.izquierdo@funcionjudicial.gob.ec',
            'unidad_id' => 22,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0300743051')
        ]);

	    User::create([
            'name' => 'MEDINA CAÑIZARES ESTEBAN MAURICIO',
            'ci' => '0102420700',
            'phone' => '',
            'email' => 'esteban.medina@funcionjudicial.gob.ec',
            'unidad_id' => 22,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0102420700')
        ]);

	    User::create([
            'name' => 'SIGUA SIGUA RUBEN EDUARDO',
            'ci' => '0104840327',
            'phone' => '',
            'email' => 'ruben.sigua@funcionjudicial.gob.ec',
            'unidad_id' => 22,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0104840327')
        ]);

	    User::create([
            'name' => 'VASQUEZ QUEZADA NESTOR FABIAN',
            'ci' => '0103650958',
            'phone' => '',
            'email' => 'nestor.vasquez@funcionjudicial.gob.ec',
            'unidad_id' => 22,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0103650958')
        ]);

	    User::create([
            'name' => 'ZALAMEA CARRASCO MARIA FERNANDA',
            'ci' => '0103629069',
            'phone' => '',
            'email' => 'maria.zalamea@funcionjudicial.gob.ec',
            'unidad_id' => 22,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0103629069')
        ]);

		//unidad_id "23"


	    User::create([
            'name' => 'ABAD FLORES ANDRES PATRICIO',
            'ci' => '0301302030',
            'phone' => '',
            'email' => 'andres.abad@funcionjudicial.gob.ec',
            'unidad_id' => 23,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0301302030')
        ]);

	    User::create([
            'name' => 'ALMEIDA TORAL PABLO FERNANDO',
            'ci' => '0102420544',
            'phone' => '',
            'email' => 'pablo.almeidat@funcionjudicial.gob.ec',
            'unidad_id' => 23,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0102420544')
        ]);

	    User::create([
            'name' => 'CABRERA CONTRERAS ANDREA CATALINA',
            'ci' => '0102083979',
            'phone' => '',
            'email' => 'andrea.cabrerac1@funcionjudicial.gob.ec',
            'unidad_id' => 23,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0102083979')
        ]);

	    User::create([
            'name' => 'CAYAMCELA MOROCHO DIANA CARMEN',
            'ci' => '0301853586',
            'phone' => '',
            'email' => 'diana.cayamcela@funcionjudicial.gob.ec',
            'unidad_id' => 23,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0301853586')
        ]);

	    User::create([
            'name' => 'IGLESIAS BECERRA JULIO CESAR',
            'ci' => '0918086125',
            'phone' => '',
            'email' => 'julio.iglesias@funcionjudicial.gob.ec',
            'unidad_id' => 23,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0918086125')
        ]);

	    User::create([
            'name' => 'IZQUIERDO CRRASCO MARIA GABRIELA',
            'ci' => '0301512414',
            'phone' => '',
            'email' => 'maria.izquierdoc@funcionjudicial.gob.ec',
            'unidad_id' => 23,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0301512414')
        ]);

	    User::create([
            'name' => 'JUCA GUZHÑAY JENNY SOLEDAD',
            'ci' => '0102253556',
            'phone' => '',
            'email' => 'jenny.juca@funcionjudicial.gob.ec',
            'unidad_id' => 23,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0102253556')
        ]);

	    User::create([
            'name' => 'LEGUIZAMON RODAS GABRIELA VERONICA',
            'ci' => '0102981503',
            'phone' => '',
            'email' => 'gabriela.leguizamon@funcionjudicial.gob.ec',
            'unidad_id' => 23,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0102981503')
        ]);

	    User::create([
            'name' => 'MARQUEZ CAMPOVERDE PAUL ADRIAN',
            'ci' => '0102653821',
            'phone' => '',
            'email' => 'paul.marquez@funcionjudicial.gob.ec',
            'unidad_id' => 23,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0102653821')
        ]);

	    User::create([
            'name' => 'MEDINA PACHECO LUCIA MARIANELA',
            'ci' => '1900570860',
            'phone' => '',
            'email' => 'lucia.medina@funcionjudicial.gob.ec',
            'unidad_id' => 23,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('1900570860')
        ]);

	    User::create([
            'name' => 'NAREA REINO SONIA GERARDINA',
            'ci' => '0102501707',
            'phone' => '',
            'email' => 'sonia.narea@funcionjudicial.gob.ec',
            'unidad_id' => 23,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0102501707')
        ]);

	    User::create([
            'name' => 'ALVAREZ TORAL RUTH CRISTINA',
            'ci' => '0102250362',
            'phone' => '',
            'email' => 'ruth.alvarez@funcionjudicial.gob.ec',
            'unidad_id' => 23,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0102250362')
        ]);

	    User::create([
            'name' => 'ORELLANA AREVALO FANNY ESPERANZA',
            'ci' => '0101617405',
            'phone' => '',
            'email' => 'fanny.orellanaa@funcionjudicial.gob.ec',
            'unidad_id' => 23,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0101617405')
        ]);

	    User::create([
            'name' => 'ORELLANA JARA MANUEL AGUSTIN',
            'ci' => '0104283296',
            'phone' => '',
            'email' => 'manuel.orellana@funcionjudicial.gob.ec',
            'unidad_id' => 23,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0104283296')
        ]);

	    User::create([
            'name' => 'ROJAS VERDUGO DIANA PATRICIA',
            'ci' => '0301825154',
            'phone' => '',
            'email' => 'diana.rojas@funcionjudicial.gob.ec',
            'unidad_id' => 23,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0301825154')
        ]);

	    User::create([
            'name' => 'ROMO SALINAS CHRISTIAN FERNANDO',
            'ci' => '0301555124',
            'phone' => '',
            'email' => 'christian.romo@funcionjudicial.gob.ec',
            'unidad_id' => 23,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0301555124')
        ]);

	    User::create([
            'name' => 'BARRERA LOZANO MANUEL OSWALDO',
            'ci' => '0102610854',
            'phone' => '',
            'email' => 'manuel.barrera@funcionjudicial.gob.ec',
            'unidad_id' => 23,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0102610854')
        ]);

	    User::create([
            'name' => 'TORRES RIVERA MARCOS ANDRES',
            'ci' => '0103898201',
            'phone' => '',
            'email' => 'marcos.torres@funcionjudicial.gob.ec',
            'unidad_id' => 23,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0103898201')
        ]);

	    User::create([
            'name' => 'VICUÑA CARPIO GALO MIGUEL',
            'ci' => '0300702214',
            'phone' => '',
            'email' => 'galo.vicuna@funcionjudicial.gob.ec',
            'unidad_id' => 23,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0300702214')
        ]);

	    User::create([
            'name' => 'ACURIO TORRES GABRIELA CAROLINA',
            'ci' => '0104207840',
            'phone' => '',
            'email' => 'gabriela.acurio@funcionjudicial.gob.ec',
            'unidad_id' => 23,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0104207840')
        ]);

	    User::create([
            'name' => 'ALVAREZ BARROS PEDRO DANIEL',
            'ci' => '0103661245',
            'phone' => '',
            'email' => 'pedro.alvarez@funcionjudicial.gob.ec',
            'unidad_id' => 23,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0103661245')
        ]);

	    User::create([
            'name' => 'AMOROSO IÑIGUEZ MARIA BELEN',
            'ci' => '0105348312',
            'phone' => '',
            'email' => 'maria.amoroso@funcionjudicial.gob.ec',
            'unidad_id' => 23,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0105348312')
        ]);

	    User::create([
            'name' => 'CAPON PLACENCIA TERESA DE JESÚS',
            'ci' => '0103955381',
            'phone' => '',
            'email' => 'teresa.capon@funcionjudicial.gob.ec',
            'unidad_id' => 23,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0103955381')
        ]);

	    User::create([
            'name' => 'ARIAS ASTUDILLO KARLA ESTEFANIA',
            'ci' => '0104701917',
            'phone' => '',
            'email' => 'karla.arias@funcionjudicial.gob.ec',
            'unidad_id' => 23,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0104701917')
        ]);

	    User::create([
            'name' => 'ARIAS BUNO KARINA MARIUXI',
            'ci' => '0704581438',
            'phone' => '',
            'email' => 'karina.arias@funcionjudicial.gob.ec',
            'unidad_id' => 23,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0704581438')
        ]);

	    User::create([
            'name' => 'AVILA VILLAVICENCIO JONATAN PABLO',
            'ci' => '0104127949',
            'phone' => '',
            'email' => 'jonatan.avila@funcionjudicial.gob.ec',
            'unidad_id' => 23,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0104127949')
        ]);

	    User::create([
            'name' => 'BARAHONA VASQUEZ ALICIA MAGDALENA',
            'ci' => '0301582623',
            'phone' => '',
            'email' => 'alicia.barahona@funcionjudicial.gob.ec',
            'unidad_id' => 23,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0301582623')
        ]);

	    User::create([
            'name' => 'BERNAL COLOSUMA SANDRA MARGARITA',
            'ci' => '0701414864',
            'phone' => '',
            'email' => 'sonia.bernal@funcionjudicial.gob.ec',
            'unidad_id' => 23,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0701414864')
        ]);

	    User::create([
            'name' => 'CORDOVA IÑIGUEZ SANDRA',
            'ci' => '0103346144',
            'phone' => '',
            'email' => 'sandra.cordova@funcionjudicial.gob.ec',
            'unidad_id' => 23,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0103346144')
        ]);

	    User::create([
            'name' => 'CABRERA CUESTA CECILIA CRISTINA',
            'ci' => '0103991931',
            'phone' => '',
            'email' => 'cecilia.cabrera@funcionjudicial.gob.ec',
            'unidad_id' => 23,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0103991931')
        ]);

	    User::create([
            'name' => 'DUQUE ALVAREZ  JENNY ELIZABETH',
            'ci' => '0101613339',
            'phone' => '',
            'email' => 'jenny.duque@funcionjudicial.gob.ec',
            'unidad_id' => 23,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0101613339')
        ]);

	    User::create([
            'name' => 'CANGO MOGORVEJO MONICA CATALINA',
            'ci' => '0102161569',
            'phone' => '',
            'email' => 'monica.cango@funcionjudicial.gob.ec',
            'unidad_id' => 23,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0102161569')
        ]);


	    User::create([
            'name' => 'CAÑIZARES CEVALLOS KARLA AUXILIADORA',
            'ci' => '0103840708',
            'phone' => '',
            'email' => 'karla.canizarez@funcionjudicial.gob.ec',
            'unidad_id' => 23,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0103840708')
        ]);

	    User::create([
            'name' => 'CELLERI GOMEZCOELLO WENDY ELIZABETH',
            'ci' => '0103908786',
            'phone' => '',
            'email' => 'wendy.celleri@funcionjudicial.gob.ec',
            'unidad_id' => 23,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0103908786')
        ]);

	    User::create([
            'name' => 'CHAVEZ MOTOCHE JOHANNA CRISTINA',
            'ci' => '0704583251',
            'phone' => '',
            'email' => 'johana.chavez@funcionjudicial.gob.ec',
            'unidad_id' => 23,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0704583251')
        ]);

	    User::create([
            'name' => 'COELLO PANDO  MARIA BELEN',
            'ci' => '0105582134',
            'phone' => '',
            'email' => 'maria.coellop@funcionjudicial.gob.ec',
            'unidad_id' => 23,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0105582134')
        ]);

	    User::create([
            'name' => 'CONTRERAS GARCIA JESSICA MARIBEL',
            'ci' => '0105974604',
            'phone' => '',
            'email' => 'jessica.contreras@funcionjudicial.gob.ec',
            'unidad_id' => 23,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0105974604')
        ]);

	    User::create([
            'name' => 'CORDOVA CARDENAS ANGELICA ALEXANDA',
            'ci' => '0301589255',
            'phone' => '',
            'email' => 'angelica.cordova@funcionjudicial.gob.ec',
            'unidad_id' => 23,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0301589255')
        ]);

	    User::create([
            'name' => 'GUERRERO LUIS ALBERTO',
            'ci' => '0102179165',
            'phone' => '',
            'email' => 'luis.guerrero@funcionjudicial.gob.ec',
            'unidad_id' => 23,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0102179165')
        ]);

	    User::create([
            'name' => 'CUENCA ARMIJOS VALERIA ESTEFANIA',
            'ci' => '1104494099',
            'phone' => '',
            'email' => 'valeria.cuenca@funcionjudicial.gob.ec',
            'unidad_id' => 23,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('1104494099')
        ]);

	    User::create([
            'name' => 'CUENCA FEIJO LADY MARIVEL',
            'ci' => '0704823350',
            'phone' => '',
            'email' => 'lady.cuenca@funcionjudicial.gob.ec',
            'unidad_id' => 23,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0704823350')
        ]);

	    User::create([
            'name' => 'FIGUEROA GEURRERO GLORIA CECILIA',
            'ci' => '0102527140',
            'phone' => '',
            'email' => 'gloria.figueroa@funcionjudicial.gob.ec',
            'unidad_id' => 23,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0102527140')
        ]);

	    User::create([
            'name' => 'FLORES GALAN ROSANA DEL CARMEN',
            'ci' => '0103954723',
            'phone' => '',
            'email' => 'rosana.flores@funcionjudicial.gob.ec',
            'unidad_id' => 23,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0103954723')
        ]);

	    User::create([
            'name' => 'GALARZA MORALES WILLIAM RENE',
            'ci' => '0103950788',
            'phone' => '',
            'email' => 'william.galarza@funcionjudicial.gob.ec',
            'unidad_id' => 23,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0103950788')
        ]);

	    User::create([
            'name' => 'GALARZA VILLAVICENCIO NANCY MAGALI',
            'ci' => '0302006499',
            'phone' => '',
            'email' => 'nancy.galarzav@funcionjudicial.gob.ec',
            'unidad_id' => 23,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0302006499')
        ]);

	    User::create([
            'name' => 'GARNICA MANZANO DANIELA ISABEL',
            'ci' => '0105386254',
            'phone' => '',
            'email' => 'daniela.garnica@funcionjudicial.gob.ec',
            'unidad_id' => 23,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0105386254')
        ]);

	    User::create([
            'name' => 'GOMEZCOELLO AREOPAJA MONICA PAOLA',
            'ci' => '0105092761',
            'phone' => '',
            'email' => 'monica.gomezcoello@funcionjudicial.gob.ec',
            'unidad_id' => 23,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0105092761')
        ]);

	    User::create([
            'name' => 'IDROVO ALVAREZ HENRY MARCELO',
            'ci' => '0105729958',
            'phone' => '',
            'email' => 'henry.idrovo@funcionjudicial.gob.ec',
            'unidad_id' => 23,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0105729958')
        ]);

	    User::create([
            'name' => 'JARRIN BERMEO SILVIA MARIVEL',
            'ci' => '0104188883',
            'phone' => '',
            'email' => 'silvia.jarrin@funcionjudicial.gob.ec',
            'unidad_id' => 23,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0104188883')
        ]);

	    User::create([
            'name' => 'LITUMA RAMONES MARTHA PAOLA',
            'ci' => '1400622799',
            'phone' => '',
            'email' => 'martha.lituma@funcionjudicial.gob.ec',
            'unidad_id' => 23,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('1400622799')
        ]);

	    User::create([
            'name' => 'LOAIZA GONZALEZ JHENEFER GABRIELA',
            'ci' => '0703916940',
            'phone' => '',
            'email' => 'jhenefer.loaiza@funcionjudicial.gob.ec',
            'unidad_id' => 23,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0703916940')
        ]);

	    User::create([
            'name' => 'MARQUEZ CHICAIZA JOHANA SOLDEAMAR',
            'ci' => '0704009588',
            'phone' => '',
            'email' => 'johana.marquez@funcionjudicial.gob.ec',
            'unidad_id' => 23,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0704009588')
        ]);

	    User::create([
            'name' => 'MARTINEZ CALLE SILVIA DEL ROSARIO',
            'ci' => '0300749439',
            'phone' => '',
            'email' => 'silvia.martinez@funcionjudicial.gob.ec',
            'unidad_id' => 23,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0300749439')
        ]);

	    User::create([
            'name' => 'NAVAS AMOROSO EULALIA GABRIELA',
            'ci' => '0301938726',
            'phone' => '',
            'email' => 'gabriela.navas@funcionjudicial.gob.ec',
            'unidad_id' => 23,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0301938726')
        ]);

	    User::create([
            'name' => 'MOLINA IZQUIERDO SANDRA LORENA',
            'ci' => '1400303937',
            'phone' => '',
            'email' => 'sandra.molina@funcionjudicial.gob.ec',
            'unidad_id' => 23,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('1400303937')
        ]);

	    User::create([
            'name' => 'MORALES CARRIÓN  MARCO VINICIO',
            'ci' => '0104146139',
            'phone' => '',
            'email' => 'marco.morales@funcionjudicial.gob.ec',
            'unidad_id' => 23,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0104146139')
        ]);

	    User::create([
            'name' => 'OCHOA MALDONADO TATIANA ESTHER',
            'ci' => '0103754206',
            'phone' => '',
            'email' => 'tatiana.ochoa@funcionjudicial.gob.ec',
            'unidad_id' => 23,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0103754206')
        ]);

	    User::create([
            'name' => 'MOROCHO GUERRERO PAUL SANTIAGO',
            'ci' => '0102274362',
            'phone' => '',
            'email' => 'paul.morocho@funcionjudicial.gob.ec',
            'unidad_id' => 23,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0102274362')
        ]);

	    User::create([
            'name' => 'ORTEGA ORMAZA BORIS ESTEBAN',
            'ci' => '0300834827',
            'phone' => '',
            'email' => 'boris.ortega@funcionjudicial.gob.ec',
            'unidad_id' => 23,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0300834827')
        ]);

	    User::create([
            'name' => 'ORELLANA CRESPO ANA BELEN',
            'ci' => '0104039144',
            'phone' => '',
            'email' => 'ana.orellanac@funcionjudicial.gob.ec',
            'unidad_id' => 23,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0104039144')
        ]);

	    User::create([
            'name' => 'ORELLANA DURAN MARIA AUGUSTA',
            'ci' => '0103091963',
            'phone' => '',
            'email' => 'maria.orellanad@funcionjudicial.gob.ec',
            'unidad_id' => 23,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0103091963')
        ]);

	    User::create([
            'name' => 'ORTEGA LOPEZ FRANCIA ELIZA',
            'ci' => '0302062468',
            'phone' => '',
            'email' => 'francia.ortega@funcionjudicial.gob.ec',
            'unidad_id' => 23,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0302062468')
        ]);

	    User::create([
            'name' => 'PAZ MENA JUAN CARLOS',
            'ci' => '1802603389',
            'phone' => '',
            'email' => 'juan.pazm@funcionjudicial.gob.ec',
            'unidad_id' => 23,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('1802603389')
        ]);

	    User::create([
            'name' => 'PESANTEZ AVILES ISABEL CRISTINA',
            'ci' => '0104835368',
            'phone' => '',
            'email' => 'isabel.pesantez@funcionjudicial.gob.ec',
            'unidad_id' => 23,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('104835368')
        ]);

	    User::create([
            'name' => 'PINOS  AMOROSO ANDREA FERNANDA',
            'ci' => '0301408787',
            'phone' => '',
            'email' => 'andrea.pinos@funcionjudicial.gob.ec',
            'unidad_id' => 23,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0301408787')
        ]);

	    User::create([
            'name' => 'POLO HERNANDEZ JHON FABIAN',
            'ci' => '0102998721',
            'phone' => '',
            'email' => 'fabian.polo@funcionjudicial.gob.ec',
            'unidad_id' => 23,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0102998721')
        ]);

	    User::create([
            'name' => 'RAMIREZ CASTRO ANA YADIRA',
            'ci' => '0301248530',
            'phone' => '',
            'email' => 'ana.ramirez@funcionjudicial.gob.ec',
            'unidad_id' => 23,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0301248530')
        ]);

	    User::create([
            'name' => 'RIOS POZO NANCY PATRICIA',
            'ci' => '0102266657',
            'phone' => '',
            'email' => 'patricia.rios@funcionjudicial.gob.ec',
            'unidad_id' => 23,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0102266657')
        ]);

	    User::create([
            'name' => 'ROBLES CASTRO JUAN PABLO',
            'ci' => '0301508891',
            'phone' => '',
            'email' => 'juan.robles@funcionjudicial.gob.ec',
            'unidad_id' => 23,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0301508891')
        ]);

	    User::create([
            'name' => 'RODAS CUADRADO XAVIER EDUARDO',
            'ci' => '0102263662',
            'phone' => '',
            'email' => 'xavier.rodas@funcionjudicial.gob.ec',
            'unidad_id' => 23,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0102263662')
        ]);

	    User::create([
            'name' => 'ROMERO CEVALLOS ZORAYA ISABEL',
            'ci' => '1104397946',
            'phone' => '',
            'email' => 'zoraya.romero@funcionjudicial.gob.ec',
            'unidad_id' => 23,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('1104397946')
        ]);

	    User::create([
            'name' => 'SALINAS IÑIGUEZ PRISCILA DEL CARMEN',
            'ci' => '0104260427',
            'phone' => '',
            'email' => 'priscila.salinas@funcionjudicial.gob.ec',
            'unidad_id' => 23,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0104260427')
        ]);

	    User::create([
            'name' => 'SANCHEZ MONTERO GERARDO ALFONSO',
            'ci' => '0102651353',
            'phone' => '',
            'email' => 'gerardo.sanchez@funcionjudicial.gob.ec',
            'unidad_id' => 23,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0102651353')
        ]);

	    User::create([
            'name' => 'SOLIS SOLIS WILSON SEGUNDO',
            'ci' => '1600194441',
            'phone' => '',
            'email' => 'wilson.solis@funcionjudicial.gob.ec',
            'unidad_id' => 23,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('1600194441')
        ]);

	    User::create([
            'name' => 'SERRANO ESPINOZA JUAN PABLO',
            'ci' => '0103432837',
            'phone' => '',
            'email' => 'juan.serrano@funcionjudicial.gob.ec',
            'unidad_id' => 23,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0103432837')
        ]);

	    User::create([
            'name' => 'TAMAYO ANZOATEGU JORGE GUSTAVO',
            'ci' => '0103842084',
            'phone' => '',
            'email' => 'jorge.tamayo@funcionjudicial.gob.ec',
            'unidad_id' => 23,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0103842084')
        ]);

	    User::create([
            'name' => 'TAPIA CALLE JOSE DAVID',
            'ci' => '0301863452',
            'phone' => '',
            'email' => 'jose.tapia@funcionjudicial.gob.ec',
            'unidad_id' => 23,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0301863452')
        ]);

	    User::create([
            'name' => 'TORRES BORJA  LUIS FELIPE',
            'ci' => '0102217130',
            'phone' => '',
            'email' => 'luis.torresb@funcionjudicial.gob.ec',
            'unidad_id' => 23,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0102217130')
        ]);

	    User::create([
            'name' => 'TARIRA CLAVIJO ADRIANA RAQUEL',
            'ci' => '0302007992',
            'phone' => '',
            'email' => 'adriana.tarira@funcionjudicial.gob.ec',
            'unidad_id' => 23,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0302007992')
        ]);

	    User::create([
            'name' => 'TORRES BERNAL MIRYAM BERNAL',
            'ci' => '0107340655',
            'phone' => '',
            'email' => 'miryam.torres@funcionjudicial.gob.ec',
            'unidad_id' => 23,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0107340655')
        ]);

	    User::create([
            'name' => 'URGILEZ BACULIMA MARTHA PIEDAD',
            'ci' => '0103599320',
            'phone' => '',
            'email' => 'martha.urgiles@funcionjudicial.gob.ec',
            'unidad_id' => 23,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0103599320')
        ]);

	    User::create([
            'name' => 'VALLEJO CABRERA ILIANA PATRICIA',
            'ci' => '0102935731',
            'phone' => '',
            'email' => 'iliana.vallejo@funcionjudicial.gob.ec',
            'unidad_id' => 23,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0102935731')
        ]);

	    User::create([
            'name' => 'VANEGAS REGALADO MARIA GABRIELA',
            'ci' => '0102456027',
            'phone' => '',
            'email' => 'maria.vanegas@funcionjudicial.gob.ec',
            'unidad_id' => 23,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0102456027')
        ]);

	    User::create([
            'name' => 'VASQUEZ BUSTOS ANA LUCIA',
            'ci' => '0104203377',
            'phone' => '',
            'email' => 'ana.vasquez@funcionjudicial.gob.ec',
            'unidad_id' => 23,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0104203377')
        ]);

	    User::create([
            'name' => 'VEGA AGUILAR MARIA DEL CARMEN',
            'ci' => '0102061157',
            'phone' => '',
            'email' => 'maria.vegaa@funcionjudicial.gob.ec',
            'unidad_id' => 23,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0102061157')
        ]);

	    User::create([
            'name' => 'VELEZ PESANTEZ ESTEBAN EUGENIO',
            'ci' => '0300891603',
            'phone' => '',
            'email' => 'esteban.velez@funcionjudicial.gob.ec',
            'unidad_id' => 23,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0300891603')
        ]);

	    User::create([
            'name' => 'VAZQUEZ NEIRA DIANA ISABEL',
            'ci' => '0102148905',
            'phone' => '',
            'email' => 'diana.vazquez@funcionjudicial.gob.ec',
            'unidad_id' => 23,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0102148905')
        ]);

	    User::create([
            'name' => 'VEGA MONSALVE BERTHA ANDREA',
            'ci' => '0103623781',
            'phone' => '',
            'email' => 'bertha.vega@funcionjudicial.gob.ec',
            'unidad_id' => 23,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0103623781')
        ]);



	    User::create([
            'name' => 'VILLAFUERTE TORRES KARLA FERNANDA',
            'ci' => '0102817038',
            'phone' => '',
            'email' => 'karla.villafuerte@funcionjudicial.gob.ec',
            'unidad_id' => 23,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0102817038')
        ]);

	    User::create([
            'name' => 'YAMUNAQUE LEON BETTY LOURDES',
            'ci' => '0103305827',
            'phone' => '',
            'email' => 'Betty.Yamunaque@funcionjudicial.gob.ec',
            'unidad_id' => 23,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0103305827')
        ]);
    }
}
