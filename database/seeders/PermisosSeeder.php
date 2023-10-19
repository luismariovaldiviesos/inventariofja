<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermisosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //roles

     $admin =  Role::create(['name'=>'Admin']);
     $official =  Role::create(['name'=>'Official']);
     $delegado  = Role::create(['name'=>'Delegado']);
     $delegadoActivos =  Role::create(['name'=> 'DelegadoActivos']);

        //provincia
        Permission::create(['name' => 'crear_provincia',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'ver_provincia',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'buscar_provincia',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'editar_provincia',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'eliminar_provincia',
            'guard_name' => 'web',
        ]);

        //cantones
        Permission::create(['name' => 'crear_canton',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'ver_canton',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'buscar_canton',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'editar_canton',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'eliminar_canton',
            'guard_name' => 'web',
        ]);

        //edifiocs
        Permission::create(['name' => 'crear_edificio',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'ver_edificio',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'buscar_edificio',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'editar_edificio',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'eliminar_edificio',
            'guard_name' => 'web',
        ]);

         //unidades
        Permission::create(['name' => 'crear_unidad',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'ver_unidad',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'buscar_unidad',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'editar_unidad',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'eliminar_unidad',
            'guard_name' => 'web',
        ]);


         //marcas
        Permission::create(['name' => 'crear_marca',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'ver_marca',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'buscar_marca',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'editar_marca',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'eliminar_marca',
            'guard_name' => 'web',
        ]);

        //tipos
        Permission::create(['name' => 'crear_tipo',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'ver_tipo',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'buscar_tipo',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'editar_tipo',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'eliminar_tipo',
            'guard_name' => 'web',
        ]);

        //modelos
        Permission::create(['name' => 'crear_modelo',
          'guard_name' => 'web',
      ]);
      Permission::create([
          'name' => 'ver_modelo',
          'guard_name' => 'web',
      ]);
      Permission::create([
          'name' => 'buscar_modelo',
          'guard_name' => 'web',
      ]);
      Permission::create([
          'name' => 'editar_modelo',
          'guard_name' => 'web',
      ]);
      Permission::create([
          'name' => 'eliminar_modelo',
          'guard_name' => 'web',
      ]);


      //roles
        Permission::create(['name' => 'crear_rol',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'ver_rol',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'buscar_rol',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'editar_rol',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'eliminar_rol',
            'guard_name' => 'web',
        ]);

        //permisos
        Permission::create(['name' => 'crear_permiso',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'ver_permiso',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'buscar_permiso',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'editar_permiso',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'eliminar_permiso',
            'guard_name' => 'web',
        ]);

    //usuarios
    Permission::create(['name' => 'crear_usuario',
         'guard_name' => 'web',
     ]);
     Permission::create([
         'name' => 'ver_usuario',
         'guard_name' => 'web',
     ]);
     Permission::create([
         'name' => 'buscar_usuario',
         'guard_name' => 'web',
     ]);
     Permission::create([
         'name' => 'editar_usuario',
         'guard_name' => 'web',
     ]);
     Permission::create([
         'name' => 'eliminar_usuario',
         'guard_name' => 'web',
     ]);
    //delegados
    Permission::create(['name' => 'crear_delegado',
         'guard_name' => 'web',
     ]);
     Permission::create([
         'name' => 'ver_delegado',
         'guard_name' => 'web',
     ]);
     Permission::create([
         'name' => 'buscar_delegado',
         'guard_name' => 'web',
     ]);
     Permission::create([
         'name' => 'editar_delegado',
         'guard_name' => 'web',
     ]);
     Permission::create([
         'name' => 'eliminar_delegado',
         'guard_name' => 'web',
     ]);
    //monitor
    Permission::create(['name' => 'crear_monitor',
         'guard_name' => 'web',
     ]);
     Permission::create([
         'name' => 'ver_monitor',
         'guard_name' => 'web',
     ]);
     Permission::create([
         'name' => 'buscar_monitor',
         'guard_name' => 'web',
     ]);
     Permission::create([
         'name' => 'editar_monitor',
         'guard_name' => 'web',
     ]);
     Permission::create([
         'name' => 'eliminar_monitor',
         'guard_name' => 'web',
     ]);
    //teclado
    Permission::create(['name' => 'crear_teclado',
         'guard_name' => 'web',
     ]);
     Permission::create([
         'name' => 'ver_teclado',
         'guard_name' => 'web',
     ]);
     Permission::create([
         'name' => 'buscar_teclado',
         'guard_name' => 'web',
     ]);
     Permission::create([
         'name' => 'editar_teclado',
         'guard_name' => 'web',
     ]);
     Permission::create([
         'name' => 'eliminar_teclado',
         'guard_name' => 'web',
     ]);
    //mouse
    Permission::create(['name' => 'crear_mouse',
         'guard_name' => 'web',
     ]);
     Permission::create([
         'name' => 'ver_mouse',
         'guard_name' => 'web',
     ]);
     Permission::create([
         'name' => 'buscar_mouse',
         'guard_name' => 'web',
     ]);
     Permission::create([
         'name' => 'editar_mouse',
         'guard_name' => 'web',
     ]);
     Permission::create([
         'name' => 'eliminar_mouse',
         'guard_name' => 'web',
     ]);
    //telefono
    Permission::create(['name' => 'crear_telefono',
         'guard_name' => 'web',
     ]);
     Permission::create([
         'name' => 'ver_telefono',
         'guard_name' => 'web',
     ]);
     Permission::create([
         'name' => 'buscar_telefono',
         'guard_name' => 'web',
     ]);
     Permission::create([
         'name' => 'editar_telefono',
         'guard_name' => 'web',
     ]);
     Permission::create([
         'name' => 'eliminar_telefono',
         'guard_name' => 'web',
     ]);
    //scanner
    Permission::create(['name' => 'crear_scanner',
         'guard_name' => 'web',
     ]);
     Permission::create([
         'name' => 'ver_scanner',
         'guard_name' => 'web',
     ]);
     Permission::create([
         'name' => 'buscar_scanner',
         'guard_name' => 'web',
     ]);
     Permission::create([
         'name' => 'editar_scanner',
         'guard_name' => 'web',
     ]);
     Permission::create([
         'name' => 'eliminar_scanner',
         'guard_name' => 'web',
     ]);
    //impresora
    Permission::create(['name' => 'crear_impresora',
         'guard_name' => 'web',
     ]);
     Permission::create([
         'name' => 'ver_impresora',
         'guard_name' => 'web',
     ]);
     Permission::create([
         'name' => 'buscar_impresora',
         'guard_name' => 'web',
     ]);
     Permission::create([
         'name' => 'editar_impresora',
         'guard_name' => 'web',
     ]);
     Permission::create([
         'name' => 'eliminar_impresora',
         'guard_name' => 'web',
     ]);
    //pc
    Permission::create(['name' => 'crear_pc',
         'guard_name' => 'web',
     ]);
     Permission::create([
         'name' => 'ver_pc',
         'guard_name' => 'web',
     ]);
     Permission::create([
         'name' => 'buscar_pc',
         'guard_name' => 'web',
     ]);
     Permission::create([
         'name' => 'editar_pc',
         'guard_name' => 'web',
     ]);
     Permission::create([
         'name' => 'eliminar_pc',
         'guard_name' => 'web',
     ]);
    //laptop
    Permission::create(['name' => 'crear_laptop',
         'guard_name' => 'web',
     ]);
     Permission::create([
         'name' => 'ver_laptop',
         'guard_name' => 'web',
     ]);
     Permission::create([
         'name' => 'buscar_laptop',
         'guard_name' => 'web',
     ]);
     Permission::create([
         'name' => 'editar_laptop',
         'guard_name' => 'web',
     ]);
     Permission::create([
         'name' => 'eliminar_laptop',
         'guard_name' => 'web',
     ]);
     Permission::create([
         'name' => 'revisar_inventario',
         'guard_name' => 'web',
     ]);
     Permission::create([
         'name' => 'dar_baja',
         'guard_name' => 'web',
     ]);



     //asignar permisos al role Admin
        $admin->givePermissionTo([
            //provincia
            'crear_provincia',
            'ver_provincia',
            'buscar_provincia',
            'editar_provincia',
            'eliminar_provincia',

            //canton
            'crear_canton',
            'ver_canton',
            'buscar_canton',
            'editar_canton',
            'eliminar_canton',

            //edificio
            'crear_edificio',
            'ver_edificio',
            'buscar_edificio',
            'editar_edificio',
            'eliminar_edificio',

            //unidad
            'crear_unidad',
            'ver_unidad',
            'buscar_unidad',
            'editar_unidad',
            'eliminar_unidad',

            //marca
            'crear_marca',
            'ver_marca',
            'buscar_marca',
            'editar_marca',
            'eliminar_marca',

            //tipo
            'crear_tipo',
            'ver_tipo',
            'buscar_tipo',
            'editar_tipo',
            'eliminar_tipo',

            //modelo
            'crear_modelo',
            'ver_modelo',
            'buscar_modelo',
            'editar_modelo',
            'eliminar_modelo',

            //rol
            'crear_rol',
            'ver_rol',
            'buscar_rol',
            'editar_rol',
            'eliminar_rol',

            //permiso
            'crear_permiso',
            'ver_permiso',
            'buscar_permiso',
            'editar_permiso',
            'eliminar_permiso',

            //usuarios
            'crear_usuario',
            'ver_usuario',
            'buscar_usuario',
            'editar_usuario',
            'eliminar_usuario',

            //delegado
            'crear_delegado',
            'ver_delegado',
            'buscar_delegado',
            'editar_delegado',
            'eliminar_delegado',

            //permiso
            'editar_permiso',
            'eliminar_permiso',

            //monitor
            'crear_monitor',
            'ver_monitor',
            'buscar_monitor',
            'editar_monitor',
            'eliminar_monitor',

            //teclado
            'crear_teclado',
            'ver_teclado',
            'buscar_teclado',
            'editar_teclado',
            'eliminar_teclado',

            //mouse
            'crear_mouse',
            'ver_mouse',
            'buscar_mouse',
            'editar_mouse',
            'eliminar_mouse',

            //telefono
            'crear_telefono',
            'ver_telefono',
            'buscar_telefono',
            'editar_telefono',
            'eliminar_telefono',


            //scanner
            'crear_scanner',
            'ver_scanner',
            'buscar_scanner',
            'editar_scanner',
            'eliminar_scanner',


            //impresora
            'crear_impresora',
            'ver_impresora',
            'buscar_impresora',
            'editar_impresora',
            'eliminar_impresora',

            //pc
            'crear_pc',
            'ver_pc',
            'buscar_pc',
            'editar_pc',
            'eliminar_pc',

            //laptop
            'crear_laptop',
            'ver_laptop',
            'buscar_laptop',
            'editar_laptop',
            'eliminar_laptop'

        ]);

        $delegado->givePermissionTo([
            //monitor
            'crear_monitor',
            'ver_monitor',
            'buscar_monitor',
            'editar_monitor',
            'eliminar_monitor',

            //teclado
            'crear_teclado',
            'ver_teclado',
            'buscar_teclado',
            'editar_teclado',
            'eliminar_teclado',

            //mouse
            'crear_mouse',
            'ver_mouse',
            'buscar_mouse',
            'editar_mouse',
            'eliminar_mouse',

            //telefono
            'crear_telefono',
            'ver_telefono',
            'buscar_telefono',
            'editar_telefono',
            'eliminar_telefono',


            //scanner
            'crear_scanner',
            'ver_scanner',
            'buscar_scanner',
            'editar_scanner',
            'eliminar_scanner',


            //impresora
            'crear_impresora',
            'ver_impresora',
            'buscar_impresora',
            'editar_impresora',
            'eliminar_impresora',

            //pc
            'crear_pc',
            'ver_pc',
            'buscar_pc',
            'editar_pc',
            'eliminar_pc',

            //laptop
            'crear_laptop',
            'ver_laptop',
            'buscar_laptop',
            'editar_laptop',
            'eliminar_laptop',

            //revissar inventario
            'revisar_inventario'

        ]);

        $official->givePermissionTo([
            //monitor

            'ver_monitor',
            'buscar_monitor',


            //teclado

            'ver_teclado',
            'buscar_teclado',


            //mouse

            'ver_mouse',
            'buscar_mouse',

            //telefono

            'ver_telefono',
            'buscar_telefono',



            //scanner

            'ver_scanner',
            'buscar_scanner',



            //impresora

            'ver_impresora',
            'buscar_impresora',


            //pc

            'ver_pc',
            'buscar_pc',


            //laptop

            'ver_laptop',
            'buscar_laptop',


        ]);
        $delegadoActivos->givePermissionTo([
            //monitor
            'crear_monitor',
            'ver_monitor',
            'buscar_monitor',
            'editar_monitor',
            'eliminar_monitor',

            //teclado
            'crear_teclado',
            'ver_teclado',
            'buscar_teclado',
            'editar_teclado',
            'eliminar_teclado',

            //mouse
            'crear_mouse',
            'ver_mouse',
            'buscar_mouse',
            'editar_mouse',
            'eliminar_mouse',

            //telefono
            'crear_telefono',
            'ver_telefono',
            'buscar_telefono',
            'editar_telefono',
            'eliminar_telefono',


            //scanner
            'crear_scanner',
            'ver_scanner',
            'buscar_scanner',
            'editar_scanner',
            'eliminar_scanner',


            //impresora
            'crear_impresora',
            'ver_impresora',
            'buscar_impresora',
            'editar_impresora',
            'eliminar_impresora',

            //pc
            'crear_pc',
            'ver_pc',
            'buscar_pc',
            'editar_pc',
            'eliminar_pc',

            //laptop
            'crear_laptop',
            'ver_laptop',
            'buscar_laptop',
            'editar_laptop',
            'eliminar_laptop',

            //revissar inventario
            'revisar_inventario',

            //dar de baja 
            'dar_baja'

        ]);




    }
}
