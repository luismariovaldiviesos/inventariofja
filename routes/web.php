<?php

use App\Http\Livewire\Cantones;
use App\Http\Livewire\Edificios;
use App\Http\Livewire\Marcas;
use App\Http\Livewire\Modelos;
use App\Http\Livewire\Provincias;
use App\Http\Livewire\Tipos;
use App\Http\Livewire\Unidades;
use App\Http\Livewire\Users;
use App\Http\Livewire\Roles;
use App\Http\Livewire\Permisos;
use App\Http\Livewire\Asignar;
use App\Http\Livewire\Dashboard;
use App\Http\Livewire\Monitores;
use App\Http\Livewire\Mouses;
use App\Http\Livewire\Ratones;
use App\Http\Livewire\Scanners;
use App\Http\Livewire\Teclados;
use App\Http\Livewire\Telefonos;
use App\Models\Scanner;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('users', Users::class)->name('users');

Route::middleware(['auth'])->group(function (){

    Route::get('provincias', Provincias::class)->name('provincias');
    Route::get('cantones', Cantones::class)->name('cantones');
    Route::get('edificios', Edificios::class)->name('edificios');
    Route::get('unidades', Unidades::class)->name('unidades');

    Route::get('marcas', Marcas::class)->name('marcas');
    Route::get('tipos', Tipos::class)->name('tipos');
    Route::get('modelos',Modelos::class)->name('modelos');


    Route::get('roles', Roles::class)->name('roles');
    Route::get('permisos', Permisos::class)->name('permisos');
    Route::get('asignar', Asignar::class)->name('asignar');
    Route::get('dash', Dashboard::class)->name('dash');


    Route::get('monitores', Monitores::class)->name('monitores');
    Route::get('teclados', Teclados::class)->name('teclados');
    Route::get('ratones', Ratones::class)->name('ratones');

    Route::get('telefonos', Telefonos::class)->name('telefonos');

    Route::get('scanners', Scanners::class)->name('scanners');




});




// ruta principal
Route::get('/', function () {
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
