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
            'unidad_id' => 12,
            'profile' => 'Admin',
            'status' => 'ACTIVE',
            'password' => bcrypt('0104649843')
        ]);

        //2
        User::create([
            'name' => 'ARGUDO DUMAN JUAN BERNARDO',
            'ci' => '0301089561',
            'phone' => '',
            'email' => 'juan.argudo@funcionjudicial.gob.ec',
            'unidad_id' => 2,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0301089561')
        ]);
        User::create([
            'name' => 'ASTUDILLO CAÑAR ZONIA ELIZABETH',
            'ci' => '0703100644',
            'phone' => '',
            'email' => 'zonia.astudillo@funcionjudicial.gob.ec',
            'unidad_id' => 2,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0703100644')
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
            'ci' => '0705039386',
            'phone' => '',
            'email' => 'esteban.beltran@funcionjudicial.gob.ec',
            'unidad_id' => 2,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0705039386')
        ]);

        User::create([
            'name' => 'CARDENAS ORDOÑEZ TARQUINO EDUARDO',
            'ci' => '0301164042',
            'phone' => '',
            'email' => 'tarquino.cardenas@funcionjudicial.gob.ec',
            'unidad_id' => 2,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0301164042')
        ]);

        User::create([
            'name' => 'GONZALEZ ALVAREZ RENE OSWALDO',
            'ci' => '0300827821',
            'phone' => '',
            'email' => 'rene.gonzalez@funcionjudicial.gob.ec',
            'unidad_id' => 2,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0300827821')
        ]);

        User::create([
            'name' => 'LUPERCIO CAMPOVERDE OLGA SUSANA',
            'ci' => '0102372034',
            'phone' => '',
            'email' => 'olga.lupercio@funcionjudicial.gob.ec',
            'unidad_id' => 2,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0102372034')
        ]);
        User::create([
            'name' => 'ORTEGA VINTIMILLA ALEXANDRA PATRICIA',
            'ci' => '0102603636',
            'phone' => '',
            'email' => 'alexandra.ortega@funcionjudicial.gob.ec',
            'unidad_id' => 2,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0102603636')
        ]);

        User::create([
            'name' => 'PORTILLA VELEZ ALEX RUBEN',
            'ci' => '0103803904',
            'phone' => '',
            'email' => 'alex.portilla@funcionjudicial.gob.ec',
            'unidad_id' => 2,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0103803904')
        ]);

        User::create([
            'name' => 'QUIZHPI CRIOLLO JORGE FELIPE',
            'ci' => '0103169009',
            'phone' => '',
            'email' => 'jorge.quizhpi@funcionjudicial.gob.ec',
            'unidad_id' => 2,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0103169009')
        ]);

        User::create([
            'name' => 'RAMON RIVERA HENRY FABIAN',
            'ci' => '0102288776',
            'phone' => '',
            'email' => 'henry.ramon@funcionjudicial.gob.ec',
            'unidad_id' => 2,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0102288776')
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
            'ci' => '0101848232',
            'phone' => '',
            'email' => 'martin.urgiles@funcionjudicial.gob.ec',
            'unidad_id' => 2,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0101848232')
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
            'ci' => '0106544422',
            'phone' => '',
            'email' => 'christian.chicaiza@funcionjudicial.gob.ec',
            'unidad_id' => 3,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0106544422')
        ]);
        User::create([
            'name' => 'CONDOR VINTIMILLA JUAN PABLO',
            'ci' => '0103815296',
            'phone' => '',
            'email' => 'juan.condor@funcionjudicial.gob.ec',
            'unidad_id' => 3,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0103815296')
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
            'ci' => '0104973474',
            'phone' => '',
            'email' => 'juan.ordonez@funcionjudicial.gob.ec',
            'unidad_id' => 3,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0104973474')
        ]);
        User::create([
            'name' => 'ORTEGA PALACIOS NOELIA JANINA',
            'ci' => '0301910063',
            'phone' => '',
            'email' => 'noelia.ortega@funcionjudicial.gob.ec',
            'unidad_id' => 3,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0301910063')
        ]);
        User::create([
            'name' => 'PACHECO BORJA JOSUE SEBASTIAN',
            'ci' => '0103959193',
            'phone' => '',
            'email' => 'josue.pacheco@funcionjudicial.gob.ec',
            'unidad_id' => 3,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0103959193')
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
            'ci' => '1723949010',
            'phone' => '',
            'email' => 'liliam.restrepo@funcionjudicial.gob.ec',
            'unidad_id' => 5,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('1723949010')
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


/////////////////copiar desde aqui ***********


        //unidad_id "24"

	    User::create([
            'name' => 'CAÑIZARES RAMON ANDREA CRISTINA',
            'ci' => '0103863718',
            'phone' => '',
            'email' => 'andrea.canizares@funcionjudicial.gob.ec',
            'unidad_id' => 24,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0103863718')
        ]);

	    User::create([
            'name' => 'CARDENAS PALLAZHCO WILSON EDUARDO',
            'ci' => '0102703766',
            'phone' => '',
            'email' => 'wilson.cardenas@funcionjudicial.gob.ec',
            'unidad_id' => 24,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0102703766')
        ]);

	    User::create([
            'name' => 'COUSSEAU IGLESIAS JUAN ANDRES',
            'ci' => '0102408960',
            'phone' => '',
            'email' => 'juan.cousseau@funcionjudicial.gob.ec',
            'unidad_id' => 24,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0102408960')
        ]);

        User::create([
            'name' => 'CUZME ORTEGA KARINA ELIZABETH',
            'ci' => '0918142837',
            'phone' => '',
            'email' => 'karina.cuzme@funcionjudicial.gob.ec',
            'unidad_id' => 24,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0918142837')
        ]);

        User::create([
            'name' => 'LOPEZ HUERTA SEBASTIAN MATEO',
            'ci' => '0103447124',
            'phone' => '',
            'email' => 'sebastian.lopez@funcionjudicial.gob.ec',
            'unidad_id' => 24,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0103447124')
        ]);

        User::create([
            'name' => 'LOPEZ VINTIMILLA MARIA TRINIDAD',
            'ci' => '0104818927',
            'phone' => '',
            'email' => 'trinidad.lopez@funcionjudicial.gob.ec',
            'unidad_id' => 24,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0104818927')
        ]);

        User::create([
            'name' => 'VANEGAS MIÑACA MARITZA CATALINA',
            'ci' => '0104162094',
            'phone' => '',
            'email' => 'maritza.vanegas@funcionjudicial.gob.ec',
            'unidad_id' => 24,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0104162094')
        ]);

        //unidad_id "26"

        User::create([
            'name' => 'BRAVO NUÑEZ ASTRID DEL CISNE',
            'ci' => '1104497068',
            'phone' => '',
            'email' => 'astrid.bravo@funcionjudicial.gob.ec',
            'unidad_id' => 26,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('1104497068')
        ]);


        User::create([
            'name' => 'LAMBERT MOSCOSO INGRID LEONOR',
            'ci' => '0702399288',
            'phone' => '',
            'email' => 'ingrid.lambert@funcionjudicial.gob.ec',
            'unidad_id' => 26,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0702399288')
        ]);


        User::create([
            'name' => 'NARVAEZ SARATE EDISON RODRIGO',
            'ci' => '0105667968',
            'phone' => '',
            'email' => 'edison.narvaez@funcionjudicial.gob.ec',
            'unidad_id' => 26,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0105667968')
        ]);

        User::create([
            'name' => 'ROSALES PESANTEZ PAOLA CATALINA',
            'ci' => '0103734497',
            'phone' => '',
            'email' => 'paola.rosales@funcionjudicial.gob.ec',
            'unidad_id' => 26,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0103734497')
        ]);

        User::create([
            'name' => 'ORTEGA PAREDES MONICA CECILIA',
            'ci' => '0104766285',
            'phone' => '',
            'email' => 'monica.ortegap@funcionjudicial.gob.ec',
            'unidad_id' => 15,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0104766285')
        ]);

        User::create([
            'name' => 'TACURI SALTO ANGELICA MARIA',
            'ci' => '0105286553',
            'phone' => '',
            'email' => 'angelica.tacuri@funcionjudicial.gob.ec',
            'unidad_id' => 26,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0105286553')
        ]);

        //unidad_id "28"

        User::create([
            'name' => 'CARDENAS SALINAS JOMAIRA VANESA',
            'ci' => '1400639363',
            'phone' => '',
            'email' => 'jomaira.cardenas@funcionjudicial.gob.ec',
            'unidad_id' => 28,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('1400639363')
        ]);

        //unidad_id "34"

        User::create([
            'name' => 'AMOROSO ANDRADE SEBASTIAN',
            'ci' => '0104775499',
            'phone' => '',
            'email' => 'sebastian.amoroso@funcionjudicial.gob.ec',
            'unidad_id' => 34,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0104775499')
        ]);

        User::create([
            'name' => 'ANGULO VERA ANGIE MARIA',
            'ci' => '0940805815',
            'phone' => '',
            'email' => 'angie.angulo@funcionjudicial.gob.ec',
            'unidad_id' => 34,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0940805815')
        ]);

        User::create([
            'name' => 'BOLAÑOS CASTRO LUIS ALFREDO',
            'ci' => '0107580805',
            'phone' => '',
            'email' => 'luis.bolanos@funcionjudicial.gob.ec',
            'unidad_id' => 34,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0107580805')
        ]);

        User::create([
            'name' => 'FAJARDO ALVARADO GABRIELA VERONICA',
            'ci' => '0106528086',
            'phone' => '',
            'email' => 'gabriela.fajardo@funcionjudicial.gob.ec',
            'unidad_id' => 34,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0106528086')
        ]);

        User::create([
            'name' => 'LORENA MONCERRAT JARAMILLO LARA',
            'ci' => '0102660156',
            'phone' => '',
            'email' => 'lorena.laraj@funcionjudicial.gob.ec',
            'unidad_id' => 34,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0102660156')
        ]);

        User::create([
            'name' => 'MACANCELA PULLA LUCIA BEATRIZ',
            'ci' => '0103582276',
            'phone' => '',
            'email' => 'lucia.macancela@funcionjudicial.gob.ec',
            'unidad_id' => 34,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0103582276')
        ]);

        User::create([
            'name' => 'MUÑOZ IÑIGUEZ LENIN FABIAN',
            'ci' => '0102502713',
            'phone' => '',
            'email' => 'Lenin.Munoz@funcionjudicial.gob.ec',
            'unidad_id' => 34,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0102502713')
        ]);

        User::create([
            'name' => 'ORDOÑEZ PLACENCIA DORA ESPERANZA',
            'ci' => '0103841425',
            'phone' => '',
            'email' => 'dora.ordonez@funcionjudicial.gob.ec',
            'unidad_id' => 34,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0103841425')
        ]);

        User::create([
            'name' => 'ORDOÑEZ ZAMBRANO ANA CECILIA',
            'ci' => '0103416020',
            'phone' => '',
            'email' => 'ana.ordonezz@funcionjudicial.gob.ec',
            'unidad_id' => 34,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0103416020')
        ]);

        User::create([
            'name' => 'VALVERDE ORDOÑEZ LUZ OSMARA',
            'ci' => '0703117317',
            'phone' => '',
            'email' => 'luz.valverde@funcionjudicial.gob.ec',
            'unidad_id' => 34,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0703117317')
        ]);

        User::create([
            'name' => 'ZAMBRANO ZUÑIGA DIEGO FABIAN',
            'ci' => '0105099626',
            'phone' => '',
            'email' => 'diego.zambrano@funcionjudicial.gob.ec',
            'unidad_id' => 34,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0105099626')
        ]);

        //unidad_id "35"

        User::create([
            'name' => 'FLORES FLORES MARIA ANGELICA',
            'ci' => '0107143489',
            'phone' => '',
            'email' => 'maria.floresf@funcionjudicial.gob.ec',
            'unidad_id' => 35,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0107143489')
        ]);

        User::create([
            'name' => 'SARMIENTO SARMIENTO ANDREA KARINA',
            'ci' => '0105254411',
            'phone' => '',
            'email' => 'andrea.sarmiento@funcionjudicial.gob.ec',
            'unidad_id' => 35,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0105254411')
        ]);

        User::create([
            'name' => 'VASQUEZ ROJAS MARIA CECILIA',
            'ci' => '0104806534',
            'phone' => '',
            'email' => 'maria.vasquezr@funcionjudicial.gob.ec',
            'unidad_id' => 35,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0104806534')
        ]);

        User::create([
            'name' => 'VAZQUEZ WEBSTER PAOLA ALEXANDRA',
            'ci' => '0704520576',
            'phone' => '',
            'email' => 'paola.vazquez@funcionjudicial.gob.ec',
            'unidad_id' => 35,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0704520576')
        ]);

        User::create([
            'name' => 'ZEA VINTIMILLA KARINA MAGDALENA',
            'ci' => '0104162128',
            'phone' => '',
            'email' => 'karina.zea@funcionjudicial.gob.ec',
            'unidad_id' => 35,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0104162128')
        ]);

        //unidad_id "36"

        User::create([
            'name' => 'CORDERO ALVEAR MARIO GERARDO',
            'ci' => '0102661196',
            'phone' => '',
            'email' => 'mario.cordero@funcionjudicial.gob.ec',
            'unidad_id' => 36,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0102661196')
        ]);

        User::create([
            'name' => 'GUALLPA LUIS MANUEL',
            'ci' => '0301069027',
            'phone' => '',
            'email' => 'luis.guallpa@funcionjudicial.gob.ec',
            'unidad_id' => 36,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0301069027')
        ]);

        User::create([
            'name' => 'MALDONADO RAMIREZ DIEGO OSWALDO',
            'ci' => '0102424413',
            'phone' => '',
            'email' => 'diego.maldonador@funcionjudicial.gob.ec',
            'unidad_id' => 36,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0102424413')
        ]);

        User::create([
            'name' => 'IÑIGUEZ RODRIGUEZ TERESITA',
            'ci' => '0301044525',
            'phone' => '',
            'email' => 'teresita.iniguez@funcionjudicial.gob.ec',
            'unidad_id' => 36,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0301044525')
        ]);

        User::create([
            'name' => 'MENDIETA OCHOA MONICA MERCI',
            'ci' => '0101850386',
            'phone' => '',
            'email' => 'monica.mendieta@funcionjudicial.gob.ec',
            'unidad_id' => 36,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0101850386')
        ]);

        User::create([
            'name' => 'TOBAR SOLANO MARCO AURELIO',
            'ci' => '0101876951',
            'phone' => '',
            'email' => 'marco.tobar@funcionjudicial.gob.ec',
            'unidad_id' => 36,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0101876951')
        ]);

        //unidad_id "37"

        User::create([
            'name' => 'ARMIJOS BERMEO ROBERTO DANIEL',
            'ci' => '0104146311',
            'phone' => '',
            'email' => 'roberto.armijos@funcionjudicial.gob.ec',
            'unidad_id' => 37,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0104146311')
        ]);

        User::create([
            'name' => 'CORDERO LOPEZ JAVIER CRISTOBAL',
            'ci' => '0102204013',
            'phone' => '',
            'email' => 'javier.cordero@funcionjudicial.gob.ec',
            'unidad_id' => 37,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0102204013')
        ]);

        User::create([
            'name' => 'CRESPO CRESPO MIGUEL AGUSTIN',
            'ci' => '0301096889',
            'phone' => '',
            'email' => 'miguel.crespo@funcionjudicial.gob.ec',
            'unidad_id' => 37,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0301096889')
        ]);

        User::create([
            'name' => 'CARDENAS INGA SANDRA FABIOLA',
            'ci' => '0104083928',
            'phone' => '',
            'email' => 'sandra.cardenas@funcionjudicial.gob.ec',
            'unidad_id' => 37,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0104083928')
        ]);

        User::create([
            'name' => 'FERNANDEZ DE CORDOVA MARIA DANIELA',
            'ci' => '0103672416',
            'phone' => '',
            'email' => 'maria.fernandezdecor@funcionjudicial.gob.ec',
            'unidad_id' => 37,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0103672416')
        ]);

        User::create([
            'name' => 'JIMENEZ LARRIVA PAUL ESTEBAN',
            'ci' => '0102283561',
            'phone' => '',
            'email' => 'paul.jimenez@funcionjudicial.gob.ec',
            'unidad_id' => 37,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0102283561')
        ]);

        User::create([
            'name' => 'INGA CABRERA MARIA LORENA',
            'ci' => '0102519592',
            'phone' => '',
            'email' => 'lorena.inga@funcionjudicial.gob.ec',
            'unidad_id' => 37,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0102519592')
        ]);

        User::create([
            'name' => 'MOROCHO AVILA ZOILA MARIA',
            'ci' => '0102996915',
            'phone' => '',
            'email' => 'zoila.morocho@funcionjudicial.gob.ec',
            'unidad_id' => 37,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0102996915')
        ]);

        User::create([
            'name' => 'ORDOÑEZ GUICHAY ANA LUCIA',
            'ci' => '0102436284',
            'phone' => '',
            'email' => 'ana.ordonezg@funcionjudicial.gob.ec',
            'unidad_id' => 37,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0102436284')
        ]);

        User::create([
            'name' => 'SINALUISA CHECA SANDRA MARIELA',
            'ci' => '0604087395',
            'phone' => '',
            'email' => 'sandra.sinaluisa@funcionjudicial.gob.ec',
            'unidad_id' => 37,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0604087395')
        ]);


        User::create([
            'name' => 'URGILES LEON GONZALO HUMBERTO',
            'ci' => '0101301786',
            'phone' => '',
            'email' => 'gonzalo.urgiles@funcionjudicial.gob.ec',
            'unidad_id' => 37,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0101301786')
        ]);

        User::create([
            'name' => 'URGILES PACHECO PRISCILA PAULINA',
            'ci' => '0104841523',
            'phone' => '',
            'email' => 'priscila.urgiles@funcionjudicial.gob.ec',
            'unidad_id' => 37,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0104841523')
        ]);

        User::create([
            'name' => 'VASQUEZ PAREDES JOSE ALFREDO',
            'ci' => '0102646346',
            'phone' => '',
            'email' => 'jose.vasquezp@funcionjudicial.gob.ec',
            'unidad_id' => 37,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0102646346')
        ]);

        User::create([
            'name' => 'VINTIMILLA ZEA DIANA ALEXANDRA',
            'ci' => '0102114287',
            'phone' => '',
            'email' => 'diana.vintimilla@funcionjudicial.gob.ec',
            'unidad_id' => 37,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0102114287')
        ]);

        //unidad_id "38"

        User::create([
            'name' => 'ANDRADE JARA JAIME EDMUNDO',
            'ci' => '0100885078',
            'phone' => '',
            'email' => 'jaime.andrade@funcionjudicial.gob.ec',
            'unidad_id' => 38,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0100885078')
        ]);

        User::create([
            'name' => 'BARAHONA QUIZHPE LUIS FRANKLIN',
            'ci' => '0104032610',
            'phone' => '',
            'email' => 'luis.barahona@funcionjudicial.gob.ec',
            'unidad_id' => 38,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0104032610')
        ]);

        User::create([
            'name' => 'BELTRAN CASTRO PAOLA FERNANDA',
            'ci' => '0104453949',
            'phone' => '',
            'email' => 'paola.beltran@funcionjudicial.gob.ec',
            'unidad_id' => 38,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0104453949')
        ]);

        User::create([
            'name' => 'BERMEO QUIZHPE JOHNNY JAVIER',
            'ci' => '0105644496',
            'phone' => '',
            'email' => 'johnny.bermeo@funcionjudicial.gob.ec',
            'unidad_id' => 38,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0105644496')
        ]);

        User::create([
            'name' => 'FAREZ DOMINGUEZ MARCOS VINICIO',
            'ci' => '0105900294',
            'phone' => '',
            'email' => 'marcos.farez@funcionjudicial.gob.ec',
            'unidad_id' => 38,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0105900294')
        ]);

        User::create([
            'name' => 'FLOREZ GRANADOS LINA MARIA',
            'ci' => '0104995022',
            'phone' => '',
            'email' => 'lina.flores@funcionjudicial.gob.ec',
            'unidad_id' => 38,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0104995022')
        ]);

        User::create([
            'name' => 'IÑIGUEZ GUERRA JORGE BLADIMIR',
            'ci' => '1103908479',
            'phone' => '',
            'email' => 'jorge.iniguez@funcionjudicial.gob.ec',
            'unidad_id' => 38,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('1103908479')
        ]);

        User::create([
            'name' => 'INIGUEZ GUERRERO FRANCISCO JAVIER',
            'ci' => '0104637764',
            'phone' => '',
            'email' => 'javier.iniguez@funcionjudicial.gob.ec',
            'unidad_id' => 38,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0104637764')
        ]);

        User::create([
            'name' => 'JARA ORELLANA EDISON ALEXANDER',
            'ci' => '0105352165',
            'phone' => '',
            'email' => 'edison.jara@funcionjudicial.gob.ec',
            'unidad_id' => 38,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0105352165')
        ]);

        User::create([
            'name' => 'LLIVICURA TACURI JÉSICA IVONNE',
            'ci' => '0102865110',
            'phone' => '',
            'email' => 'jesica.llivicura@funcionjudicial.gob.ec',
            'unidad_id' => 38,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0102865110')
        ]);

        User::create([
            'name' => 'NARVAEZ NARVAEZ DIANA KARINA',
            'ci' => '0102877776',
            'phone' => '',
            'email' => 'diana.narvaez@funcionjudicial.gob.ec',
            'unidad_id' => 38,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0102877776')
        ]);

        User::create([
            'name' => 'ORDOÑEZ SOLORZANO MARIA DEL CARMEN',
            'ci' => '0301563037',
            'phone' => '',
            'email' => 'maria.ordonez@funcionjudicial.gob.ec',
            'unidad_id' => 38,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0301563037')
        ]);

        User::create([
            'name' => 'PABON ORTIZ LUIS FELIPE',
            'ci' => '1716930191',
            'phone' => '',
            'email' => 'luis.pabon@funcionjudicial.gob.ec',
            'unidad_id' => 38,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('1716930191')
        ]);

        User::create([
            'name' => 'SERRANO RODRIGUEZ CAYETANO ALFREDO',
            'ci' => '0101781920',
            'phone' => '',
            'email' => 'cayetano.serrano@funcionjudicial.gob.ec',
            'unidad_id' => 38,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0101781920')
        ]);

        User::create([
            'name' => 'SARMIENTO DAVILA ADRIAN PATRICIO',
            'ci' => '0102260981',
            'phone' => '',
            'email' => 'adrian.sarmiento@funcionjudicial.gob.ec',
            'unidad_id' => 38,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0102260981')
        ]);

        User::create([
            'name' => 'TELLO RIOFRIO KIMBERLY CRSITABEL',
            'ci' => '0705304293',
            'phone' => '',
            'email' => 'kimberly.tello@funcionjudicial.gob.ec',
            'unidad_id' => 38,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0705304293')
        ]);

        //unidad_id "39"

        User::create([
            'name' => 'BRAVO ASTUDILLO TAMARA KATHERINE',
            'ci' => '1709346116',
            'phone' => '',
            'email' => 'tamara.bravo@funcionjudicial.gob.ec',
            'unidad_id' => 39,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('1709346116')
        ]);

        User::create([
            'name' => 'CALLE SARMIENTO MARIANITA DE JESUS',
            'ci' => '0301229787',
            'phone' => '',
            'email' => 'marianita.calle@funcionjudicial.gob.ec',
            'unidad_id' => 39,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0301229787')
        ]);

        User::create([
            'name' => 'ALVAREZ LIBERIO YANINA SUSANA',
            'ci' => '0922559588',
            'phone' => '',
            'email' => 'yanina.alvarez@funcionjudicial.gob.ec',
            'unidad_id' => 39,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0922559588')
        ]);

        User::create([
            'name' => 'BERNAL OCHOA MARIA BELEN',
            'ci' => '0105565550',
            'phone' => '',
            'email' => 'maria.bernal@funcionjudicial.gob.ec',
            'unidad_id' => 39,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0105565550')
        ]);

        User::create([
            'name' => 'BLANCA MARLENE MENDOZA CAMPOVERDE',
            'ci' => '0302163456',
            'phone' => '',
            'email' => 'blanca.mendozac@funcionjudicial.gob.ec',
            'unidad_id' => 39,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0302163456')
        ]);

        User::create([
            'name' => 'CARDENAS ANDRADE ANITA  SOFIA',
            'ci' => '0300984499',
            'phone' => '',
            'email' => 'anita.cardenas@funcionjudicial.gob.ec',
            'unidad_id' => 39,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0300984499')
        ]);

        User::create([
            'name' => 'CHASI DOMINGUEZ WILLIAM EUGENIO',
            'ci' => '0103896106',
            'phone' => '',
            'email' => 'william.chasi@funcionjudicial.gob.ec',
            'unidad_id' => 39,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0103896106')
        ]);

        User::create([
            'name' => 'GUARACA MALDONADO FAVIO ALEJANDRO',
            'ci' => '0102713088',
            'phone' => '',
            'email' => 'favio.guaraca@funcionjudicial.gob.ec',
            'unidad_id' => 39,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0102713088')
        ]);

        User::create([
            'name' => 'CORDOVA JERVES PABLO ESTEBAN',
            'ci' => '0102286457',
            'phone' => '',
            'email' => 'pablo.cordova@funcionjudicial.gob.ec',
            'unidad_id' => 39,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0102286457')
        ]);

        User::create([
            'name' => 'JERVEZ PUENTE CARLOS ALBERTO',
            'ci' => '0703686824',
            'phone' => '',
            'email' => 'carlos.jervez@funcionjudicial.gob.ec',
            'unidad_id' => 39,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0703686824')
        ]);

        User::create([
            'name' => 'LEON CALLE ALEXANDRA LILIANA',
            'ci' => '0103244612',
            'phone' => '',
            'email' => 'alexandra.leon@funcionjudicial.gob.ec',
            'unidad_id' => 39,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0103244612')
        ]);

        User::create([
            'name' => 'IGLESIAS MOLINA SANTIAGO ALONSO',
            'ci' => '0301403036',
            'phone' => '',
            'email' => 'santiago.iglesias@funcionjudicial.gob.ec',
            'unidad_id' => 39,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0301403036')
        ]);

        User::create([
            'name' => 'MONCAYO CUENCA EDUARDO JAVIER',
            'ci' => '1104258106',
            'phone' => '',
            'email' => 'eduardo.moncayo@funcionjudicial.gob.ec',
            'unidad_id' => 39,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('1104258106')
        ]);

        User::create([
            'name' => 'LEON VINTIMILLA CARLOS OSWALDO',
            'ci' => '0104244520',
            'phone' => '',
            'email' => 'carlos.leonv@funcionjudicial.gob.ec',
            'unidad_id' => 39,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0104244520')
        ]);

        User::create([
            'name' => 'MACHUCA MOSQUERA JULIETA GUADALUPE',
            'ci' => '0102142379',
            'phone' => '',
            'email' => 'julieta.machuca@funcionjudicial.gob.ec',
            'unidad_id' => 39,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0102142379')
        ]);

        User::create([
            'name' => 'ORELLANA MAYORGA MIRIAM INMACULADA',
            'ci' => '0102252145',
            'phone' => '',
            'email' => 'miriam.orellana@funcionjudicial.gob.ec',
            'unidad_id' => 39,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0102252145')
        ]);

        User::create([
            'name' => 'PAÑORA PAÑORA MARIA ISABEL',
            'ci' => '0102812617',
            'phone' => '',
            'email' => 'maria.panora@funcionjudicial.gob.ec',
            'unidad_id' => 39,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0102812617')
        ]);

        User::create([
            'name' => 'QUINTERO LOPEZ MARIA SORAYA',
            'ci' => '0103852984',
            'phone' => '',
            'email' => 'maria.quintero@funcionjudicial.gob.ec',
            'unidad_id' => 39,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0103852984')
        ]);

        User::create([
            'name' => 'POLO VEGA DOLORES CARLINA',
            'ci' => '0104861190',
            'phone' => '',
            'email' => 'dolores.polo@funcionjudicial.gob.ec',
            'unidad_id' => 39,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0104861190')
        ]);

        User::create([
            'name' => 'PRIETO CENTENO MARIA ELENA',
            'ci' => '0103386777',
            'phone' => '',
            'email' => 'maria.prieto@funcionjudicial.gob.ec',
            'unidad_id' => 39,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0103386777')
        ]);

        User::create([
            'name' => 'PROAÑO ESCANDON JOSE  EDUARDO',
            'ci' => '0102050507',
            'phone' => '',
            'email' => 'jose.proanoe@funcionjudicial.gob.ec',
            'unidad_id' => 39,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0102050507')
        ]);

        User::create([
            'name' => 'PUGA CHILLOGALLI TANYA MARICELA',
            'ci' => '0104287701',
            'phone' => '',
            'email' => 'tanya.puga@funcionjudicial.gob.ec',
            'unidad_id' => 39,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0104287701')
        ]);

        User::create([
            'name' => 'PULLA SALINAS JUAN PABLO',
            'ci' => '0104727524',
            'phone' => '',
            'email' => 'juan.pulla@funcionjudicial.gob.ec',
            'unidad_id' => 39,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0104727524')
        ]);

        User::create([
            'name' => 'REGALADO CORDERO JUAN PABLO',
            'ci' => '0104973482',
            'phone' => '',
            'email' => 'juan.regalado@funcionjudicial.gob.ec',
            'unidad_id' => 39,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0104973482')
        ]);

        User::create([
            'name' => 'ROMERO CRIOLLO GREIS DE LA ALVA',
            'ci' => '0301143483',
            'phone' => '',
            'email' => 'greis.romero@funcionjudicial.gob.ec',
            'unidad_id' => 39,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0301143483')
        ]);

        User::create([
            'name' => 'SAA MERCHAN JOSE ALEJANDRO',
            'ci' => '0103617650',
            'phone' => '',
            'email' => 'jose.saa@funcionjudicial.gob.ec',
            'unidad_id' => 39,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0103617650')
        ]);

        User::create([
            'name' => 'SANCHEZ GUZMAN FREDDY DARIO',
            'ci' => '0103783957',
            'phone' => '',
            'email' => 'freddy.sanchez@funcionjudicial.gob.ec',
            'unidad_id' => 39,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0103783957')
        ]);

        User::create([
            'name' => 'SOTO PALACIOS LIZETH VERONICA',
            'ci' => '0102879038',
            'phone' => '',
            'email' => 'lizeth.soto@funcionjudicial.gob.ec',
            'unidad_id' => 39,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0102879038')
        ]);

        User::create([
            'name' => 'TORRES MARIA DOLORES',
            'ci' => '0103011078',
            'phone' => '',
            'email' => 'maria.torresd@funcionjudicial.gob.ec',
            'unidad_id' => 39,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0103011078')
        ]);

        User::create([
            'name' => 'TORRES DELGADO MARIA PAOLA',
            'ci' => '0103671855',
            'phone' => '',
            'email' => 'paola.torres@funcionjudicial.gob.ec',
            'unidad_id' => 39,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0103671855')
        ]);

        User::create([
            'name' => 'VASQUEZ ESCANDON DIEGO FEDERICO',
            'ci' => '0102417615',
            'phone' => '',
            'email' => 'diego.vasqueze@funcionjudicial.gob.ec',
            'unidad_id' => 39,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0102417615')
        ]);

        User::create([
            'name' => 'VEGA AMAY EDDY PATRICIO',
            'ci' => '0104354071',
            'phone' => '',
            'email' => 'eddy.vega@funcionjudicial.gob.ec',
            'unidad_id' => 39,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0104354071')
        ]);

        //unidad_id "41"

        User::create([
            'name' => 'DAVILA CORDERO JANNETH PRICILA',
            'ci' => '0102291028',
            'phone' => '',
            'email' => 'priscila.davila@funcionjudicial.gob.ec',
            'unidad_id' => 41,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0102291028')
        ]);

        User::create([
            'name' => 'GONZALEZ RUGEL ELBA MARIA',
            'ci' => '0103311502',
            'phone' => '',
            'email' => 'elba.gonzalez@funcionjudicial.gob.ec',
            'unidad_id' => 41,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0103311502')
        ]);

        User::create([
            'name' => 'MORENO SANCHEZ PAOLA CAROLINA',
            'ci' => '0103965919',
            'phone' => '',
            'email' => 'paola.moreno@funcionjudicial.gob.ec',
            'unidad_id' => 41,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0103965919')
        ]);

        //unidad_id "42"

        User::create([
            'name' => 'ALMEIDA BERMEO GUSTAVO EMILIANO',
            'ci' => '1709170623',
            'phone' => '',
            'email' => 'gustavo.almeida@funcionjudicial.gob.ec',
            'unidad_id' => 42,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('1709170623')
        ]);

        User::create([
            'name' => 'GRANDA TORAL MIRIAM MAGALLI',
            'ci' => '0102120060',
            'phone' => '',
            'email' => 'magaly.granda@funcionjudicial.gob.ec',
            'unidad_id' => 42,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0102120060')
        ]);

        User::create([
            'name' => 'CLAVIJO RODRIGUEZ CLAUDIO VINICIO',
            'ci' => '0102353869',
            'phone' => '',
            'email' => 'claudio.clavijo@funcionjudicial.gob.ec',
            'unidad_id' => 42,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0102353869')
        ]);

        User::create([
            'name' => 'CRESPO BRAVO ANA ISABEL',
            'ci' => '0303101240',
            'phone' => '',
            'email' => 'ana.crespo@funcionjudicial.gob.ec',
            'unidad_id' => 42,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0303101240')
        ]);

        User::create([
            'name' => 'CRESPO LOOR CESAR MARCELO',
            'ci' => '0104990684',
            'phone' => '',
            'email' => '',
            'unidad_id' => 42,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0104990684')
        ]);

        User::create([
            'name' => 'GUEVARA BACULIMA MARTHA DEL ROCIO',
            'ci' => '0102775624',
            'phone' => '',
            'email' => 'martha.guevara@funcionjudicial.gob.ec',
            'unidad_id' => 42,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0102775624')
        ]);

        User::create([
            'name' => 'LARRIVA GONZALEZ FERNANDO MAURICIO',
            'ci' => '0102054475',
            'phone' => '',
            'email' => 'mauricio.larriva@funcionjudicial.gob.ec',
            'unidad_id' => 42,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0102054475')
        ]);

        User::create([
            'name' => 'MORENO MOREJON FERNANDO PATRICIO',
            'ci' => '0102629227',
            'phone' => '',
            'email' => 'fernando.moreno@funcionjudicial.gob.ec',
            'unidad_id' => 42,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0102629227')
        ]);

        User::create([
            'name' => 'LEDESMA PACURUCU DIANA MARIA',
            'ci' => '0103243606',
            'phone' => '',
            'email' => 'diana.ledesma@funcionjudicial.gob.ec',
            'unidad_id' => 42,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0103243606')
        ]);

        User::create([
            'name' => 'MOROCHO ILLESCAS EDGAR NESTORIO',
            'ci' => '0101829331',
            'phone' => '',
            'email' => 'edgar.morocho@funcionjudicial.gob.ec',
            'unidad_id' => 42,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0101829331')
        ]);

        User::create([
            'name' => 'MEDINA GARCIA EFREN BOANERGES',
            'ci' => '1705988523',
            'phone' => '',
            'email' => 'efren.medina@funcionjudicial.gob.ec',
            'unidad_id' => 42,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('1705988523')
        ]);

        User::create([
            'name' => 'PACHECO BARROS JUAN LUIS',
            'ci' => '0101430569',
            'phone' => '',
            'email' => 'juan.pacheco@funcionjudicial.gob.ec',
            'unidad_id' => 42,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0101430569')
        ]);

        User::create([
            'name' => 'ORDOÑEZ ESPINOZA LUIS MIGUEL',
            'ci' => '1103882740',
            'phone' => '',
            'email' => 'luis.ordonez@funcionjudicial.gob.ec',
            'unidad_id' => 42,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('1103882740')
        ]);

        User::create([
            'name' => 'ORELLANA PONCE MARTHA PATRICIA',
            'ci' => '0102029428',
            'phone' => '',
            'email' => 'martha.orellana@funcionjudicial.gob.ec',
            'unidad_id' => 42,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0102029428')
        ]);

        User::create([
            'name' => 'PALOMEQUE LUNA YURI STALIN',
            'ci' => '0301000089',
            'phone' => '',
            'email' => 'yuri.palomeque@funcionjudicial.gob.ec',
            'unidad_id' => 42,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0301000089')
        ]);

        User::create([
            'name' => 'PACHECO SALTO OSWALDO',
            'ci' => '0102932878',
            'phone' => '',
            'email' => 'oswaldo.pacheco@funcionjudicial.gob.ec',
            'unidad_id' => 42,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0102932878')
        ]);

        User::create([
            'name' => 'PATIÑO RAMON ZAIDE BEATRIZ',
            'ci' => '0102460474',
            'phone' => '',
            'email' => 'zaide.patino@funcionjudicial.gob.ec',
            'unidad_id' => 42,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0102460474')
        ]);

        User::create([
            'name' => 'VALVERDE ORELLANA PABLO FERNANDO',
            'ci' => '0102353612',
            'phone' => '',
            'email' => 'pablo.valverde@funcionjudicial.gob.ec',
            'unidad_id' => 42,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0102353612')
        ]);

        User::create([
            'name' => 'VINTIMILLA GONZALEZ PABLO MAURICIO',
            'ci' => '0101695203',
            'phone' => '',
            'email' => 'pablo.vintimilla@funcionjudicial.gob.ec',
            'unidad_id' => 42,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0101695203')
        ]);

        User::create([
            'name' => 'VINUEZA ZAMBRANO SHIRLEY KARINA',
            'ci' => '0911368173',
            'phone' => '',
            'email' => 'karina.vinueza@funcionjudicial.gob.ec',
            'unidad_id' => 42,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0911368173')
        ]);

        //unidad_id "43"

        User::create([
            'name' => 'MOGOLLON CAMPOS MARIA EUGENIA',
            'ci' => '0101512713',
            'phone' => '',
            'email' => 'maria.mogollon@funcionjudicial.gob.ec',
            'unidad_id' => 43,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0101512713')
        ]);

        User::create([
            'name' => 'CORDERO GARATE SANDRA CATALINA',
            'ci' => '0102918901',
            'phone' => '',
            'email' => 'sandra.cordero@funcionjudicial.gob.ec',
            'unidad_id' => 43,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0102918901')
        ]);

        User::create([
            'name' => 'CEDILLO CASTRO PRISCILA BERNARDITA',
            'ci' => '0103370722',
            'phone' => '',
            'email' => 'priscila.cedillo@funcionjudicial.gob.ec',
            'unidad_id' => 43,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0103370722')
        ]);

        User::create([
            'name' => 'HUGO CORONEL LUIGI SALVATORE',
            'ci' => '0301264768',
            'phone' => '',
            'email' => 'luigi.hugo@funcionjudicial.gob.ec',
            'unidad_id' => 43,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0301264768')
        ]);

        User::create([
            'name' => 'MERCHAN CALLE MARIA AUGUSTA',
            'ci' => '0102154911',
            'phone' => '',
            'email' => 'maria.merchanc@funcionjudicial.gob.ec',
            'unidad_id' => 43,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0102154911')
        ]);

        User::create([
            'name' => 'PALACIOS CORONEL AIDA OFELIA',
            'ci' => '0301277570',
            'phone' => '',
            'email' => 'aida.palacios@funcionjudicial.gob.ec',
            'unidad_id' => 43,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0301277570')
        ]);


        User::create([
            'name' => 'ORTIZ ORTEGA JUANA LORENA',
            'ci' => '0102698313',
            'phone' => '',
            'email' => 'juana.ortiz@funcionjudicial.gob.ec',
            'unidad_id' => 43,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0102698313')
        ]);

        User::create([
            'name' => 'PADRON CORREA VIVIANA PATRICIA',
            'ci' => '0302031232',
            'phone' => '',
            'email' => 'viviana.padron@funcionjudicial.gob.ec',
            'unidad_id' => 43,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0302031232')
        ]);

        User::create([
            'name' => 'PEÑA GONZÁLEZ ANDREA DANIELA',
            'ci' => '0103985172',
            'phone' => '',
            'email' => 'andrea.penag@funcionjudicial.gob.ec',
            'unidad_id' => 43,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0103985172')
        ]);

        User::create([
            'name' => 'RIOS CORDERO ESTEBAN MATEO',
            'ci' => '0102594892',
            'phone' => '',
            'email' => 'esteban.rios@funcionjudicial.gob.ec',
            'unidad_id' => 43,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0102594892')
        ]);

        User::create([
            'name' => 'VALLEJO BAZANTE BLANCA ALEXANDRA',
            'ci' => '1709790891',
            'phone' => '',
            'email' => 'blanca.vallejo@funcionjudicial.gob.ec',
            'unidad_id' => 43,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('1709790891')
        ]);

        //unidad_id "44"

        User::create([
            'name' => 'AGUIRRE ESTRELLA SANDRA ELIZABETH',
            'ci' => '0102051349',
            'phone' => '',
            'email' => 'sandra.aguirre@funcionjudicial.gob.ec',
            'unidad_id' => 44,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0102051349')
        ]);

        User::create([
            'name' => 'GARCIA LLIVISACA SILVIA ESPENZA',
            'ci' => '0102140746',
            'phone' => '',
            'email' => 'silvia.garcial@funcionjudicial.gob.ec',
            'unidad_id' => 44,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0102140746')
        ]);

        User::create([
            'name' => 'LOYOLA POLO EDGAR FERNANDO',
            'ci' => '0101567741',
            'phone' => '',
            'email' => 'edgar.loyola@funcionjudicial.gob.ec',
            'unidad_id' => 44,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0101567741')
        ]);

        User::create([
            'name' => 'JEANETH LOYOLA ILLESCAS',
            'ci' => '0102273497',
            'phone' => '',
            'email' => 'janeth.loyola@funcionjudicial.gob.ec',
            'unidad_id' => 44,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0102273497')
        ]);

        User::create([
            'name' => 'MULLA AVILA FREDDI HUMBERTO',
            'ci' => '0102288727',
            'phone' => '',
            'email' => 'freddi.mulla@funcionjudicial.gob.ec',
            'unidad_id' => 44,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0102288727')
        ]);

        User::create([
            'name' => 'SALINAS MOLINA JOHANA VICTORIA',
            'ci' => '0102311040',
            'phone' => '',
            'email' => 'johanna.salinas@funcionjudicial.gob.ec',
            'unidad_id' => 44,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0102311040')
        ]);

        //unidad_id "45"

        User::create([
            'name' => 'AGUIRRE BERMEO TANIA KATERINA',
            'ci' => '1103201461',
            'phone' => '',
            'email' => 'tania.aguirre@funcionjudicial.gob.ec',
            'unidad_id' => 45,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('1103201461')
        ]);

        User::create([
            'name' => 'AVILA ENDERICA EDGAR ALEJANDRO',
            'ci' => '0101962041',
            'phone' => '',
            'email' => 'edgar.avila@funcionjudicial.gob.ec',
            'unidad_id' => 45,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0101962041')
        ]);

        User::create([
            'name' => 'INGA YANZA JULIO CESAR',
            'ci' => '0101594976',
            'phone' => '',
            'email' => 'julio.inga@funcionjudicial.gob.ec',
            'unidad_id' => 45,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0101594976')
        ]);

        User::create([
            'name' => 'LOPEZ QUIZHPI JUAN CARLOS',
            'ci' => '0102676434',
            'phone' => '',
            'email' => 'juan.lopezq@funcionjudicial.gob.ec',
            'unidad_id' => 45,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0102676434')
        ]);

        User::create([
            'name' => 'OCHOA CHACON JENNY MONTSERRATH',
            'ci' => '0102135282',
            'phone' => '',
            'email' => 'jenny.ochoa@funcionjudicial.gob.ec',
            'unidad_id' => 45,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0102135282')
        ]);

        User::create([
            'name' => 'ORELLANA BRITO JANETH JIMENA',
            'ci' => '0102242120',
            'phone' => '',
            'email' => 'janeth.orellana@funcionjudicial.gob.ec',
            'unidad_id' => 45,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0102242120')
        ]);

        User::create([
            'name' => 'PALACIOS PALACIOS MARIA LORENA',
            'ci' => '0102340841',
            'phone' => '',
            'email' => 'lorena.palacios@funcionjudicial.gob.ec',
            'unidad_id' => 45,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0102340841')
        ]);

        User::create([
            'name' => 'RAMOS RAMOS MIRNA NARCISA',
            'ci' => '0601278625',
            'phone' => '',
            'email' => 'narcisa.ramos@funcionjudicial.gob.ec',
            'unidad_id' => 45,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0601278625')
        ]);

        User::create([
            'name' => 'VAZQUEZ MORENO JULIA ELENA',
            'ci' => '0801106147',
            'phone' => '',
            'email' => 'julia.vazquez@funcionjudicial.gob.ec',
            'unidad_id' => 45,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0801106147')
        ]);

        User::create([
            'name' => 'VICUÑA URGILES DIGNA LISSETTE',
            'ci' => '0102305679',
            'phone' => '',
            'email' => 'lissette.vicuna@funcionjudicial.gob.ec',
            'unidad_id' => 45,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0102305679')
        ]);

        User::create([
            'name' => 'VIVAR BIMOS MARIA CRISTINA',
            'ci' => '0102125911',
            'phone' => '',
            'email' => 'maria.vivar@funcionjudicial.gob.ec',
            'unidad_id' => 45,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0102125911')
        ]);

        //unidad_id "47"

        User::create([
            'name' => 'PINOS MALDONADO CARLOS LEONEL',
            'ci' => '0302318738',
            'phone' => '',
            'email' => 'carlos.pinos@funcionjudicial.gob.ec',
            'unidad_id' => 47,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0302318738')
        ]);

        //unidad_id "48"

        User::create([
            'name' => 'AUQUILLA QUINDE MELIDA BEATRIZ',
            'ci' => '0101031987',
            'phone' => '',
            'email' => 'melida.auquilla@funcionjudicial.gob.ec',
            'unidad_id' => 48,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0101031987')
        ]);

        User::create([
            'name' => 'PIEDRA ORAMAS CLARA MARÍA',
            'ci' => '0102107182',
            'phone' => '',
            'email' => 'clara.piedra@funcionjudicial.gob.ec',
            'unidad_id' => 48,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0102107182')
        ]);

        //unidad_id "50"


        User::create([
            'name' => 'ACURIO GORDON HOLGUER GERARDO',
            'ci' => '1801766526',
            'phone' => '',
            'email' => 'holguer.acurio@funcionjudicial.gob.ec',
            'unidad_id' => 50,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('1801766526')
        ]);

        User::create([
            'name' => 'AMAYA ALVAREZ FRANCISCA ARASELI',
            'ci' => '0103914388',
            'phone' => '',
            'email' => 'francisca.amaya@funcionjudicial.gob.ec',
            'unidad_id' => 50,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0103914388')
        ]);

        User::create([
            'name' => 'CARVAJAL ANDRADE HERNAN GABRIEL',
            'ci' => '0301077202',
            'phone' => '',
            'email' => 'hernan.carvajal@funcionjudicial.gob.ec',
            'unidad_id' => 50,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0301077202')
        ]);

        User::create([
            'name' => 'GUAICHA RIVERA WILMER AUGUSTO',
            'ci' => '0103412615',
            'phone' => '',
            'email' => 'wilmer.guaicha@funcionjudicial.gob.ec',
            'unidad_id' => 50,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0103412615')
        ]);

        User::create([
            'name' => 'GUILLEN OJEDA MARCY EDITH',
            'ci' => '0702029083',
            'phone' => '',
            'email' => 'marcy.guillen@funcionjudicial.gob.ec',
            'unidad_id' => 50,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0702029083')
        ]);

        User::create([
            'name' => 'MONTENEGRO VERDUGO HAMILTON ANTONIO',
            'ci' => '0302165592',
            'phone' => '',
            'email' => 'hamilton.montenegro@funcionjudicial.gob.ec',
            'unidad_id' => 50,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0302165592')
        ]);

        User::create([
            'name' => 'ANDRADE CARDENAS ROMAN DE JESUS',
            'ci' => '0300985462',
            'phone' => '',
            'email' => 'roman.andrade@funcionjudicial.gob.ec',
            'unidad_id' => 50,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0300985462')
        ]);

        User::create([
            'name' => 'SERRANO CARDENAS RICHARD FABIAN',
            'ci' => '0104314067',
            'phone' => '',
            'email' => 'richard.serrano@funcionjudicial.gob.ec',
            'unidad_id' => 50,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0104314067')
        ]);

        User::create([
            'name' => 'SOLIS ARICHAVALA ISRAEL OSWALDO',
            'ci' => '0103892212',
            'phone' => '',
            'email' => 'israel.solis@funcionjudicial.gob.ec',
            'unidad_id' => 50,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0103892212')
        ]);

        User::create([
            'name' => 'ANDRADE AMOROSO ARTURO VINICIO',
            'ci' => '0300899606',
            'phone' => '',
            'email' => 'arturo.andrade@funcionjudicial.gob.ec',
            'unidad_id' => 50,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0300899606')
        ]);

        User::create([
            'name' => 'AYALA LITUMA RENATO BOLIVAR',
            'ci' => '0102223492',
            'phone' => '',
            'email' => 'renato.ayala@funcionjudicial.gob.ec',
            'unidad_id' => 50,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0102223492')
        ]);

        User::create([
            'name' => 'FRANCISCO SANTIAGO MERCHAN RODAS',
            'ci' => '0102339322',
            'phone' => '',
            'email' => 'francisco.merchan@funcionjudicial.gob.ec',
            'unidad_id' => 50,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0102339322')
        ]);

        User::create([
            'name' => 'JUAREZ SEGARRA MICHAEL ALEXANDRA',
            'ci' => '0103402459',
            'phone' => '',
            'email' => 'michael.juarez@funcionjudicial.gob.ec',
            'unidad_id' => 50,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0103402459')
        ]);

        User::create([
            'name' => 'GUERRA CORONEL RAUL FERNANDO',
            'ci' => '0106022965',
            'phone' => '',
            'email' => 'raul.guerra@funcionjudicial.gob.ec',
            'unidad_id' => 50,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0106022965')
        ]);

        User::create([
            'name' => 'LITUMA ULLOA GINA CECILIA',
            'ci' => '0103909826',
            'phone' => '',
            'email' => 'gina.lituma@funcionjudicial.gob.ec',
            'unidad_id' => 50,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0103909826')
        ]);

        User::create([
            'name' => 'LOJA NIVELO LUZ ALEGRIA',
            'ci' => '0104935705',
            'phone' => '',
            'email' => 'luz.loja@funcionjudicial.gob.ec',
            'unidad_id' => 50,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0104935705')
        ]);

        User::create([
            'name' => 'MEJIA VANEGAS TATIANA ELIZABETH',
            'ci' => '0106869498',
            'phone' => '',
            'email' => 'tatiana.mejia@funcionjudicial.gob.ec',
            'unidad_id' => 50,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0106869498')
        ]);

        User::create([
            'name' => 'MONTERO JACOME DIEGO LEONEL',
            'ci' => '0301931838',
            'phone' => '',
            'email' => 'diego.montero@funcionjudicial.gob.ec',
            'unidad_id' => 50,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0301931838')
        ]);

        User::create([
            'name' => 'MORENO GUAMAN ZOILA TERESA',
            'ci' => '0300712510',
            'phone' => '',
            'email' => 'zoila.moreno@funcionjudicial.gob.ec',
            'unidad_id' => 50,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0300712510')
        ]);

        User::create([
            'name' => 'PACHECO RODRIGUEZ EVA DEL PILAR',
            'ci' => '0301587606',
            'phone' => '',
            'email' => 'eva.pacheco@funcionjudicial.gob.ec',
            'unidad_id' => 50,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0301587606')
        ]);

        User::create([
            'name' => 'PATIÑO FLORES ALVARO PAUL',
            'ci' => '0301566451',
            'phone' => '',
            'email' => 'alvaro.patino@funcionjudicial.gob.ec',
            'unidad_id' => 50,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0301566451')
        ]);

        User::create([
            'name' => 'REGALADO ARCE EDWIN GEOVANNI',
            'ci' => '0301686390',
            'phone' => '',
            'email' => 'edwin.regalado@funcionjudicial.gob.ec',
            'unidad_id' => 50,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0301686390')
        ]);

        User::create([
            'name' => 'QUEZADA URGILES ESTEBAN XAVIER',
            'ci' => '0103093787',
            'phone' => '',
            'email' => 'esteban.quezada@funcionjudicial.gob.ec',
            'unidad_id' => 50,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0103093787')
        ]);

        User::create([
            'name' => 'RIVERA CAIMINAGUA MAGALY ROSMERY',
            'ci' => '0502198526',
            'phone' => '',
            'email' => 'magaly.rivera@funcionjudicial.gob.ec',
            'unidad_id' => 50,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0502198526')
        ]);

        User::create([
            'name' => 'TOLEDO VERDUGO DIANA CATALINA',
            'ci' => '0301570990',
            'phone' => '',
            'email' => 'diana.toledo@funcionjudicial.gob.ec',
            'unidad_id' => 50,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0301570990')
        ]);

        User::create([
            'name' => 'VILLA SAMANIEGO EDUARDO EFRAIN',
            'ci' => '0602922544',
            'phone' => '',
            'email' => 'eduardo.villa@funcionjudicial.gob.ec',
            'unidad_id' => 50,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0602922544')
        ]);

        //unidad_id "51"


        User::create([
            'name' => 'ASTUDILLO DURAN MARIA ELENA',
            'ci' => '0102079191',
            'phone' => '',
            'email' => 'maria.astudillod@funcionjudicial.gob.ec',
            'unidad_id' => 51,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0102079191')
        ]);

        User::create([
            'name' => 'CALLE LOJA ROSA ISABEL',
            'ci' => '0103992418',
            'phone' => '',
            'email' => 'rosa.calle@funcionjudicial.gob.ec',
            'unidad_id' => 51,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0103992418')
        ]);

        User::create([
            'name' => 'ASTUDILLO JARA VERONICA FERNANDA',
            'ci' => '0103206264',
            'phone' => '',
            'email' => 'veronica.astudillo@funcionjudicial.gob.ec',
            'unidad_id' => 51,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0103206264')
        ]);

        User::create([
            'name' => 'BARAHONA VASQUEZ GLADYS ALEXANDRA',
            'ci' => '0302009766',
            'phone' => '',
            'email' => 'gladys.barahona@funcionjudicial.gob.ec',
            'unidad_id' => 51,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0302009766')
        ]);

        User::create([
            'name' => 'BAUTISTA REA GUSTAVO HIPOLITO',
            'ci' => '0105514681',
            'phone' => '',
            'email' => 'gustavo.bautista@funcionjudicial.gob.ec',
            'unidad_id' => 51,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0105514681')
        ]);

        User::create([
            'name' => 'CASTILLO HUGO JOHANNA PATRICIA',
            'ci' => '0301681177',
            'phone' => '',
            'email' => 'johana.castillo@funcionjudicial.gob.ec',
            'unidad_id' => 51,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0301681177')
        ]);

        User::create([
            'name' => 'ESPINOZA GOMEZ MERCEDES NARCISA',
            'ci' => '0101830826',
            'phone' => '',
            'email' => 'mercedes.espinoza@funcionjudicial.gob.ec',
            'unidad_id' => 51,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0101830826')
        ]);

        User::create([
            'name' => 'LOPEZ REAL MARIA AUGUSTA',
            'ci' => '0103458329',
            'phone' => '',
            'email' => 'maria.lopezr@funcionjudicial.gob.ec',
            'unidad_id' => 51,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0103458329')
        ]);

        User::create([
            'name' => 'IÑIGUEZ AUQUILLA RENE OSWALDO',
            'ci' => '0101595791',
            'phone' => '',
            'email' => 'rene.iniguez@funcionjudicial.gob.ec',
            'unidad_id' => 51,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0101595791')
        ]);

        User::create([
            'name' => 'MOLINA ZHINDON BORIS ALFREDO',
            'ci' => '0103953931',
            'phone' => '',
            'email' => 'boris.molina@funcionjudicial.gob.ec',
            'unidad_id' => 51,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0103953931')
        ]);

        User::create([
            'name' => 'MURILLO VAZQUEZ LAURA MARICELA',
            'ci' => '0301262937',
            'phone' => '',
            'email' => 'laura.murillo@funcionjudicial.gob.ec',
            'unidad_id' => 51,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0301262937')
        ]);

        User::create([
            'name' => 'MALDONADO PESANTEZ MARIA FERNANDA',
            'ci' => '0103616496',
            'phone' => '',
            'email' => 'maria.maldonado@funcionjudicial.gob.ec',
            'unidad_id' => 51,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0103616496')
        ]);

        User::create([
            'name' => 'MORALES TAPIA SANDRA CATALINA',
            'ci' => '0102813375',
            'phone' => '',
            'email' => 'sandra.moralest@funcionjudicial.gob.ec',
            'unidad_id' => 51,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0102813375')
        ]);

        User::create([
            'name' => 'NARVAEZ SARATE NARCISA DE JESUS',
            'ci' => '0103800934',
            'phone' => '',
            'email' => 'narcisa.narvaez@funcionjudicial.gob.ec',
            'unidad_id' => 51,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0103800934')
        ]);

        User::create([
            'name' => 'NAVAS ABAD CESAR EUGENIO',
            'ci' => '0302423447',
            'phone' => '',
            'email' => 'cesar.navas@funcionjudicial.gob.ec',
            'unidad_id' => 51,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0302423447')
        ]);

        User::create([
            'name' => 'NIVELO CABRERA SONIA CECILIA',
            'ci' => '0102584638',
            'phone' => '',
            'email' => 'sonia.nivelo@funcionjudicial.gob.ec',
            'unidad_id' => 51,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0102584638')
        ]);

        User::create([
            'name' => 'ORELLANA FERNANDEZ FANNY PATRICIA',
            'ci' => '0104291802',
            'phone' => '',
            'email' => 'fanny.orellanaf@funcionjudicial.gob.ec',
            'unidad_id' => 51,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0104291802')
        ]);

        User::create([
            'name' => 'PACHECO GUTAMA SANDRA VERONICA',
            'ci' => '1900474121',
            'phone' => '',
            'email' => 'sandra.pacheco@funcionjudicial.gob.ec',
            'unidad_id' => 51,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('1900474121')
        ]);


        User::create([
            'name' => 'PRIETO MUÑOZ WILSON EDUARDO',
            'ci' => '0103556841',
            'phone' => '',
            'email' => 'wilson.prieto@funcionjudicial.gob.ec',
            'unidad_id' => 51,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0103556841')
        ]);

        User::create([
            'name' => 'SAETEROS MOLINA RAUL ALBERTO',
            'ci' => '0301840567',
            'phone' => '',
            'email' => 'raul.saeteros@funcionjudicial.gob.ec',
            'unidad_id' => 51,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0301840567')
        ]);

        User::create([
            'name' => 'SARMIENTO CASTRO JESSICA PAOLA',
            'ci' => '0301645933',
            'phone' => '',
            'email' => 'jessica.sarmiento@funcionjudicial.gob.ec',
            'unidad_id' => 51,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0301645933')
        ]);

        User::create([
            'name' => 'TACURI QUEZADA MARIA SOLEDAD',
            'ci' => '0104162359',
            'phone' => '',
            'email' => 'maria.tacuri@funcionjudicial.gob.ec',
            'unidad_id' => 51,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0104162359')
        ]);

        User::create([
            'name' => 'VERDUGO MENDOZA LEONARDO FABIAN',
            'ci' => '0301588349',
            'phone' => '',
            'email' => 'Leonardo.Verdugo@funcionjudicial.gob.ec',
            'unidad_id' => 51,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0301588349')
        ]);

        User::create([
            'name' => 'VIDAL SOLORZANO ROSA ANDREA',
            'ci' => '0301650602',
            'phone' => '',
            'email' => 'rosa.vidal@funcionjudicial.gob.ec',
            'unidad_id' => 51,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0301650602')
        ]);

        User::create([
            'name' => 'YUPANGUI PAGUAY VERONICA ALEXANDRA',
            'ci' => '0104972450',
            'phone' => '',
            'email' => 'veronica.yupangui@funcionjudicial.gob.ec',
            'unidad_id' => 51,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0104972450')
        ]);

        //unidad_id "52"


        User::create([
            'name' => 'QUEZADA MIRANDA DARWIN NAUM',
            'ci' => '0103525341',
            'phone' => '',
            'email' => 'darwin.quezada@funcionjudicial.gob.ec',
            'unidad_id' => 52,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0103525341')
        ]);

        User::create([
            'name' => 'CHAMBA VEGA CLARITA ASUNCION',
            'ci' => '1103381354',
            'phone' => '',
            'email' => 'clarita.chamba@funcionjudicial.gob.ec',
            'unidad_id' => 52,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('1103381354')
        ]);

        User::create([
            'name' => 'CARPIO ALEMAN ROMULO PATRICIO',
            'ci' => '0103131306',
            'phone' => '',
            'email' => 'romulo.carpio@funcionjudicial.gob.ec',
            'unidad_id' => 52,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0103131306')
        ]);

        User::create([
            'name' => 'GARATE ANDRADE JORGE LEONIDAS',
            'ci' => '0301225520',
            'phone' => '',
            'email' => 'jorge.garate@funcionjudicial.gob.ec',
            'unidad_id' => 52,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0301225520')
        ]);

        User::create([
            'name' => 'CORDERO SANMARTIN ANDRES PAUL',
            'ci' => '0103876447',
            'phone' => '',
            'email' => 'andres.cordero@funcionjudicial.gob.ec',
            'unidad_id' => 52,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0103876447')
        ]);

        User::create([
            'name' => 'MANZANO LAZO JOSE LUIS',
            'ci' => '0103333068',
            'phone' => '',
            'email' => 'jose.manzanol@funcionjudicial.gob.ec',
            'unidad_id' => 52,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0103333068')
        ]);

        User::create([
            'name' => 'PACHECO FERNANDEZ MAYRA LUCIA',
            'ci' => '0104666649',
            'phone' => '',
            'email' => 'mayra.pacheco@funcionjudicial.gob.ec',
            'unidad_id' => 52,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0104666649')
        ]);

        User::create([
            'name' => 'QUITO TENESACA FANNY ESPERANZA',
            'ci' => '0102499761',
            'phone' => '',
            'email' => 'fanny.quito@funcionjudicial.gob.ec',
            'unidad_id' => 52,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0102499761')
        ]);

        User::create([
            'name' => 'SAMANIEGO ZHUNIO DALILA ELIZABEH',
            'ci' => '0105968630',
            'phone' => '',
            'email' => 'dalila.samaniego@funcionjudicial.gob.ec',
            'unidad_id' => 52,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0105968630')
        ]);

        User::create([
            'name' => 'SEGOVIA PESANTEZ TELMO ENRIQUE',
            'ci' => '0101958361',
            'phone' => '',
            'email' => 'telmo.segovia@funcionjudicial.gob.ec',
            'unidad_id' => 52,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0101958361')
        ]);


        User::create([
            'name' => 'TORRES LLANGARI BOLIVAR VINICIO',
            'ci' => '1721870234',
            'phone' => '',
            'email' => 'bolivar.torresl@funcionjudicial.gob.ec',
            'unidad_id' => 52,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('1721870234')
        ]);

        //unidad_id "53"


        User::create([
            'name' => 'CUEVA MONTERO AMADO FERNANDO',
            'ci' => '1103503973',
            'phone' => '',
            'email' => 'fernando.cueva@funcionjudicial.gob.ec',
            'unidad_id' => 53,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('1103503973')
        ]);

        User::create([
            'name' => 'ANDRADE GARCIA ESTEBAN REMIGIO',
            'ci' => '0302175021',
            'phone' => '',
            'email' => 'esteban.andradeg@funcionjudicial.gob.ec',
            'unidad_id' => 53,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0302175021')
        ]);

        User::create([
            'name' => 'DIAZ ULLOA XIMENA ALEXANDRA',
            'ci' => '0103592978',
            'phone' => '',
            'email' => 'ximena.diaz@funcionjudicial.gob.ec',
            'unidad_id' => 53,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0103592978')
        ]);

        User::create([
            'name' => 'ESPINOZA GARCIA MARIA GABRIELA',
            'ci' => '0103977922',
            'phone' => '',
            'email' => 'maria.espinoza@funcionjudicial.gob.ec',
            'unidad_id' => 53,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0103977922')
        ]);

        User::create([
            'name' => 'JARA VILLACIS MONICA JOSEFINA',
            'ci' => '1714559893',
            'phone' => '',
            'email' => 'monica.jara@funcionjudicial.gob.ec',
            'unidad_id' => 53,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('1714559893')
        ]);

        User::create([
            'name' => 'MEJIA VANEGAS EDISON ANTONIO',
            'ci' => '0103579272',
            'phone' => '',
            'email' => 'edison.mejia@funcionjudicial.gob.ec',
            'unidad_id' => 53,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0103579272')
        ]);

        User::create([
            'name' => 'PANAMA SUSANA MAGDALENA',
            'ci' => '1706511456',
            'phone' => '',
            'email' => 'susana.panama@funcionjudicial.gob.ec',
            'unidad_id' => 53,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('1706511456')
        ]);

        User::create([
            'name' => 'QUIZHPI CRIOLLO ROGERIO TRINIDAD',
            'ci' => '0102709771',
            'phone' => '',
            'email' => 'rogerio.quizhpi@funcionjudicial.gob.ec',
            'unidad_id' => 53,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0102709771')
        ]);

        User::create([
            'name' => 'ROJAS ALVARADO ISABEL SUSANA',
            'ci' => '0104046305',
            'phone' => '',
            'email' => 'isabel.rojas@funcionjudicial.gob.ec',
            'unidad_id' => 53,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0104046305')
        ]);

        User::create([
            'name' => 'ROMAN SALCEDO WILLIAN GERARDO',
            'ci' => '0701377707',
            'phone' => '',
            'email' => 'willian.roman@funcionjudicial.gob.ec',
            'unidad_id' => 53,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0701377707')
        ]);

        //unidad_id "54"


        User::create([
            'name' => 'ILLARES LUPERCIO LUIS ALBERTO',
            'ci' => '0104677653',
            'phone' => '',
            'email' => 'luis.illares@funcionjudicial.gob.ec',
            'unidad_id' => 54,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0104677653')
        ]);

        User::create([
            'name' => 'VASQUEZ MEJIA RUBEN FERNANDO',
            'ci' => '0104631080',
            'phone' => '',
            'email' => 'ruben.vasquezm@funcionjudicial.gob.ec',
            'unidad_id' => 54,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0104631080')
        ]);

        User::create([
            'name' => 'AUQUILLA SORIA GABRIELA ISABEL',
            'ci' => '0104610563',
            'phone' => '',
            'email' => 'Gabriela.Auquilla@funcionjudicial.gob.ec',
            'unidad_id' => 54,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0104610563')
        ]);

        User::create([
            'name' => 'CASTILLO BANDA MARCO ANDREY',
            'ci' => '1104110505',
            'phone' => '',
            'email' => 'marco.castillo@funcionjudicial.gob.ec',
            'unidad_id' => 54,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('1104110505')
        ]);

        User::create([
            'name' => 'BACULIMA LLIVISACA GABRIEL ISMAEL',
            'ci' => '0105166185',
            'phone' => '',
            'email' => 'gabriel.baculima@funcionjudicial.gob.ec',
            'unidad_id' => 54,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0105166185')
        ]);

        User::create([
            'name' => 'CASTRO TELLO RAUL ANDRES',
            'ci' => '0104435615',
            'phone' => '',
            'email' => 'Raul.Castrot@funcionjudicial.gob.ec',
            'unidad_id' => 54,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0104435615')
        ]);

        User::create([
            'name' => 'CORREA PARRA MONICA GRACIELA',
            'ci' => '0102272572',
            'phone' => '',
            'email' => 'monica.correa@funcionjudicial.gob.ec',
            'unidad_id' => 54,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0102272572')
        ]);

        User::create([
            'name' => 'GALARZA CAMACHO MARILI DEL ROCIO',
            'ci' => '0703621235',
            'phone' => '',
            'email' => 'marili.galarza@funcionjudicial.gob.ec',
            'unidad_id' => 54,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0703621235')
        ]);

        User::create([
            'name' => 'MOLINA IZQUIERDO MAYRA PATRICIA',
            'ci' => '1400412969',
            'phone' => '',
            'email' => 'mayra.molinai@funcionjudicial.gob.ec',
            'unidad_id' => 54,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('1400412969')
        ]);

        User::create([
            'name' => 'VALDIVIEZO SIGUENZA NESTOR IVAN',
            'ci' => '0105249593',
            'phone' => '',
            'email' => 'nestor.valdiviezo@funcionjudicial.gob.ec',
            'unidad_id' => 54,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0105249593')
        ]);

        //unidad_id "55"


        User::create([
            'name' => 'CARRION TAPIA GILBERTO DAVID',
            'ci' => '0101707008',
            'phone' => '',
            'email' => 'david.carrion@funcionjudicial.gob.ec',
            'unidad_id' => 55,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0101707008')
        ]);

        User::create([
            'name' => 'ORDOÑEZ AGUIRRE IVAN SEVERO',
            'ci' => '0101710663',
            'phone' => '',
            'email' => 'ivan.ordonez@funcionjudicial.gob.ec',
            'unidad_id' => 55,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0101710663')
        ]);

        //unidad_id "56"


        User::create([
            'name' => 'LOJA DONAULA MARIA DEL CARMEN',
            'ci' => '0105015721',
            'phone' => '',
            'email' => 'maria.donaula@funcionjudicial.gob.ec',
            'unidad_id' => 56,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0105015721')
        ]);

        User::create([
            'name' => 'MALLA RIVAS ANDRES FERNANDO',
            'ci' => '0104371356',
            'phone' => '',
            'email' => 'andres.malla@funcionjudicial.gob.ec',
            'unidad_id' => 56,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0104371356')
        ]);

        User::create([
            'name' => 'SERRANO VALLEJO PAUL ESTEBAN',
            'ci' => '0103848842',
            'phone' => '',
            'email' => 'paul.serrano@funcionjudicial.gob.ec',
            'unidad_id' => 56,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0103848842')
        ]);

        //unidad_id "57"


        User::create([
            'name' => 'ARRIETA ROMERO SUCRE DANILO',
            'ci' => '0703937854',
            'phone' => '',
            'email' => 'sucre.arrieta@funcionjudicial.gob.ec',
            'unidad_id' => 57,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0703937854')
        ]);

        User::create([
            'name' => 'INDIO ZAMBRANO STEFANIA GEOMAR',
            'ci' => '0302861562',
            'phone' => '',
            'email' => 'stefania.indio@funcionjudicial.gob.ec',
            'unidad_id' => 57,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0302861562')
        ]);

        User::create([
            'name' => 'MALLA AYORA RICARDO HERIBERTO',
            'ci' => '0103943973',
            'phone' => '',
            'email' => 'ricardo.malla@funcionjudicial.gob.ec',
            'unidad_id' => 57,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0103943973')
        ]);

        User::create([
            'name' => 'BERMEO ULLOA JAIRO ROGER',
            'ci' => '0102829736',
            'phone' => '',
            'email' => 'jairo.bermeo@funcionjudicial.gob.ec',
            'unidad_id' => 57,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0102829736')
        ]);

        User::create([
            'name' => 'ROMERO BLACIO JUAN CARLOS',
            'ci' => '0705052165',
            'phone' => '',
            'email' => 'juan.romerob@funcionjudicial.gob.ec',
            'unidad_id' => 57,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0705052165')
        ]);

        //unidad_id "58"


        User::create([
            'name' => 'LEON VINTIMILLA DIANA CRISTINA',
            'ci' => '0104247457',
            'phone' => '',
            'email' => 'diana.leon@funcionjudicial.gob.ec',
            'unidad_id' => 58,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0104247457')
        ]);

        User::create([
            'name' => 'ALVARADO ALVAREZ FRANCISCA LUCRECIA',
            'ci' => '0102299880',
            'phone' => '',
            'email' => 'francisca.alvarado@funcionjudicial.gob.ec',
            'unidad_id' => 58,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0102299880')
        ]);

        User::create([
            'name' => 'CHALCO ESPARAZA GUIDIO ROLANDO',
            'ci' => '0102456514',
            'phone' => '',
            'email' => 'guido.chalco@funcionjudicial.gob.ec',
            'unidad_id' => 58,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0102456514')
        ]);

        User::create([
            'name' => 'CUNALATA DE LA ROSA MARGARITA LILIANA',
            'ci' => '0703441832',
            'phone' => '',
            'email' => 'margarita.cunalata@funcionjudicial.gob.ec',
            'unidad_id' => 58,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0703441832')
        ]);

        User::create([
            'name' => 'MOLINA LEON PABLO FERNANDO',
            'ci' => '0301204269',
            'phone' => '',
            'email' => 'pablo.molina@funcionjudicial.gob.ec',
            'unidad_id' => 58,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0301204269')
        ]);

        User::create([
            'name' => 'QUEZADA DUMAS JUAN CARLOS',
            'ci' => '0102156692',
            'phone' => '',
            'email' => 'Juan.Quezada@funcionjudicial.gob.ec',
            'unidad_id' => 58,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0102156692')
        ]);

        User::create([
            'name' => 'PESANTEZ SALCEDO ELENA CAROLINA',
            'ci' => '0104868021',
            'phone' => '',
            'email' => 'elena.pesantez@funcionjudicial.gob.ec',
            'unidad_id' => 58,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0104868021')
        ]);

        User::create([
            'name' => 'ROMO CARPIO BOLIVAR FABIAN',
            'ci' => '0300606308',
            'phone' => '',
            'email' => 'bolivar.romo@funcionjudicial.gob.ec',
            'unidad_id' => 58,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0300606308')
        ]);

        User::create([
            'name' => 'VANEGAS AGUILAR JUAN CARLOS',
            'ci' => '0102863750',
            'phone' => '',
            'email' => 'juan.vanegas@funcionjudicial.gob.ec',
            'unidad_id' => 58,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0102863750')
        ]);

        User::create([
            'name' => 'VINTIMILLA VINTIMILLA DANIEL FRANCISCO',
            'ci' => '0103788444',
            'phone' => '',
            'email' => 'daniel.vintimilla@funcionjudicial.gob.ec',
            'unidad_id' => 58,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0103788444')
        ]);

        //unidad_id "59"


        User::create([
            'name' => 'ALVARADO JARRIN SANDRA XIMENA',
            'ci' => '0104292461',
            'phone' => '',
            'email' => 'sandra.alvarado@funcionjudicial.gob.ec',
            'unidad_id' => 59,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0104292461')
        ]);

        User::create([
            'name' => 'SALGADO NOVILLO LUIS GERARDO',
            'ci' => '0104045745',
            'phone' => '',
            'email' => 'luis.salgado@funcionjudicial.gob.ec',
            'unidad_id' => 59,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0104045745')
        ]);

        User::create([
            'name' => 'ASTUDILLO PEÑAFIEL MARCOS ESTEBAN',
            'ci' => '0102572914',
            'phone' => '',
            'email' => 'marcos.astudillo@funcionjudicial.gob.ec',
            'unidad_id' => 59,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0102572914')
        ]);

        User::create([
            'name' => 'AVILA VIDAL JACQUELINE SOLEDAD',
            'ci' => '0102412822',
            'phone' => '',
            'email' => 'jacqueline.avila@funcionjudicial.gob.ec',
            'unidad_id' => 59,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0102412822')
        ]);

        User::create([
            'name' => 'BUSTAMANTE ANDRADE ANA DEL PILAR',
            'ci' => '0103072971',
            'phone' => '',
            'email' => 'ana.bustamante@funcionjudicial.gob.ec',
            'unidad_id' => 59,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0103072971')
        ]);

        User::create([
            'name' => 'CAGUANA CAGUANA MARIA MERCEDES',
            'ci' => '0301826384',
            'phone' => '',
            'email' => 'maria.caguana@funcionjudicial.gob.ec',
            'unidad_id' => 59,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0301826384')
        ]);

        User::create([
            'name' => 'FAJARDO BUÑAY PEDRO VINICIO',
            'ci' => '0105496186',
            'phone' => '',
            'email' => 'pedro.fajardo@funcionjudicial.gob.ec',
            'unidad_id' => 59,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0105496186')
        ]);

        User::create([
            'name' => 'CAÑIZARES CEVALLOS SEBASTIAN SANTIAGO',
            'ci' => '0105672596',
            'phone' => '',
            'email' => 'sebastian.canizares@funcionjudicial.gob.ec',
            'unidad_id' => 59,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0105672596')
        ]);

        User::create([
            'name' => 'CARDENAS OCHOA HENRY HONORATO',
            'ci' => '0301212007',
            'phone' => '',
            'email' => 'henry.cardenas@funcionjudicial.gob.ec',
            'unidad_id' => 59,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0301212007')
        ]);

        User::create([
            'name' => 'CARRASCO ASTUDILLO RAQUEL ALEXANDRA',
            'ci' => '0301450102',
            'phone' => '',
            'email' => 'raquel.carrasco@funcionjudicial.gob.ec',
            'unidad_id' => 59,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0301450102')
        ]);

        User::create([
            'name' => 'CHAVEZ WEBSTER MAURICIO ANDRES',
            'ci' => '0103103149',
            'phone' => '',
            'email' => 'mauricio.chavez@funcionjudicial.gob.ec',
            'unidad_id' => 59,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0103103149')
        ]);

        User::create([
            'name' => 'CHUNGATA CABRERA ANA MARIBEL',
            'ci' => '0105304240',
            'phone' => '',
            'email' => 'ana.chungata@funcionjudicial.gob.ec',
            'unidad_id' => 59,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0105304240')
        ]);

        User::create([
            'name' => 'CONSTANTINE ZAMBRANO JOSE LUIS',
            'ci' => '0913490082',
            'phone' => '',
            'email' => 'jose.constantine@funcionjudicial.gob.ec',
            'unidad_id' => 59,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0913490082')
        ]);

        User::create([
            'name' => 'CORNEJO ROMERO ANA CECILIA',
            'ci' => '0102186764',
            'phone' => '',
            'email' => 'ana.cornejo@funcionjudicial.gob.ec',
            'unidad_id' => 59,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0102186764')
        ]);

        User::create([
            'name' => 'CORTES JARA DIANA LEONOR ',
            'ci' => '1400251003',
            'phone' => '',
            'email' => 'diana.cortes@funcionjudicial.gob.ec',
            'unidad_id' => 59,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('1400251003')
        ]);

        User::create([
            'name' => 'CRESPO ANDRADE LUIS ALFONSO',
            'ci' => '0300848173',
            'phone' => '',
            'email' => 'Luis.Crespo@funcionjudicial.gob.ec',
            'unidad_id' => 59,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0300848173')
        ]);

        User::create([
            'name' => 'GUZMAN MUÑOZ CARLOS JULIO',
            'ci' => '0101771780',
            'phone' => '',
            'email' => 'carlos.guzman@funcionjudicial.gob.ec',
            'unidad_id' => 59,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0101771780')
        ]);

        User::create([
            'name' => 'FLORES RODRIGUEZ ANDRES FRANCISCO',
            'ci' => '0301547022',
            'phone' => '',
            'email' => 'andres.flores@funcionjudicial.gob.ec',
            'unidad_id' => 59,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0301547022')
        ]);

        User::create([
            'name' => 'HERNANDEZ SIAVICHAY CLEMENCIA EMERITA',
            'ci' => '0101651362',
            'phone' => '',
            'email' => 'clemencia.hernandez@funcionjudicial.gob.ec',
            'unidad_id' => 59,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0101651362')
        ]);

        User::create([
            'name' => 'IDROVO REGALADO MARLENE JHULIANA',
            'ci' => '0301651436',
            'phone' => '',
            'email' => 'marlene.idrovo@funcionjudicial.gob.ec',
            'unidad_id' => 59,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0301651436')
        ]);

        User::create([
            'name' => 'MALDONADO GARCIA VIVIANA LEONOR',
            'ci' => '0104857693',
            'phone' => '',
            'email' => 'viviana.maldonado@funcionjudicial.gob.ec',
            'unidad_id' => 59,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0104857693')
        ]);

        User::create([
            'name' => 'MOLINA PINEDA ANDREA LILIANA',
            'ci' => '0102972577',
            'phone' => '',
            'email' => 'andrea.molinap@funcionjudicial.gob.ec',
            'unidad_id' => 59,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0102972577')
        ]);

        User::create([
            'name' => 'ORDOÑEZ GUZMAN MARIA VERÓNICA',
            'ci' => '1104214166',
            'phone' => '',
            'email' => 'maria.ordonezg@funcionjudicial.gob.ec',
            'unidad_id' => 59,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('1104214166')
        ]);

        User::create([
            'name' => 'NARVAEZ NARVAEZ LUVY MORAYMA',
            'ci' => '0301206496',
            'phone' => '',
            'email' => 'luvy.narvaez@funcionjudicial.gob.ec',
            'unidad_id' => 59,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0301206496')
        ]);


        User::create([
            'name' => 'PACHAR RODRIGUEZ ILIANA BEATRIZ',
            'ci' => '1102565585',
            'phone' => '',
            'email' => 'iliana.pachar@funcionjudicial.gob.ec',
            'unidad_id' => 59,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('1102565585')
        ]);

        User::create([
            'name' => 'PALOMEQUE LUNA MARIANA SALOMÉ',
            'ci' => '0301418257',
            'phone' => '',
            'email' => 'mariana.palomeque@funcionjudicial.gob.ec',
            'unidad_id' => 59,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0301418257')
        ]);

        User::create([
            'name' => 'PERALTA PARRA JOSE ALEJANDRO',
            'ci' => '1709402703',
            'phone' => '',
            'email' => 'jose.peraltap@funcionjudicial.gob.ec',
            'unidad_id' => 59,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('1709402703')
        ]);

        User::create([
            'name' => 'PALACIOS VINTIMILLA TANIA REBECA',
            'ci' => '0301605135',
            'phone' => '',
            'email' => 'tania.palacios@funcionjudicial.gob.ec',
            'unidad_id' => 59,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0301605135')
        ]);

        User::create([
            'name' => 'PAZMIÑO MENDIETA RUTH GABRIELA',
            'ci' => '0104161039',
            'phone' => '',
            'email' => 'ruth.pazmino@funcionjudicial.gob.ec',
            'unidad_id' => 59,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0104161039')
        ]);

        User::create([
            'name' => 'RUIZ MARTINEZ PABLO RAFALEL',
            'ci' => '0102846730',
            'phone' => '',
            'email' => 'pablo.ruiz@funcionjudicial.gob.ec',
            'unidad_id' => 59,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0102846730')
        ]);

        User::create([
            'name' => 'RODAS SERRANO JOSE FRANCISCO',
            'ci' => '0301205936',
            'phone' => '',
            'email' => 'jose.rodas@funcionjudicial.gob.ec',
            'unidad_id' => 59,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0301205936')
        ]);

        User::create([
            'name' => 'SANGOLQUI PICON WILLIAN FERNANDO',
            'ci' => '0102408390',
            'phone' => '',
            'email' => 'willian.sangolqui@funcionjudicial.gob.ec',
            'unidad_id' => 59,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0102408390')
        ]);

        User::create([
            'name' => 'ROMERO MUÑOZ CECILIA KATERINE',
            'ci' => '0301636379',
            'phone' => '',
            'email' => 'cecilia.romero@funcionjudicial.gob.ec',
            'unidad_id' => 59,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0301636379')
        ]);

        User::create([
            'name' => 'SACASARI HARO GEOVANNA CRISTINA',
            'ci' => '0105254965',
            'phone' => '',
            'email' => 'geovanna.sacasari@funcionjudicial.gob.ec',
            'unidad_id' => 59,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0105254965')
        ]);

        User::create([
            'name' => 'SUMBA CARACUNDO FELIPE SANTIAGO',
            'ci' => '0104471842',
            'phone' => '',
            'email' => 'felipe.sumba@funcionjudicial.gob.ec',
            'unidad_id' => 59,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0104471842')
        ]);


        //unidad_id "60"


        User::create([
            'name' => 'IZQUIERDO VINTIMILLA JUAN CARLOS',
            'ci' => '0103670824',
            'phone' => '',
            'email' => 'juan.izquierdo@funcionjudicial.gob.ec',
            'unidad_id' => 60,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0103670824')
        ]);

        User::create([
            'name' => 'MORENO YANEZ SANTIAGO JAVIER',
            'ci' => '0104476494',
            'phone' => '',
            'email' => 'santiago.moreno@funcionjudicial.gob.ec',
            'unidad_id' => 60,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0104476494')
        ]);

        User::create([
            'name' => 'CHICA ROJAS MARCELO ADRIAN',
            'ci' => '0103649539',
            'phone' => '',
            'email' => 'adrian.chica@funcionjudicial.gob.ec',
            'unidad_id' => 60,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0103649539')
        ]);

        //unidad_id "61"


        User::create([
            'name' => 'ITURRALDE PESANTEZ JOSE LUIS',
            'ci' => '0103556130',
            'phone' => '',
            'email' => 'jose.iturralde@funcionjudicial.gob.ec',
            'unidad_id' => 61,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0103556130')
        ]);

        //unidad_id "62"


        User::create([
            'name' => 'QUIZHPE PARRA ANDRES BENIGNO',
            'ci' => '0104972716',
            'phone' => '',
            'email' => 'andres.quizhpe@funcionjudicial.gob.ec',
            'unidad_id' => 62,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0104972716')
        ]);

        User::create([
            'name' => 'GUNCAY ZHUNIO EDWIN PATRICIO',
            'ci' => '0401112693',
            'phone' => '',
            'email' => ' 	edwin.guncay@funcionjudicial.gob.ec ',
            'unidad_id' => 50,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0401112693')
        ]);

        User::create([
            'name' => 'PLAZA TINTIN GALO ANDRES',
            'ci' => '0104571633',
            'phone' => '',
            'email' => 'galo.plaza@funcionjudicial.gob.ec',
            'unidad_id' => 53,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0104571633')
        ]);

        User::create([
            'name' => 'PERALTA PULLA WALTER LEONARDO',
            'ci' => '0104774484',
            'phone' => '',
            'email' => 'walter.peralta@funcionjudicial.gob.ec ',
            'unidad_id' => 39,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0104774484')
        ]);

        User::create([
            'name' => 'JARAMILLO RAMIREZ JORGE EDUARDO',
            'ci' => '0102424371',
            'phone' => '',
            'email' => ' 	jorge.jaramillor@funcionjudicial.gob.ec',
            'unidad_id' => 40,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0102424371')
        ]);

        User::create([
            'name' => 'VAZQUEZ LEON JUAN ANDRES',
            'ci' => '0105490866',
            'phone' => '',
            'email' => 'juan.vazquez@funcionjudicial.gob.ec',
            'unidad_id' => 50,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0105490866')
        ]);

        User::create([
            'name' => 'AVILES PADILLA MARIA JOSE',
            'ci' => '0106547722',
            'phone' => '',
            'email' => 'maria.aviles@funcionjudicial.gob.ec',
            'unidad_id' => 39,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0106547722')
        ]);


        User::create([
            'name' => 'USUARIO POR ASIGNAR',
            'ci' => '0101010101',
            'phone' => '',
            'email' => 'porasignar@funcionjudicial.gob.ec',
            'unidad_id' => 2,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0101010101')
        ]);

        User::create([
            'name' => 'CARDENAS ORDOÑEZ DALILA MAGDALENA',
            'ci' => '0302123807',
            'phone' => '',
            'email' => 'dalila.cardenas@funcionjudicial.gob.ec',
            'unidad_id' => 28,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0302123807')
        ]);

        User::create([
            'name' => 'REINOSO AVILA CHRISTIAN MARCOS',
            'ci' => '0103141933',
            'phone' => '',
            'email' => 'christian.reinoso@funcionjudicial.gob.ec ',
            'unidad_id' => 2,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('0103141933')
        ]);

        User::create([
            'name' => 'RIOFRIO PEREZ ANABEL DEL CISNE',
            'ci' => '1104491699',
            'phone' => '',
            'email' => 'anabel.riofrio@funcionjudicial.gob.ec ',
            'unidad_id' => 29,
            'profile' => 'Official',
            'status' => 'ACTIVE',
            'password' => bcrypt('1104491699')
        ]);




    }
}
