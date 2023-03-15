<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call(ProvinciaSeeder::class);
        $this->call(CantonSeeder::class);
        $this->call(EdificioSeeder::class);
        $this->call(UnidadSeeder::class);
        $this->call(TipoSeeder::class);
        $this->call(MarcaSeeder::class);
        $this->call(MarcaTipoSeeder::class);
        $this->call(ModeloSeeder::class);
        $this->call(PermisosSeeder::class);
        $this->call(UserSeeder::class);
        //$this->call(PcsSeeder::class);
    }
}
