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
        Role::create(['name'=>'Admin']);
        Role::create(['name'=>'Official']);
        Role::create(['name'=>'Delegado']);

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

     Permission::create([
        'name' => 'asignar_permisos',
        'guard_name' => 'web',
    ]);






    }
}
